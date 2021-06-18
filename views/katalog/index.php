
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
    <form class="form-inline my-2 my-lg-0" action="https://localhost/ilkomstudy/public/cari" method="POST">
      <input class="form-control mr-sm-2 " placeholder="Cari Judul" type="text" name="judul">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">NO</th>
            <th scope="col">ID Buku</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Kategori</th>
            <th scope="col">Penulis</th>
            <th scope="col">Tahun</th>
            <th scope="col">Summary</th>
            <th scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
        <?php $i=1;?>
        <?php foreach($data['kat'] as $kat) :?>
          <tr>
            <th scope="row"><?php echo $i?></th>
            <td><?= $kat['bukuID'];?></td>
            <td><?= $kat['judul'];?></td>
            <td><?= $kat['kategori'];?></td>
            <td><?= $kat['penulis'];?></td>
            <td><?= $kat['tahun'];?></td>
            <td><?= $kat['summary'];?></td>
            <td><a class="btn btn-primary" href="<?= $kat['link'];?>" role="button">Link</a></td>
            <?php $i++?>
          </tr>
        </tbody>
        <?php endforeach;?>
      </table>
</div>
</body>