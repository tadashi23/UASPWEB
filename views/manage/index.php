
<body data-spy="scroll" data-offset="80">

<!-- Preloader -->
<div class="animationload">
  <div class="loader">
      Please Wait....
  </div>
</div> 
<!-- End Preloader -->


<nav class="navbar navbar-default navbar-fixed-top navbar-custom">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost/ilkomstudy/public/home">Ilkomstudy</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost/ilkomstudy/public/home">Home</a></li>
        <li><a href="#services">Fitur</a></li>
        <li><a href="#">Katalog</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
<!-- END NAV -->

<!-- Tampil data -->
<br><br><br><br>
<div class="container">
  <h1 class="text-center">Katalog Buku</h1>
  <br><p class="text-right"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#buatData">Tambah Data</button></p>
  <form class="form-inline my-2 my-lg-0" action="https://localhost/ilkomstudy/public/cariadmin" method="POST">
      <input class="form-control mr-sm-2 " placeholder="Cari Judul" type="text" name="judul">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID Buku</th>
          <th scope="col">Judul Buku</th>
          <th scope="col">Kategori</th>
          <th scope="col">Penulis</th>
          <th scope="col">Tahun</th>
          <th scope="col">Summary</th>
          <th scope="col">Link</th>
          <th scope="col">Edit</th>
          <th scope="col">Hapus</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($data['kat'] as $kat) :?>
        <tr>
          <td><?= $kat['bukuID'];?></td>
          <td><?= $kat['judul'];?></td>
          <td><?= $kat['kategori'];?></td>
          <td><?= $kat['penulis'];?></td>
          <td><?= $kat['tahun'];?></td>
          <td><?= $kat['summary'];?></td>
          <td><a class="btn btn-primary" href="<?= $kat['link'];?>" role="button">Link</a></td>
          <td><button type="button" class="btn btn-info tampilModalUbah" data-toggle="modal" data-target="#ubahData" data-id="<?=$kat['bukuID'];?>">Edit</button></td>
          <td><a href='<?= BASEURL;?>manage/hapus/<?=$kat['bukuID']?>' class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">Hapus</button></td>
        </tr>
      </tbody>
      <?php endforeach;?>
    </table>
</div>
</body>


<!-- ubah modal -->
<!-- Modal -->
<div class="modal fade" id="ubahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="FormUbahTitle">Ubah Data Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="panel panel-default">
              <div class="panel-body">
              <form action="<?= BASEURL;?>manage/ubah" method="POST" >
              <input type="hidden" name="id" id="id">
              <div class="form-group">
                  <label for="ubahJudul">Judul</label>
                  <input type="text" name="ubahJudul" id="ubahJudul" class="form-control" required/>
              </div>
              <div class="form-group">
                  <label for="ubahPenulis">Penulis</label>
                  <input type="text" name="ubahPenulis" id="ubahPenulis" class="form-control" required/>
              </div>
              <div class="form-group">
                  <label for="ubahKategori">Kategori</label>
                  <input type="text" name="ubahKategori" id="ubahKategori" class="form-control" required/>
              </div>
              <div class="form-group">
                  <label for="ubahTahun">Tahun</label>
                  <input type="number" name="ubahTahun" id="ubahTahun" class="form-control" required/>
              </div>
              <div class="form-group">
                  <label for="ubahLink">Link</label>
                  <input type="text" name="ubahLink" id="ubahLink" class="form-control" required/>
              </div>
              <div class="form-group">
                <label for="ubahSummary" class="col-form-label" required>Summary</label>
                <textarea class="form-control" name="ubahSummary" id="ubahSummary"></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              </form>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!--/ ubah modal -->

<!-- buat data modal -->
<!-- Modal -->
<div class="modal fade" id="buatData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="FormbuatTitle">Tambah Data Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="panel panel-default">
              <div class="panel-body">
              <form action="<?= BASEURL;?>manage/tambah" method="POST" >
              <div class="form-group">
                  <label for="buatJudul">Judul</label>
                  <input type="text" name="buatJudul" id="buatJudul" class="form-control" required/>
              </div>
              <div class="form-group">
                  <label for="buatPenulis">Penulis</label>
                  <input type="text" name="buatPenulis" id="buatPenulis" class="form-control" required/>
              </div>
              <div class="form-group">
                  <label for="buatKategori">Kategori</label>
                  <input type="text" name="buatKategori" id="buatKategori" class="form-control" required/>
              </div>
              <div class="form-group">
                  <label for="buatTahun">Tahun</label>
                  <input type="number" name="buatTahun" id="buatTahun" class="form-control" required/>
              </div>
              <div class="form-group">
                  <label for="buatLink">Link</label>
                  <input type="text" name="buatLink" id="buatLink" class="form-control" required/>
              </div>
              <div class="form-group">
                <label for="buatSummary" class="col-form-label" required>Summary</label>
                <textarea class="form-control" name="buatSummary" id="buatSummary"></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              </form>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!--/ buat data modal -->