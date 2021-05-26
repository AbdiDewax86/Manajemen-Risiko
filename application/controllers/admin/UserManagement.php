<?php

Class UserManagement extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("usermanagement_model");
        $this->load->library('form_validation');
        
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index(){
        $this->load->view("admin/usermanagement/usermanagement");
    }

    public function list(){
        $data["users"] = $this->usermanagement_model->getAll();
        $this->load->view("admin/usermanagement/list", $data);
    }

    public function add(){
        $this->load->view("admin/usermanagement/new_user");
    }

    public function edit(){
        $this->load->view("admin/usermanagement/edit_user");
    }

    public function delete(){

    }
}

?>