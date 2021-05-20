<?php

class Klasifikasi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('admin/klasifikasi_informasi');
	}
    public function informasi(){
        $this->load->view('admin/klasifikasi_informasi');
    }
    public function orang(){
        $this->load->view('admin/klasifikasi_orang');
    }
    public function fisik(){
        $this->load->view('admin/klasifikasi_fisik');
    }
    public function layanan(){
        $this->load->view('admin/klasifikasi_layanan');
    }
    public function intangible(){
        $this->load->view('admin/klasifikasi_intangible');
    }
    public function software(){
        $this->load->view('admin/klasifikasi_software');
    }
}
