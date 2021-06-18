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
<div class="container">
<br><br><br><br>
<h1 class="text-center">Tambah Data</h1><br>
            <div class="panel panel-default">
                <div class="panel-body">
                <form method="POST" >
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" name="kategori" id="kategori" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" name="penulis" id="penulis" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="number" name="tahun" id="tahun" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="summary">Summary</label>
                        <input type="text" name="summary" id="summary" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" name="link" id="link" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" id="login" class="btn btn-success" value="Tambah" />
                    </div>
                </form>
                
            </div>
</div>
