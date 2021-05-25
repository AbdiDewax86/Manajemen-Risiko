<?php

Class UserManagement extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view("admin/usermanagement/usermanagement");
    }

    public function list(){
        $this->load->view("admin/usermanagement/list");
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