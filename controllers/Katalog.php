<?php

class Katalog extends Controller {
    public function index()
    {
        $data['kat'] = $this->model('Katalog_model')->getAllKatalog();
        $this->view('templates/header');
        $this->view('katalog/index',$data);
        $this->view('templates/footer');
    }
}