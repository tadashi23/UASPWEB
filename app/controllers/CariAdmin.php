<?php

class Cariadmin extends Controller {
    public function index(){
        $data['kat'] = $this->model('Katalog_model')->getCariKatalog($_POST['judul']);
        $this->view('templates/header');
        $this->view('manage/index',$data);
        $this->view('templates/footer');
    }
}