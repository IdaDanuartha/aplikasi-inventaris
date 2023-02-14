<?php

class UserModel {
    protected $table = 'petugas',
              $table_pegawai = 'pegawai',
              $db;

    public function __construct()
    {
        $this->db = new Model();
    }
    
    public function findPetugasByUsername($username)
    {
        $this->db->query("call findPetugas(:username)");
        $this->db->bind("username", $username);

        $row = $this->db->single();

        if($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function findPegawaiByName($nip)
    {
        $this->db->query("call findPegawai(:nip)");
        $this->db->bind("nip", $nip);

        $row = $this->db->single();

        if($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function login($data)
    {
        $petugas = $this->findPetugasByUsername($data['username']);
        $pegawai = $this->findPegawaiByName($data['username']);

        if(password_verify($data['password'], $petugas['password'])) {
            $_SESSION['petugas'] = $petugas;
            $_SESSION['login'] = true;
            return $petugas;
        } else if(password_verify($data['password'], $pegawai['password'])) {
            $_SESSION['pegawai'] = $pegawai;
            $_SESSION['login'] = true;
            return $pegawai;
        } else {
            return false;
        }
    }

    public function logout()
    {
        session_destroy();

        if(isset($_SESSION['petugas'])) unset($_SESSION['petugas']);
        if(isset($_SESSION['pegawai'])) unset($_SESSION['pegawai']);        
        unset($_SESSION['login']);

        return true;
    }

}