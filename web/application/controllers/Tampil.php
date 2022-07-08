<?php 
class Tampil extends CI_Controller{
    public function index(){
        $this->load->model('mobil_model');
        $mobil = $this->mobil_model->getAll();
        $data['mobil'] = $mobil;

        // render view
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('mobil/tampil', $data);
        $this->load->view('layouts/foother');
    }
    public function merk(){
        $this->load->model('merk_model');
        $merk = $this->merk_model->getAll();
        $data['merk'] = $merk;

        // render view
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('merk/tampil', $data);
        $this->load->view('layouts/foother');
    }
    public function perawatan(){
        // akses moel
        $this->load->model('perawatan_model');
        $perawatan = $this->perawatan_model->getAll();
        $data['perawatan'] = $perawatan;

        // Render view
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('perawatan/tampil', $data);
        $this->load->view('layouts/foother');
    }
    public function jenis_perawatan(){
        // akses moel
        $this->load->model('jenis_perawatan_model');
        $jenis_perawatan = $this->jenis_perawatan_model->getAll();
        $data['jenis_perawatan'] = $jenis_perawatan;

        // Render view
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('jenis_perawatan/tampil', $data);
        $this->load->view('layouts/foother');
    }
}
?>