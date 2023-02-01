<?php

class Auth extends Controller
{
    public function index()
    {
        redirect("auth/login");
    }

    public function login()
    {
        if(!isset($_SESSION['login'])) {
            $data['title'] = 'Halaman Login';
    
            $this->view('layouts/auth/header', $data);
            $this->view('auth/login', $data);
            $this->view('layouts/auth/footer', $data);
        } else {
            redirect("dashboard");
        }
    }

    public function signin()
    {
        if($_POST) {
            if($this->model("UserModel")->findPetugasByUsername($_POST['username']) > 0) {
                if($this->model("UserModel")->login($_POST)) {
                    redirect("dashboard");
                } else {
                    Flasher::setFlash("Password anda salah", "danger");
                    redirect("auth"); 
                }
            } else if($this->model("UserModel")->findPegawaiByName($_POST['username']) > 0) {
                if($this->model("UserModel")->login($_POST)) {
                    redirect("dashboard");
                } else {
                    Flasher::setFlash("Password anda salah", "danger");
                    redirect("auth"); 
                }
            } else {
                Flasher::setFlash("Username tidak ditemukan", "danger");
                redirect("auth");
            }
        } else {
            redirect("auth");
        }
    }

    public function logout()
    {        
        if($this->model("UserModel")->logout()) {
            redirect("auth");
        }
    }
}
