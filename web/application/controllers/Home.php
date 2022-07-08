<?php 
class Home extends CI_Controller{
    public function index(){
        $this->load->model('mobil_model');
        $mobil = $this->mobil_model->getAll();
        $data['mobil'] = $mobil;
        // merender method atau properti yang ada didalam object views
        $this->load->view('home/index',$data);
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
    // public function save(){
    //     $this->load->model('home_model');
    //     $_tanggal_mulai = $this->input->post('tanggal_mulai');
    //     $_tanggal_akhir = $this->input->post('tanggal_akhir');
    //     $_tujuan = $this->input->post('tujuan');
    //     $_noktp = $this->input->post('noktp');
    //     $_users_id = $this->input->post('users_id');
    //     $_mobil_id = $this->input->post('mobil_id');

    //     $data_home['tanggal_mulai'] = $_tanggal_mulai;
    //     $data_home['tanggal_akhir'] = $_tanggal_akhir;
    //     $data_home['tujuan'] = $_tujuan;
    //     $data_home['noktp'] = $_noktp;
    //     $data_home['users_id'] = $_users_id;
    //     $data_home['mobil_id'] = $_mobil_id;

    //     if((!empty($_idedit))){
    //         $data_home['id'] = $_idedit;
    //         $this->load->update($data_home);
    //     }else{
    //         $this->home->simpan($data_home);
    //     }
    //     redirect('home','refresh');
    // }
    
}
?>