<?php require 'vendors/fungsi/fungsi.php'; ?>

<!DOCTYPE html>
<html>
<title>LOGIN | WEB KASIR</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="vendors/img/logo_kasir_kita.png">
<link rel="stylesheet" href="vendors/dist/css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="vendors/dist/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="vendors/dist/css/bootstrap.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/mac.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

a {

}
</style>
<body>

<!-- Navbar (sit on top) -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container">
        <div class="navbar-header page-scroll">
          <a class="navbar-brand">Login Web Kasir</a>
        </div>
      </div>
    </nav>

    <section class="bagian3">
            <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="panel-title text-center">Login Web Kasir</h1>
                <center><br><p>Repost by XII PPLG 1</br></p></center>
              </div>
              <div class="panel-body">
                <form class="form" action="" method="post">
                  <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input class="form-control" type="text" name="user"  required="" autofocus="" value="admin" placeholder="Masukkan username Anda">
                  </div>

                  <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    <input class="form-control" type="password" name="pass" required="" value="admin" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <a href="index.php">
                      <button type="button" name="button" class="btn btn-danger">Batal</button>
                    </a>

                    <input class="btn btn-success" type="submit" name="daftar" value="Masuk">
                  </div>
                  <?php
                  if (@$_POST['daftar']) {
                    $proses->login();
                  }
                   ?>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- Promo Section - "We know design" -->




<!-- MODAL -->
    <!-- FACEBOOK -->
    <div class="modal fade" id="exampleModalCenterFB" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <strong>FACEBOOK</strong><br>
       <p><a href="https://www.facebook.com/zibran.vitadiyatama.7/" target="_blank">https://www.facebook.com/zibran.vitadiyatama.7/</a></p>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

      </div>

    </div>
  </div>
</div>
</div>

<!-- END MODAL -->

 <!-- jQuery -->
    <script src="<?= url() ?>vendors/jquery/jquery.min.js"></script>

    <!--include-->
    <script src="<?= url() ?>vendors/js/bootstrap.min.js"></script>



</body>
</html>
