<?php

class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
    }

    public function index(){
        // Jika form login disubmit
        if($this->input->post()){
            if($this->user_model->doLogin()) redirect(site_url('admin/overview'));
        }

        if($this->user_model->isNotLogin() == false) redirect(site_url('admin/overview'));

        // Tampil halaman login
        $this->load->view("admin/login_page.php");
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }
}

?>