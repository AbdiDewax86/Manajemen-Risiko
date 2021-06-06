<?php 

defined('BASEPATH') OR exit('No direct scripts allowed');

class Risiko_model extends CI_Model{
    private $_table = "risiko"; //nama tabel

    public $id;
    public $klasifikasi;
    public $subklasifikasi;
    public $tanggal;
    public $dampak_keterangan;
    public $dampak_nilai;
    public $pengancam_keterangan;
    public $pengancam_nilai;
    public $bawaan_kerentanan_keterangan;
    public $bawaan_kerentanan_nilai;
    public $bawaan_paparan_keterangan;
    public $bawaan_paparan_nilai;
    public $bawaan_jenis_risiko;
    public $bawaan_nilai_risiko;
    public $kontrol_keterangan;
    public $sisa_paparan_keterangan;
    public $sisa_paparan_nilai;
    public $sisa_kerentanan_keterangan;
    public $sisa_kerentanan_nilai;
    public $sisa_jenis_risiko;
    public $sisa_nilai_risiko;
    public $mitigasi_kontrol;
    public $mitigasi_pic;
    public $mitigasi_target;

    public function rules(){
        return [
            ['field' => 'klasifikasi',
            'label' => 'Klasifikasi',
            'rules' => 'required'
            ],

            ['field' => 'subklasifikasi',
            'label' => 'Subklasifikasi',
            'rules' => 'required'
            ],
            
            ['field' => 'dampak_keterangan',
            'label' => 'Keterangan Dampak',
            'rules' => 'required'
            ],
            
            ['field' => 'dampak_nilai',
            'label' => 'Nilai Dampak',
            'rules' => 'required|numeric|greater_than[0]|less_than[6]'
            ],
            
            ['field' => 'pengancam_keterangan',
            'label' => 'Keterangan Pengancam',
            'rules' => 'required'
            ],
            
            ['field' => 'pengancam_nilai',
            'label' => 'Nilai Pengancam',
            'rules' => 'required|numeric|greater_than[0]|less_than[6]'
            ],
            
            ['field' => 'bawaan_kerentanan_keterangan',
            'label' => 'Keterangan Kerentanan Risiko Bawaan',
            'rules' => 'required'
            ],
            
            ['field' => 'bawaan_kerentanan_nilai',
            'label' => 'Nilai Kerentanan Risiko Bawaan',
            'rules' => 'required|numeric|greater_than[0]|less_than[6]'
            ],
            
            ['field' => 'bawaan_paparan_keterangan',
            'label' => 'Keterangan Paparan Risiko Bawaan',
            'rules' => 'required'
            ],
            
            ['field' => 'bawaan_paparan_nilai',
            'label' => 'Nilai Paparan Risiko Bawaan',
            'rules' => 'required|numeric|greater_than[0]|less_than[6]'
            ],
            
            ['field' => 'kontrol_keterangan',
            'label' => 'Keterangan Kontrol',
            'rules' => 'required'
            ],
            
            ['field' => 'sisa_kerentanan_keterangan',
            'label' => 'Keterangan Kerentanan Risiko Sisa',
            'rules' => 'required'
            ],
            
            ['field' => 'sisa_kerentanan_nilai',
            'label' => 'Nilai Kerentanan Risiko Sisa',
            'rules' => 'required|numeric|greater_than[0]|less_than[6]'
            ],
            
            ['field' => 'sisa_paparan_keterangan',
            'label' => 'Keterangan Paparan Risiko Sisa',
            'rules' => 'required'
            ],
            
            ['field' => 'sisa_paparan_nilai',
            'label' => 'Nilai Paparan Risiko Sisa',
            'rules' => 'required|numeric|greater_than[0]|less_than[6]'
            ],
            
            ['field' => 'mitigasi_kontrol',
            'label' => 'Mitigasi Kontrol',
            'rules' => 'required'
            ],
            
            ['field' => 'mitigasi_pic',
            'label' => 'Mitigasi PIC',
            'rules' => 'required'
            ],
            
            ['field' => 'mitigasi_target',
            'label' => 'Mitigasi Target',
            'rules' => 'required'
            ],
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    public function getList($informasi, $orang, $fisik, $layanan, $intangible, $software){
        $this->db->select("*");
        if(!$informasi){
            $this->db->where("klasifikasi !=", "Informasi");
        }
        if(!$orang){
            $this->db->where("klasifikasi !=", "Orang");
        }
        if(!$fisik){
            $this->db->where("klasifikasi !=", "Fisik");
        }
        if(!$layanan){
            $this->db->where("klasifikasi !=", "Layanan");
        }
        if(!$intangible){
            $this->db->where("klasifikasi !=", "Intangible");
        }
        if(!$software){
            $this->db->where("klasifikasi !=", "Software");
        }

        return $this->db->get($this->_table)->result();
    }

    public function getInformasi(){
        return $this->db->get_where($this->_table, ["klasifikasi" => "Informasi"])->result();
    }
    public function getOrang(){
        return $this->db->get_where($this->_table, ["klasifikasi" => "Orang"])->result();
    }
    public function getFisik(){
        return $this->db->get_where($this->_table, ["klasifikasi" => "Fisik"])->result();
    }
    public function getLayanan(){
        return $this->db->get_where($this->_table, ["klasifikasi" => "Layanan"])->result();
    }
    public function getIntangible(){
        return $this->db->get_where($this->_table, ["klasifikasi" => "Intangible"])->result();
    }
    public function getSoftware(){
        return $this->db->get_where($this->_table, ["klasifikasi" => "Software"])->result();
    }

    public function getByKlasifikasi($klasifikasi){
        return $this->db->get_where($this->_table, ["klasifikasi" => $klasifikasi])->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save(){
        $post = $this->input->post();
        $this->id = uniqid();
        $this->klasifikasi = $post["klasifikasi"];
        $this->subklasifikasi = $post["subklasifikasi"];
        // $this->tanggal = $post["tanggal"];
        $this->dampak_keterangan = $post["dampak_keterangan"];
        $this->dampak_nilai = $post["dampak_nilai"];
        $this->pengancam_keterangan = $post["pengancam_keterangan"];
        $this->pengancam_nilai = $post["pengancam_nilai"];
        $this->bawaan_kerentanan_keterangan = $post["bawaan_kerentanan_keterangan"];
        $this->bawaan_kerentanan_nilai = $post["bawaan_kerentanan_nilai"];
        $this->bawaan_paparan_keterangan = $post["bawaan_paparan_keterangan"];
        $this->bawaan_paparan_nilai = $post["bawaan_paparan_nilai"];
        // $this->bawaan_jenis_risiko = $post["bawaan_jenis_risiko"];
        // $this->bawaan_nilai_risiko = $post["bawaan_nilai_risiko"];
        $this->kontrol_keterangan = $post["kontrol_keterangan"];
        $this->sisa_paparan_keterangan = $post["sisa_paparan_keterangan"];
        $this->sisa_paparan_nilai = $post["sisa_paparan_nilai"];
        $this->sisa_kerentanan_keterangan = $post["sisa_kerentanan_keterangan"];
        $this->sisa_kerentanan_nilai = $post["sisa_kerentanan_nilai"];
        // $this->sisa_jenis_risiko = $post["sisa_jenis_risiko"];
        // $this->sisa_nilai_risiko = $post["sisa_nilai_risiko"];
        $this->mitigasi_kontrol = $post["mitigasi_kontrol"];
        $this->mitigasi_pic = $post["mitigasi_pic"];
        $this->mitigasi_target = $post["mitigasi_target"];
        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->klasifikasi = $post["klasifikasi"];
        $this->subklasifikasi = $post["subklasifikasi"];
        // $this->tanggal = $post["tanggal"];
        $this->dampak_keterangan = $post["dampak_keterangan"];
        $this->dampak_nilai = $post["dampak_nilai"];
        $this->pengancam_keterangan = $post["pengancam_keterangan"];
        $this->pengancam_nilai = $post["pengancam_nilai"];
        $this->bawaan_kerentanan_keterangan = $post["bawaan_kerentanan_keterangan"];
        $this->bawaan_kerentanan_nilai = $post["bawaan_kerentanan_nilai"];
        $this->bawaan_paparan_keterangan = $post["bawaan_paparan_keterangan"];
        $this->bawaan_paparan_nilai = $post["bawaan_paparan_nilai"];
        // $this->bawaan_jenis_risiko = $post["bawaan_jenis_risiko"];
        // $this->bawaan_nilai_risiko = $post["bawaan_nilai_risiko"];
        $this->kontrol_keterangan = $post["kontrol_keterangan"];
        $this->sisa_kerentanan_keterangan = $post["sisa_kerentanan_keterangan"];
        $this->sisa_kerentanan_nilai = $post["sisa_kerentanan_nilai"];
        $this->sisa_paparan_keterangan = $post["sisa_paparan_keterangan"];
        $this->sisa_paparan_nilai = $post["sisa_paparan_nilai"];
        // $this->sisa_jenis_risiko = $post["sisa_jenis_risiko"];
        // $this->sisa_nilai_risiko = $post["sisa_nilai_risiko"];
        $this->mitigasi_kontrol = $post["mitigasi_kontrol"];
        $this->mitigasi_pic = $post["mitigasi_pic"];
        $this->mitigasi_target = $post["mitigasi_target"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id){
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
?>