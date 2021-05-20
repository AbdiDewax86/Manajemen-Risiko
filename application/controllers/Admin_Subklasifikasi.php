<?php

class Admin_Subklasifikasi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('admin/klasifikasi_informasi');
	}
}
