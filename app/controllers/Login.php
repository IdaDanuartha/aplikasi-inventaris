<?php

class Login extends Controller
{
    public function index()
    {
        $data['title'] = 'Login Page';

        $this->view('layouts/auth/header', $data);
        $this->view('login/index', $data);
        $this->view('layouts/auth/footer', $data);
    }
}
