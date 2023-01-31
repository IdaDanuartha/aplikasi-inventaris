<?php

class Auth extends Controller
{
    public function login()
    {
        $data['title'] = 'Login Page';

        $this->view('layouts/auth/header', $data);
        $this->view('login/index', $data);
        $this->view('layouts/auth/footer', $data);
    }

    public function register()
    {
        $data['title'] = 'Register Page';

        $this->view('layouts/auth/header', $data);
        $this->view('register/index', $data);
        $this->view('layouts/auth/footer', $data);
    }
}
