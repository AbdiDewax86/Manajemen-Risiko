<?php

defined('BASEPATH') OR exit('No direct scripts allowed');

Class UserManagement extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("usermanagement_model");
        $this->load->library('form_validation');
        
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
        if($this->session->user_logged->role != 'admin') show_404();
    }

    public function index(){
        $this->load->view("admin/usermanagement/usermanagement");
    }

    public function list(){
        $this->session->set_userdata('referred_from', current_url());
        $data["users"] = $this->usermanagement_model->getAll();
        $this->load->view("admin/usermanagement/list", $data);
    }

    public function add(){
        $users = $this->usermanagement_model;
        $validation = $this->form_validation;
        $validation->set_rules($users->rules());
        $validation->set_rules('confirm_password','Confirm Password','required|matches[password]');

        if($validation->run()){
            $users->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/usermanagement/new_user");
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/usermanagement');

        $users = $this->usermanagement_model;
        $validation = $this->form_validation;
        $validation->set_rules($users->rules());

        if ($validation->run()) {
            $users->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["users"] = $users->getById($id);
        if (!$data["users"]) show_404();

        $this->load->view("admin/usermanagement/edit_user", $data);
    }

    public function delete($id = null){
        if (!isset($id)) show_404();

        if ($this->usermanagement_model->delete($id)){
            $referred_from = $this->session->userdata('referred_from');
            redirect($referred_from, 'refresh');
        }
    }
}

?>