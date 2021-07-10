<?php

defined('BASEPATH') OR exit('No direct scripts allowed');

class UserManagement_model extends CI_Model{
    private $_table = 'users';

    public $user_id;
    public $username;
    public $email;
    public $password;
    public $fullname;
    public $phone;
    public $lastlogin;
    public $creationtime;
    public $role;
    public $akses_informasi;
    public $akses_orang;
    public $akses_fisik;
    public $akses_layanan;
    public $akses_intangible;
    public $akses_software;

    public function rules(){
        return [
            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'
            ],
            ['field' => 'email',
            'label' => 'E-mail',
            'rules' => 'required'
            ],
            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'
            ],
            ['field' => 'fullname',
            'label' => 'Full Name',
            'rules' => 'required'
            ],
            ['field' => 'phone',
            'label' => 'Phone',
            'rules' => 'required'
            ],
            ['field' => 'role',
            'label' => 'Role',
            'rules' => 'required'
            ],
        ];
    }

    public function getAll(){
        $this->db->select("*");
        $this->db->where("role !=", 'admin');
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["user_id" => $id])->row();
    }

    public function save(){
        $post = $this->input->post();
        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->password = password_hash($post["password"], PASSWORD_DEFAULT);
        $this->fullname = $post["fullname"];
        $this->phone = $post["phone"];
        $this->role = $post["role"];
        $this->akses_informasi = $post["akses_informasi"];
        $this->akses_orang = $post["akses_orang"];
        $this->akses_fisik = $post["akses_fisik"];
        $this->akses_layanan = $post["akses_layanan"];
        $this->akses_intangible = $post["akses_intangible"];
        $this->akses_software = $post["akses_software"];
        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->user_id = $post["user_id"];
        $this->username = $post["username"];
        $this->email = $post["email"];
        $this->password = password_hash($post["password"], PASSWORD_DEFAULT);
        $this->fullname = $post["fullname"];
        $this->phone = $post["phone"];
        $this->role = $post["role"];
        $this->akses_informasi = $post["akses_informasi"];
        $this->akses_orang = $post["akses_orang"];
        $this->akses_fisik = $post["akses_fisik"];
        $this->akses_layanan = $post["akses_layanan"];
        $this->akses_intangible = $post["akses_intangible"];
        $this->akses_software = $post["akses_software"];
        return $this->db->update($this->_table, $this, array('user_id' => $post['user_id']));
    }

    public function delete($id){
        return $this->db->delete($this->_table, array("user_id" => $id));
    }
}

?>