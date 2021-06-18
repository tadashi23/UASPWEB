<?php

class Login extends Controller {
    public function index()
    {
        $data['admin'] = $this->model('Login_model')->getadmin();
        $this->view('templates/header');
        $this->view('login/index',$data);
        $this->view('templates/footer');
    }
}