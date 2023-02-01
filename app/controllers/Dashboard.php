<?php

class Dashboard extends Controller {
    public function index() {
        if(isset($_SESSION['login'])) {
            $data['title'] = 'Halaman Dashboard';

            $this->view('layouts/dashboard/header', $data);
            $this->view('dashboard/index', $data);
            $this->view('layouts/dashboard/footer', $data);
        } else {
            redirect("auth");
        }        
    }
}