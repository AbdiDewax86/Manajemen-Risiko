<?php

defined('BASEPATH') OR exit('No direct scripts allowed');

class Risiko extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("risiko_model");
        $this->load->library('form_validation');
    }

    public function index(){
        $data["risiko"] = $this->risiko_model->getAll();
        $this->load->view("admin/risiko/list", $data);
    }

    public function add(){
        $risiko = $this->risiko_model;
        $validation = $this->form_validation;
        $validation->set_rules($risiko->rules());

        if($validation->run()){
            $risiko->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/risiko/new_form");
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/risiko');

        $risiko = $this->risiko_model;
        $validation = $this->form_validation;
        $validation->set_rules($risiko->rules());

        if ($validation->run()) {
            $risiko->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["risiko"] = $risiko->getById($id);
        if (!$data["risiko"]) show_404();

        $this->load->view("admin/risiko/edit_form", $data);
    }

    public function delete($id = null){
        
        if (!isset($id)) show_404();

        if ($this->risiko_model->delete($id)){
            redirect(site_url('admin/risiko'));
        }
    }
}

?>