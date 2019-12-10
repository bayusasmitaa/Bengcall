<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bengcall || Official Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="<?= base_url() ?>/assets/index.html"><img src="<?= base_url() ?>/assets/images/logo3.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?= base_url() ?>/assets/index.html"><img src="<?= base_url() ?>/assets/images/logo-mini2.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <div class="search-field d-none d-md-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search">
            </div>
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="<?= base_url() ?>/assets/images/faces/face1.jpg" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
                <span><?=$this->session->userdata('nama_user');?></span>
                <span><?=$this->session->userdata('nama');?></span>
                <p class="mb-1 text-black"></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-cached mr-2 text-success"></i>
                Activity Log
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url() ?>/index.php/login/logout">
                <i class="mdi mdi-logout mr-2 text-primary"></i>
                SignOut
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email-outline"></i>
              <span class="count-symbol bg-warning"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <h6 class="p-3 mb-0">Messages</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?= base_url() ?>/assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                  <p class="text-gray mb-0">
                    1 Minutes ago
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?= base_url() ?>/assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                  <p class="text-gray mb-0">
                    15 Minutes ago
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?= base_url() ?>/assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                  <p class="text-gray mb-0">
                    18 Minutes ago
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">4 new messages</h6>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count-symbol bg-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <h6 class="p-3 mb-0">Notifications</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-calendar"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                  <p class="text-gray ellipsis mb-0">
                    Just a reminder that you have an event today
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                  <p class="text-gray ellipsis mb-0">
                    Update dashboard
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-link-variant"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                  <p class="text-gray ellipsis mb-0">
                    New admin wow!
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">See all notifications</h6>
            </div>
          </li>
          <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-power"></i>
            </a>
          </li>
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-format-line-spacing"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="<?= base_url() ?>/assets/images/faces/face1.jpg" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2"><?=$this->session->userdata('nama_user');?></span>
                <span class="font-weight-bold mb-2"><?=$this->session->userdata('nama');?></span>
                <span class="text-secondary text-small"><?=$this->session->userdata('level');?></span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <?php if($this->session->userdata('level')=="admin"){?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>index.php/Dashboard">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <?php }?>
          <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>index.php/Kontak">
              <span class="menu-title">Contact</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
          </li> -->
          <!-- <?php if($this->session->userdata('level')=="bengkel"){?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>index.php/sparepart">
              <span class="menu-title">List Penyediaan</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <?php }?> -->

          <!-- <?php if($this->session->userdata('level')=="admin"){?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>index.php/Kategori">
              <span class="menu-title">Kategori</span>
              <i class="mdi mdi-table-large menu-icon"></i>
            </a>
          </li>
          <?php
          }
           ?> -->
          <?php if($this->session->userdata('level')=="bengkel"){?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>index.php/Transaksi">
              <span class="menu-title">Transaksi</span>
              <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
          </li>
          <?php }?>
          <?php if($this->session->userdata('level')=="admin"){?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url()?>index.php/pelanggan">
                <span class="menu-title">Data Pelanggan</span>
                <i class="mdi mdi-account-multiple menu-icon"></i>
              </a>
            </li>
          <?php }?>
          <?php if($this->session->userdata('level')=="admin"){?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url()?>index.php/user">
                <span class="menu-title">Data Bengkel</span>
                <i class="mdi mdi-account-key menu-icon"></i>
              </a>
            </li>
          <?php }?>
          <?php if($this->session->userdata('nama')){?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url()?>index.php/user/daftar_bengkel">
                <span class="menu-title">Daftar Bengkel</span>
                <i class="mdi mdi-bookmark menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url()?>index.php/pemesanan">
                <span class="menu-title">Pemesanan</span>
                <i class="mdi mdi-bookmark menu-icon"></i>
              </a>
            </li>
          <?php }?>


        </ul>
      </nav>



      <?php 	$this->load->view($konten);		?>


        <!-- partial:partials/_footer.html -->

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?= base_url() ?>/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url() ?>/assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?= base_url() ?>/assets/js/off-canvas.js"></script>
  <script src="<?= base_url() ?>/assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url() ?>/assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
