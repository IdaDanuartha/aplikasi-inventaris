<?php

class Register extends Controller
{
    public function index()
    {
        $data['title'] = 'Register Page';

        $this->view('layouts/auth/header', $data);
        $this->view('register/index', $data);
        $this->view('layouts/auth/footer', $data);
    }
}
