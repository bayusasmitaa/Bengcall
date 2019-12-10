<!doctype html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Bengcall || Official Website</title>
    <link rel="apple-touch-icon" href="<?= base_url()?>/assets/user/images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="<?= base_url()?>/assets/user/images/sketch.png" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/user/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user/css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/user/css/normalize.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user/style.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/user/css/responsive.css">
    <script src="<?= base_url()?>/assets/user/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="<?= base_url()?>/assets/search/jquery.min.js"></script>

    </script>
  </head>

  <body data-spy="scroll" data-target="#primary-menu">


    <!--Preloader-->
    <div class="preloader">
      <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
      </div>
    </div>
    <!--/Preloader-->
    <!--Navigation-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
      <div class="container">

        <!--Logo-->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand logo"><h2>bengcall<h2></a>
        </div>
        <!--Menu-->
        <nav class="collapse navbar-collapse" id="primary-menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#home-page">Home</a></li>
            <li><a href="#feature-page">Features</a></li>
            <li><a href="#blog-page">Partner</a></li>
            <li><a href="#team-page">Team</a></li>
            <li><a href="#contact-page">Contact</a></li>
            <li><a href="<?=base_url('index.php/login_pelanggan/logout')?>">Log Out</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <!--/Navigation-->

    <!--Header-->




    <header class="header-area overlay full-height relative v-center" id="home-page">
      <div class="absolute anlge-bg"></div>
      <div class="container">
        <?php if($this->session->flashdata('pesan')): ?>
          <div class="row">
            <div class="col-xs-12 col-md-12   alert alert-info">
              <span class="d-flex align-items-center purchase-popup">
                <center><?= $this->session->flashdata('pesan') ?></center>
              </span>
            </div>
          </div>
            <?php endif?>
        <div class="row v-center">
          <div class="col-xs-12 col-md-8 header-text">
            <h2>Jangan biarkan perjalananmu terganggu</h2>
            <p>
              Saat dalam perjalanan kendaraanmu sering mogok,
              kehabisan bensin, atau ban bocor ? <br>
              Sehingga kamu bingung harus mencari bengkel
              di daerah yang asing bagimu ? <br>
              Kami akan membantu kalian.
            </p>
            <a href="#service-page" class="button white">Learn More</a>
          </div>
        </div>
      </div>
    </header>
    <!--/Header-->

    <!--Features-->
    <section class="gray-bg section-padding" id="feature-page">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
            <div class="page-title">
              <h2>SPECIAL FEATURES</h2>
              <p>Nikmati pelayanan spesial dari patner bengkel kami</p>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="box">
                <div class="box-icon">
                  <img src="<?= base_url()?>/assets/user/images/portfolio-icon-1.png" alt="">
                </div>
                <h3>bener-in</h3>
                <p>Kendaraan tiba-tiba mogok ? <br>
                  Montir kami siap datang ke lokasi kalian
                </p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="box">
                <div class="box-icon">
                  <img src="<?= base_url()?>/assets/user/images/portfolio-icon-2.png" alt="">
                </div>
                <h3>isi-in</h3>
                <p>Kehabisan bensin di tengah perjalanan ? <br>
                  Kami akan membawanya ke lokasi kalian
                </p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="box">
                <div class="box-icon">
                  <img src="<?= base_url()?>/assets/user/images/portfolio-icon-3.png" alt="">
                </div>
                <h3>tambal-in</h3>
                <p>Ban kendaraan kalian bocor? <br>
                  Tim kami akan menuju ke lokasi kalian
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/Features-->

    <section class="section-padding gray-bg" id="blog-page">
        <div class="container">


          <div class="row">
              <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                  <div class="page-title">
                      <h2>SPECIAL PARTNER</h2>
                      <p>Temukan Bengkel disekitarmu</p>
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-4 col-sm-offset-4">
                <form action="process.php" id="contact-form keyword" method="post" class="contact-form">
                  <input type="text" id="form-subject" name="form-subject" class="form-control" placeholder="Dimana Kamu ?">
                </form>
            </div>
            <div class="col-xs-12 col-md-2 col-sm-offset-5">
                <form action="process.php" id="contact-form" method="post" class="contact-form">
                  <input type="submit" name="" value="Cari" class="form-control button">
                </form>
            </div>
          </div>


            <div class="row">
              <?php
              $no = 0;
              foreach($user as $sr):
              $no++;
              ?>

                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-content">
                            <h3>
                              <?=$sr->nama_user?>
                            </h3>
                            <ul class="blog-meta">
                                <li><span class="ti-world"></span> <a href="#"><?=$sr->alamat?></a></li>
                            </ul>
                            <center><button type="button" href="#pilih" name="button" class="button" data-toggle="modal">Pilih</button></center>
                        </div>
                    </div>
                    <br>
                </div>
                <?php endforeach?>
            </div>
        </div>
    </section>


    <section class="section-padding gray-bg" id="team-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Special team</h2>
                        <p>Tak kenal maka tak sayang, udah sayang malah ditinggal :( <br>
                          Kenali kami lebih dalam
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="<?= base_url()?>/assets/user/images/team-section-1.png" alt="">
                        </div>
                        <h4>FAHMI SIDIQ</h4>
                        <h6>Hustler</h6>
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="<?= base_url()?>/assets/user/images/team-section-2.png" alt="">
                        </div>
                        <h4>MAHARANI</h4>
                        <h6>Hacker</h6>
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="<?= base_url()?>/assets/user/images/team-section-3.png" alt="">
                        </div>
                        <h4>Izqi Mukti</h4>
                        <h6>Hacker</h6>
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="<?= base_url()?>/assets/user/images/team-section-4.png" alt="">
                        </div>
                        <h4>BAYU SASMITA</h4>
                        <h6>Hipster</h6>
                        <ul class="social-menu">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer-area relative sky-bg" id="contact-page">
        <div class="absolute footer-bg"></div>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <div class="page-title">
                            <h2>Contact with us</h2>
                            <p>Selalu hubungi kami</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <address class="side-icon-boxes">
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="<?= base_url()?>/assets/user/images/location-arrow.png" alt="">
                                </div>
                                <p><strong>Address: </strong> Box 564, Disneyland <br />USA</p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="<?= base_url()?>/assets/user/images/phone-arrow.png" alt="">
                                </div>
                                <p><strong>Telephone: </strong>
                                    <a href="callto:8801812726495">+8801812726495</a> <br />
                                    <a href="callto:8801687420471">+8801687420471</a>
                                </p>
                            </div>
                            <div class="side-icon-box">
                                <div class="side-icon">
                                    <img src="<?= base_url()?>/assets/user/images/mail-arrow.png" alt="">
                                </div>
                                <p><strong>E-mail: </strong>
                                    <a href="mailto:youremail@example.com">youremail@example.com</a> <br />
                                    <a href="mailto:youremail@example.com">example@mail.com</a>
                                </p>
                            </div>
                        </address>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <form action="process.php" id="contact-form" method="post" class="contact-form">
                            <div class="form-double">
                                <input type="text" id="form-name" name="form-name" placeholder="Your name" class="form-control" required="required">
                                <input type="email" id="form-email" name="form-email" class="form-control" placeholder="E-mail address" required="required">
                            </div>
                            <input type="text" id="form-subject" name="form-subject" class="form-control" placeholder="Message topic">
                            <textarea name="message" id="form-message" name="form-message" rows="5" class="form-control" placeholder="Your message" required="required"></textarea>
                            <button type="sibmit" class="button">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 pull-right">
                        <ul class="social-menu text-right x-left">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-google"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            <li><a href="#"><i class="ti-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <p>&copy;Copyright 2019 All right resurved.  This template is made with by <a href="https://colorlib.coma">Bengcall</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="#" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="row">
              <div class="col-md-12">
                <div class="modal-title">
                  <h4 class="card-title">

                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>

    <div class="modal fade" id="pilih" >
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<div class="row">
    					<div class="col-md-12">
    						<div class="modal-title">
    							<h4 class="card-title">Hubungi Bengkel</h4>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="modal-body">
    				<form class="form-sample" action="<?=base_url('index.php/pemesanan/tambah')?>" method="post" enctype="multipart/form-data">
    					<div class="form-group">
    						<input type="text" class="form-control" name="lokasi" placeholder="Masukan lokasi kalian">
                <input type="text" class="form-control" name="masalah" placeholder="Masukan masalah kendaraan">
    					</div>
    					<div class="form-group">
    						<center>
    							<input type="submit" name="tambah" value="Hubungi" class="btn btn-info">
    							<input type="submit" class="btn btn-danger" value="Cancel" data-dismiss ="modal">
    						</center>
    					</div>
    			</div>
    		</div>
    	</div>
    	</form>
    </div>





    <!--Vendor-JS-->
    <script src="<?= base_url()?>/assets/user/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url()?>/assets/user/js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="<?= base_url()?>/assets/user/js/owl.carousel.min.js"></script>
    <script src="<?= base_url()?>/assets/user/js/contact-form.js"></script>
    <script src="<?= base_url()?>/assets/user/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?= base_url()?>/assets/user/js/scrollUp.min.js"></script>
    <script src="<?= base_url()?>/assets/user/js/magnific-popup.min.js"></script>
    <script src="<?= base_url()?>/assets/user/js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="<?= base_url()?>/assets/user/js/main.js"></script>
    <script type="text/javascript">
    $(function () {
function reposition() {
var modal = $(this),
dialog = modal.find('.modal-dialog');
modal.css('display', 'block');

// Dividing by two centers the modal exactly, but dividing by three
// or four works better for larger screens.
dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
}
// Reposition when a modal is shown
$('.modal').on('show.bs.modal', reposition);
// Reposition when the window is resized
$(window).on('resize', function () {
$('.modal:visible').each(reposition);
});
});
    </script>
</body>

</html>
