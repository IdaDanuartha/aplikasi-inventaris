<?php

class Dashboard extends Controller {
    public function __construct()
    {
        // dd(isset($_SESSION['login']));

        if(!isset($_SESSION['login'])) {
            redirect("auth");
        }
    }
    
    public function index() {
        $data['title'] = 'Dashboard Page';

        $this->view('layouts/dashboard/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('layouts/dashboard/footer', $data);
    }
}