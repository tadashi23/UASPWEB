<?php

class Manage extends Controller {
    public function index()
    {
        $data['kat'] = $this->model('Katalog_model')->getAllKatalog();
        $this->view('templates/header');
        $this->view('manage/index',$data);
        $this->view('templates/footer');
    }


    public function hapus($id)
    {
    if($this->model('Katalog_model')->hapusDataKatalog($id)>0){
        header('Location: ' . BASEURL . '/manage');
        exit;
    }
    }
    public function getdatabuku(){
        echo json_encode ($this->model('Katalog_model')->getDatabyID($_POST['id']));
    }


    public function ubah(){
    if($this->model('Katalog_model')->ubahDataKatalog($_POST)>0){
        header('Location: '.BASEURL.'/manage');
        exit();
    }
    }

    public function tambah(){
    if($this->model('Katalog_model')->tambahDataKatalog($_POST)>0){
        header('Location: '.BASEURL.'/manage');
        exit();
    }
    }
}
