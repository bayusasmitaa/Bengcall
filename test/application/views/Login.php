<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sign In</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url()?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url()?>assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="<?= base_url()?>assets/images/logo3.svg">
              </div>
              <h4>Hello! Let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="<?= base_url('index.php/Login/Login')?>" method="post">
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input type="submit" name="submit" value="Sign In" class="btn btn-block btn-gradient-info btn-lg font-weight-medium auth-form-btn">
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="#register"  data-toggle="modal"  class="text-info">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="register" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <div class="row">
                <div class="col-md-12">
                  <div class="modal-title">
                    <h4 class="card-title">Register sebagai Bengkel</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-body">
              <form class="form-sample" action="<?=base_url('index.php/Login/register')?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control" name="kode_bengkel" placeholder="Masukkan Kode Bengkel">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="nama_user" placeholder="Masukkan Nama Bengkel">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
                </div>
                <div class="form-group">
                  <center>
                    <input type="submit" name="daftar"value="Register" class="btn btn-info">
                    <input type="submit" class="btn btn-danger" value="Cancel" data-dismiss ="modal">
                  </center>
                </div>
            </div>
          </div>
        </div>
        </form>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url()?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url()?>assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= base_url()?>assets/js/off-canvas.js"></script>
  <script src="<?= base_url()?>assets/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
