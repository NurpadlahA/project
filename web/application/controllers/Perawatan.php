<?php 
class Perawatan extends CI_Controller{
    public function index(){
        $this->load->model('perawatan_model');
        $perawatan = $this->perawatan_model->getAll();
        $data['perawatan'] = $perawatan;
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('perawatan/index', $data);
        $this->load->view('layouts/foother');
    }
    public function detail($id){
        $this->load->model('perawatan_model');
        $rawat = $this->perawatan_model->getByid($id);
        $data['rawat'] = $rawat;
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('perawatan/detail', $data);
        $this->load->view('layouts/foother');
    }
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('perawatan/form');
        $this->load->view('layouts/foother');
    }
    public function save(){
        $this->load->model('perawatan_model','perawatan');
        $_tanggal = $this->input->post('tanggal');
        $_biaya = $this->input->post('biaya');
        $_km_mobil = $this->input->post('km_mobil');
        $_deskripsi = $this->input->post('deskripsi');
        $_mobil_id = $this->input->post('mobil_id');
        $_jenis_perawatan_id = $this->input->post('jenis_perawatan_id');

        $data_perawatan['tanggal'] = $_tanggal;
        $data_perawatan['biaya'] = $_biaya;
        $data_perawatan['km_mobil'] = $_km_mobil;
        $data_perawatan['deskripsi'] = $_deskripsi;
        $data_perawatan['mobil_id'] = $_mobil_id;
        $data_perawatan['jenis_perawatan_id'] = $_jenis_perawatan_id;

        if((!empty($_idedit))){
            $data_perawatan['id'] = $_idedit;
            $this->load->update($data_perawatan);
        }else{
            $this->perawatan->simpan($data_perawatan);
        }
        redirect('perawatan','refresh');
    }
    public function edit($id){
        $this->load->model('perawatan_model','perawatan');
        $obj_perawatan = $this->perawatan->getByid($id);
        $data['obj_perawatan'] = $obj_perawatan;
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('perawatan/edit', $data);
        $this->load->view('layouts/foother');
    }
    public function delete($id){
        $this->load->model('perawatan_model','perawatan');
        $data_perawatan['id'] = $id;
        $this->perawatan->delete($data_perawatan);
        redirect('perawatan','refresh');
    }
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('/login');
        }
    }
}
?>