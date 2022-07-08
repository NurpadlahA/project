<?php 
class Sewa extends CI_Controller{
    public function index(){
        $this->load->model('sewa_model');
        $sewa = $this->sewa_model->getAll();
        $data['sewa'] = $sewa;
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('sewa/index', $data);
        $this->load->view('layouts/foother');
    }
    public function detail($id){
        $this->load->model('sewa_model');
        $sw = $this->sewa_model->getByid($id);
        $data['sw'] = $sw;
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('sewa/detail', $data);
        $this->load->view('layouts/foother');
    }
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('sewa/form');
        $this->load->view('layouts/foother');
    }
    public function save(){
        $this->load->model('sewa_model','sewa');
        $_tanggal_mulai = $this->input->post('tanggal_mulai');
        $_tanggal_akhir = $this->input->post('tanggal_akhir');
        $_tujuan = $this->input->post('tujuan');
        $_noktp = $this->input->post('noktp');
        $_users_id = $this->input->post('users_id');
        $_mobil_id = $this->input->post('mobil_id');

        $data_sewa['tanggal_mulai'] = $_tanggal_mulai;
        $data_sewa['tanggal_akhir'] = $_tanggal_akhir;
        $data_sewa['tujuan'] = $_tujuan;
        $data_sewa['noktp'] = $_noktp;
        $data_sewa['users_id'] = $_users_id;
        $data_sewa['mobil_id'] = $_mobil_id;

        if((!empty($_idedit))){
            $data_sewa['id'] = $_idedit;
            $this->load->update($data_sewa);
        }else{
            $this->sewa->simpan($data_sewa);
        }
        redirect('sewa','refresh');
    }
    public function edit($id){
        $this->load->model('sewa_model','sewa');
        $obj_sewa = $this->sewa->getByid($id);
        $data['obj_sewa'] = $obj_sewa;
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('sewa/edit', $data);
        $this->load->view('layouts/foother');
    }
    public function delete($id){
        $this->load->model('sewa_model','sewa');
        $data_sewa['id'] = $id;
        $this->sewa->delete($data_sewa);
        redirect('sewa','refresh');
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