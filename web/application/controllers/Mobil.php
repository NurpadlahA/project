<?php 
class Mobil extends CI_Controller{
    public function index(){
        $this->load->model('mobil_model');
        $mobil = $this->mobil_model->getAll();
        $data['mobil'] = $mobil;
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('mobil/index', $data);
        $this->load->view('layouts/foother');
    }
    public function detail($id){
        $this->load->model('mobil_model');
        $ml = $this->mobil_model->getByid($id);
        $data['ml'] = $ml;
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('mobil/detail', $data);
        $this->load->view('layouts/foother');
    }
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('mobil/form');
        $this->load->view('layouts/foother');
    }
    public function save(){
        $this->load->model('mobil_model','mobil');
        $_nopol = $this->input->post('nopol');
        $_warna = $this->input->post('warna');
        $_biaya_sewa = $this->input->post('biaya_sewa');
        $_deskripsi = $this->input->post('deskripsi');
        $_cc = $this->input->post('cc');
        $_tahun = $this->input->post('tahun');
        $_merk_id = $this->input->post('merk_id');
        $_foto = $this->input->post('foto');

        $data_mobil['nopol'] = $_nopol;
        $data_mobil['warna'] = $_warna;
        $data_mobil['biaya_sewa'] = $_biaya_sewa;
        $data_mobil['deskripsi'] = $_deskripsi;
        $data_mobil['cc'] = $_cc;
        $data_mobil['tahun'] = $_tahun;
        $data_mobil['merk_id'] = $_merk_id;
        $data_mobil['foto'] = $_foto;

        if((!empty($_idedit))){
            $data_mobil['id'] = $_idedit;
            $this->load->update($data_mobil);
        }else{
            $this->mobil->simpan($data_mobil);
        }
        redirect('mobil','refresh');
    }
    public function edit($id){
        $this->load->model('mobil_model','mobil');
        $obj_mobil = $this->mobil->getByid($id);
        $data['obj_mobil'] = $obj_mobil;
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('mobil/edit', $data);
        $this->load->view('layouts/foother');
    }
    public function delete($id){
        $this->load->model('mobil_model','mobil');
        $data_mobil['id'] = $id;
        $this->mobil->delete($data_mobil);
        redirect('mobil','refresh');
    }
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('/login');
        }
    }
    public function upload(){
        $_nopolmobil = $this->input->post('nopolmobil');
        // akes model mahasiswa
        $this->load->model('mobil_model','mobil');
        $ml = $this->mobil->getBynopol($_nopolmobil);
        $data['ml'] = $ml;

        $config ['upload_path']='./uploads/photos';
        $config ['allowed_types']='jpg|png';
        $config ['max_size']=2894;
        $config ['max_width']=2894;
        $config ['max_height']=2894;
        $config ['file_name']=$ml->nopol;

        // aktifkan library upload
        $this->load->library('upload',$config);
        // jika tidak ada file yang di upload 
        if (!$this->upload->do_upload('foto')) {
              // maka tampilan pesan eror
            $data['error'] = $this->upload->display_errors();
        } else {
            // jika ada file yang di upload
            // maka tampilkan pesan data berhasil di upload
            $data['upload_data'] = $this->upload->data();
            $data['error'] = 'data sukses';
        }

        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('mobil/detail', $data);
        $this->load->view('layouts/foother');
    }
}
?>