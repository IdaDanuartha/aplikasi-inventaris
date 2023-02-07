<?php

class PegawaiRequest {
    public function __construct()
    {
        unset($_SESSION['error']);
    }

    public function rules($nama, $nip, $alamat, $password, $action = 'create') 
    {
        if(!$nama) {
            $_SESSION['error']['nama'] = 'Input nama tidak boleh kosong';
            return false;
        }
        if(!$nip) {
            $_SESSION['error']['nip'] = 'Input nip tidak boleh kosong';
            return false;
        }
        if(!$alamat) {
            $_SESSION['error']['alamat'] = 'Input alamat tidak boleh kosong';
            return false;
        }
        
        if($action == 'create') {
            if(!$password) {
                $_SESSION['error']['password'] = 'Input password tidak boleh kosong';
                return false;
            }
        }

        if($password !== "" && strlen($password) < 6) {
            $_SESSION['error']['password'] = 'Panjang password harus lebih dari 6 karakter';
            return false;
        }

        return true;
    }
}