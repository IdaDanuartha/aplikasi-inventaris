<?php

class PetugasRequest {
    public function __construct()
    {
        unset($_SESSION['error']);
    }

    public function rules($username, $nama, $password, $action = 'create') 
    {
        if(!$username) {
            $_SESSION['error']['username'] = 'Input username tidak boleh kosong';
            return false;
        }
        if(!$nama) {
            $_SESSION['error']['nama'] = 'Input nama tidak boleh kosong';
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