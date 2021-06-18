<?php

class Cari extends Controller {
    public function index(){
        $data['kat'] = $this->model('Katalog_model')->getCariKatalog($_POST['judul']);
        $this->view('templates/header');
        $this->view('katalog/cari',$data);
        $this->view('templates/footer');
    }
}