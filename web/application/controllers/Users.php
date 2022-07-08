<?php 
class Users extends CI_Controller{
    public function index(){
        $this->load->model('users_model');
        $users = $this->users_model->getAll();
        $data['users'] = $users;
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('users/index', $data);
        $this->load->view('layouts/foother');
    }
    public function detail($id){
        $this->load->model('users_model');
        $usr = $this->users_model->getByid($id);
        $data['usr'] = $usr;
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('users/detail', $data);
        $this->load->view('layouts/foother');
    }
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('users/form');
        $this->load->view('layouts/foother');
    }
    public function save(){
        $this->load->model('users_model','user');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_created_at = $this->input->post('crated_at');
        $_last_login = $this->input->post('last_login');
        $_status = $this->input->post('status');
        $_role = $this->input->post('role');

        $data_users['username'] = $_username;
        $data_users['passworrd'] = $_password;
        $data_users['email'] = $_email;
        $data_users['crated_at'] = $_created_at;
        $data_users['last_login'] = $_last_login;
        $data_users['role'] = $_role;

        if((!empty($_idedit))){
            $data_users['id'] = $_idedit;
            $this->load->update($data_users);
        }else{
            $this->user->simpan($data_users);
        }
        redirect('user','refresh');
    }
    public function edit($id){
        $this->load->model('users_model','users');
        $obj_users = $this->users->getByid($id);
        $data['obj_users'] = $obj_user;
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('users/edit', $data);
        $this->load->view('layouts/foother');
    }
    public function delete($id){
        $this->load->model('users_model','users');
        $data_user['id'] = $id;
        $this->user->delete($data_users);
        redirect('users','refresh');
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