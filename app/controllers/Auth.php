<?php

class Auth extends Controller
{
    public function __construct()
    {
        if(isset($_SESSION['login'])) {
            redirect("dashboard");
        }
    }

    public function index()
    {
        redirect("auth/login");
    }

    public function login()
    {
        $data['title'] = 'Login Page';

        $this->view('layouts/auth/header', $data);
        $this->view('auth/login', $data);
        $this->view('layouts/auth/footer', $data);
    }

    public function signin()
    {
        if($this->model("User")->findPetugasByUsername($_POST['username']) > 0) {
            if($this->model("User")->login($_POST)) {
                redirect("dashboard");
            } else {
                Flasher::setFlash("Password anda salah", "danger");
                redirect("auth"); 
            }
        } else if($this->model("User")->findPegawaiByName($_POST['username']) > 0) {
            if($this->model("User")->login($_POST)) {
                redirect("dashboard");
            } else {
                Flasher::setFlash("Password anda salah", "danger");
                redirect("auth"); 
            }
        } else {
            Flasher::setFlash("Username tidak ditemukan", "danger");
            redirect("auth");
        }
    }

    public function logout()
    {
        $this->model("User")->logout();
        redirect("auth");
    }
}
