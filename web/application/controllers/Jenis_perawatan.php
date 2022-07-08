<?php
class Jenis_perawatan extends CI_Controller{
    public function index(){
        $this->load->model('Jenis_perawatan_model');
        $jenis_perawatan = $this->Jenis_perawatan_model->getAll();
        $data['jenis_perawatan'] = $jenis_perawatan;
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('jenis_perawatan/index', $data);
        $this->load->view('layouts/foother'); 
    }
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('jenis_perawatan/form');
        $this->load->view('layouts/foother');
    }
    public function save(){
        $this->load->model('jenis_perawatan_model','jenis_perawatan'); 
        $_nama= $this->input->post('nama');
       
        $data_jenis_perawatan['nama'] = $_nama; 

        if((!empty($_idedit))){
            $data_jenis_perawatan['id'] = $_idedit;
            $this->jenis_perawatan->update($data_jenis_perawatan);
        }else{
            $this->jenis_perawatan->simpan($data_jenis_perawatan); 
        }
        redirect('jenis_perawatan','refresh');
    }
    public function edit($id){
        $this->load->model('jenis_perawatan_model','jenis_perawatan');
        $obj_jenis_perawatan = $this->jenis_perawatan->getByid($id);
        $data['obj_jenis_perawatan'] = $obj_jenis_perawatan;
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('jenis_perawatan/edit', $data);
        $this->load->view('layouts/foother'); 
    }
    public function delete($id){
        $this->load->model('jenis_perawatan_model','jenis_perawatan');
        // ngcek data mahasiswa berdasarkan id
        $data_jenis_perawatan['id'] = $id;
        $this->jenis_perawatan->delete($data_jenis_perawatan);
        redirect('jenis_perawatan','refresh');
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