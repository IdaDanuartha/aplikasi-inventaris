<?php

class Dashboard extends Controller {
    public function index() {
        $data['title'] = 'Dashboard Page';

        $this->view('layouts/dashboard/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('layouts/auth/footer', $data);
    }
}