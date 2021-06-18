<?php

class Katalog_model {
    private $table = 'book';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKatalog(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getDatabyID($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE bukuID = :id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function getCariKatalog($id){
        $this->db->query("SELECT * FROM " . $this->table . " WHERE judul LIKE :id ");
        $this->db->bind('id',$id.='%');
        return $this->db->resultSet();
    }

    public function tambahDataKatalog($data)
    {
    $query = "INSERT INTO book VALUES (:id, :judul, :penulis, :kategori, :tahun, :summary, :link)";
    $this->db->query($query);
    $this->db->bind('id',null);
    $this->db->bind('judul',$data['buatJudul']);
    $this->db->bind('penulis',$data['buatPenulis']);
    $this->db->bind('kategori',$data['buatKategori']);
    $this->db->bind('tahun',$data['buatTahun']);
    $this->db->bind('summary',$data['buatSummary']);
    $this->db->bind('link',$data['buatLink']);

    $this->db->execute();

    return $this->db->rowCount();

}

public function ubahDataKatalog($data)
{
    $query = "UPDATE book SET judul= :judul , penulis= :penulis,kategori= :kategori,tahun= :tahun,summary= :summary,link= :link WHERE judul = :id";
    $this->db->query($query);
    $this->db->bind('id',$data['id']);
    $this->db->bind('judul',$data['ubahJudul']);
    $this->db->bind('penulis',$data['ubahPenulis']);
    $this->db->bind('kategori',$data['ubahKategori']);
    $this->db->bind('tahun',$data['ubahTahun']);
    $this->db->bind('summary',$data['ubahSummary']);
    $this->db->bind('link',$data['ubahLink']);


    $this->db->execute();

    return $this->db->rowCount();

}

public function hapusDataKatalog($id){
    $this->db->query('DELETE FROM book WHERE bukuID = :id');
    $this->db->bind('id',$id);
    
    $this->db->execute();

    return $this->db->rowCount();
}

}