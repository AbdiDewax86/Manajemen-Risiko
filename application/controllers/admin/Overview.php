<?php

class Overview extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("risiko_model");
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    // Dashboard
	public function index()
	{
        $data["risiko"] = $this->risiko_model->getAll();
        // $data["role"] = $this->user_model->getRole();
		$this->load->view('admin/overview', $data);
	}

    // Klasifikasi
    public function informasi(){
        if($this->session->user_logged->role == 'admin' || $this->session->user_logged->akses_informasi){
            $data["risiko"] = $this->risiko_model->getInformasi();
            $this->load->view('admin/klasifikasi_informasi', $data);
        } 
        else{
            show_404();
        }
    }
    public function orang(){
        if($this->session->user_logged->role == 'admin' || $this->session->user_logged->akses_orang){
            $data["risiko"] = $this->risiko_model->getOrang();
            $this->load->view('admin/klasifikasi_orang', $data);
        } 
        else{
            show_404();
        }
    }
    public function fisik(){
        if($this->session->user_logged->role == 'admin' || $this->session->user_logged->akses_fisik){
            $data["risiko"] = $this->risiko_model->getFisik();
            $this->load->view('admin/klasifikasi_fisik', $data);
        } 
        else{
            show_404();
        }
    }
    public function layanan(){
        if($this->session->user_logged->role == 'admin' || $this->session->user_logged->akses_layanan){
            $data["risiko"] = $this->risiko_model->getLayanan();
            $this->load->view('admin/klasifikasi_layanan', $data);
        } 
        else{
            show_404();
        }
    }
    public function intangible(){
        if($this->session->user_logged->role == 'admin' || $this->session->user_logged->akses_intangible){
            $data["risiko"] = $this->risiko_model->getIntangible();
            $this->load->view('admin/klasifikasi_intangible', $data);
        } 
        else{
            show_404();
        }
    }
    public function software(){
        if($this->session->user_logged->role == 'admin' || $this->session->user_logged->akses_software){
            $data["risiko"] = $this->risiko_model->getSoftware();
            $this->load->view('admin/klasifikasi_software', $data);
        } 
        else{
            show_404();
        }
    }
}
