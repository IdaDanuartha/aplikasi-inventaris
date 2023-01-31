<?php

class Dashboard extends Controller {
    public function index() {
        $data['title'] = 'Dashboard Page';
        $data['petugas'] = $this->model("Petugas")->getAllPetugas();

        dd($data['petugas']);
        $this->view('layouts/dashboard/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('layouts/dashboard/footer', $data);
    }
}