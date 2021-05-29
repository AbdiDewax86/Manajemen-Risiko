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
		$this->load->view('admin/overview');
	}

    // Klasifikasi
    public function informasi(){
        $data["risiko"] = $this->risiko_model->getInformasi();
        $this->load->view('admin/klasifikasi_informasi', $data);
    }
    public function orang(){
        $data["risiko"] = $this->risiko_model->getOrang();
        $this->load->view('admin/klasifikasi_orang', $data);
    }
    public function fisik(){
        $data["risiko"] = $this->risiko_model->getFisik();
        $this->load->view('admin/klasifikasi_fisik', $data);
    }
    public function layanan(){
        $data["risiko"] = $this->risiko_model->getLayanan();
        $this->load->view('admin/klasifikasi_layanan', $data);
    }
    public function intangible(){
        $data["risiko"] = $this->risiko_model->getIntangible();
        $this->load->view('admin/klasifikasi_intangible', $data);
    }
    public function software(){
        $data["risiko"] = $this->risiko_model->getSoftware();
        $this->load->view('admin/klasifikasi_software', $data);
    }
}
