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
            <div class="panel panel-default">
                <h1 class="text-center">Login</h1>
                <div class="panel-body">
                <form method="POST" >
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" id="login" class="btn btn-success btn-block" value="Login" />
                    </div>
                </form>
                <?php if(count($_POST)>0) {
                    foreach($data['admin'] as $admin):
                        if ($admin['username']==$_POST["username"]){
                            if ($admin['password']==$_POST["password"]){
                                header("Location: https://localhost/ilkomstudy/public/manage");
                                exit();
                            }
                            else{
                                ?><script Type="javascript">alert("Password Anda Salah!")</script><?php
                            }
                        }
                        else{
                            ?><script Type="javascript">alert("Username dan Password anda salah!")</script><?php
                        }
                    endforeach;
                    }?>
            </div>
</div></div>
