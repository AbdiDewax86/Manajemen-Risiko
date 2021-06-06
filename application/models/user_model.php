<?php

class User_model extends CI_Model{
    private $_table = "users";
    // private $role = "admin";

    public function doLogin(){
        $post = $this->input->post();

        // cari dari uname/email
        $this->db->where('email', $post["email"])
            //->or_where('username', $post["username"])
            ;
        
        $user = $this->db->get($this->_table)->row();

        // jika terdaftar
        if($user){
            // cek password
            $isPasswordTrue = password_verify($post["password"], $user->password);
            
            $isAdmin = $user->role == "admin";
            $isOperator = $user->role == "operator";
            $isDefault = $user->role == "biasa";

            // cek apakah password benar dan role admin
            if($isPasswordTrue){
                // sukses login
                $this->session->set_userdata(['user_logged' => $user]);
                $this->_updateLastLogin($user->user_id);
                return true;
            }
        }

        // login gagal
        return false;
    }

    // public function getRole(){
    //     return $this->role;
    // }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    public function getUserData(){
        return $this->session->user_logged;
    }

    public function _updateLastLogin($user_id){
        $sql = "UPDATE {$this->_table} SET lastlogin=now() WHERE user_id={$user_id}";
        $this->db->query($sql);
    }
}

?>