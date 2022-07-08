<?php
class Merk extends CI_Controller{
    public function index(){
        $this->load->model('Merk_model');
        $merk = $this->Merk_model->getAll();
        $data['merk'] = $merk;
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('merk/index', $data);
        $this->load->view('layouts/foother'); 
    }
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('merk/form');
        $this->load->view('layouts/foother');
    }
    public function save(){
        $this->load->model('Merk_model','merk'); 
        $_nama= $this->input->post('nama');
        $_produk= $this->input->post('produk');
       
        $data_merk['nama'] = $_nama; 
        $data_merk['produk'] = $_produk;

        if((!empty($_idedit))){
            $data_merk['id'] = $_idedit;
            $this->merk->update($data_merk);
        }else{
            $this->merk->simpan($data_merk); 
        }
        redirect('merk','refresh');
    }
    public function edit($id){
        $this->load->model('merk_model','merk');
        $obj_merk = $this->merk->getByid($id);
        $data['obj_merk'] = $obj_merk;
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('merk/edit', $data);
        $this->load->view('layouts/foother'); 
    }
    public function delete($id){
        $this->load->model('merk_model','merk');
        // ngcek data mahasiswa berdasarkan id
        $data_merk['id'] = $id;
        $this->merk->delete($data_merk);
        redirect('merk','refresh');
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