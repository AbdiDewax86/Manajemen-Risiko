<?php

defined('BASEPATH') OR exit('No direct scripts allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Risiko extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("risiko_model");
        $this->load->library('form_validation');
        
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index(){
        $data["risiko"] = $this->risiko_model->getAll();
        $this->load->view("admin/risiko/risiko");
    }

    public function list(){
        $data["risiko"] = $this->risiko_model->getAll();
        $this->load->view("admin/risiko/list", $data);
    }

    public function listBawaanMax(){

    }

    public function listSisaMax(){
        
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

    public function export($klasifikasi = null){
        if ($klasifikasi == null){
            $risiko_all = $this->risiko_model->getAll();
            $klasifikasi = 'Semua';
        }
        else{
            $risiko_all = $this->risiko_model->getByKlasifikasi($klasifikasi);
        }

        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('Format Excel Empty.xlsx');

        $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue('B5', ucfirst($klasifikasi) );

        $kolom = 10;
        $nomor = 1;
        foreach($risiko_all as $risiko){
            $spreadsheet->setActiveSheetIndex(0)
                        ->setCellValue('A'.$kolom, $nomor)
                        ->setCellValue('B'.$kolom, $risiko->subklasifikasi)
                        ->setCellValue('C'.$kolom, $risiko->tanggal)
                        ->setCellValue('D'.$kolom, $risiko->dampak_keterangan)
                        ->setCellValue('E'.$kolom, $risiko->dampak_nilai)
                        ->setCellValue('F'.$kolom, $risiko->pengancam_keterangan)
                        ->setCellValue('G'.$kolom, $risiko->pengancam_nilai)
                        ->setCellValue('H'.$kolom, $risiko->bawaan_kerentanan_keterangan)
                        ->setCellValue('I'.$kolom, $risiko->bawaan_kerentanan_nilai)
                        ->setCellValue('J'.$kolom, $risiko->bawaan_paparan_keterangan)
                        ->setCellValue('K'.$kolom, $risiko->bawaan_paparan_nilai)
                        ->setCellValue('L'.$kolom, $risiko->bawaan_jenis_risiko)
                        ->setCellValue('M'.$kolom, $risiko->bawaan_nilai_risiko)
                        ->setCellValue('N'.$kolom, $risiko->kontrol_keterangan)
                        ->setCellValue('O'.$kolom, $risiko->sisa_kerentanan_keterangan)
                        ->setCellValue('P'.$kolom, $risiko->sisa_kerentanan_nilai)
                        ->setCellValue('Q'.$kolom, $risiko->sisa_paparan_keterangan)
                        ->setCellValue('R'.$kolom, $risiko->sisa_paparan_nilai)
                        ->setCellValue('S'.$kolom, $risiko->sisa_jenis_risiko)
                        ->setCellValue('T'.$kolom, $risiko->sisa_nilai_risiko)
                        ->setCellValue('U'.$kolom, $risiko->mitigasi_kontrol)
                        ->setCellValue('V'.$kolom, $risiko->mitigasi_pic)
                        ->setCellValue('W'.$kolom, $risiko->mitigasi_target);
            
            $kolom++;
            $nomor++;
        }

        $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
	    header('Content-Disposition: attachment;filename="Hasil Export Manajemen Risiko.xlsx"');
	    header('Cache-Control: max-age=0');
        
	    $writer->save('php://output');
    }
}

?>