<?php
class Login extends CI_Controller{
    public function index(){
        $this->load->view('login/index');
    }
    public function auth(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username == 'admin' && $password == '12345') {
            $userdata =[
                "username" => $username,
                "logged_in" => TRUE,
            ];
            $this->session->set_userdata($userdata);
            redirect('/mobil');
            redirect('/sewa');
            redirect('/perawatan');
            redirect('/jenis_perawatan');
            redirect('/users');
        } elseif ($username == 'aminah' && $password == 'aminah') {
            $userdata =[
                "username" => $username,
            ];
            $this->session->set_userdata($userdata);
            redirect('/mobil');
        }else{
            redirect('/login');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('/login');
    }
}
?>