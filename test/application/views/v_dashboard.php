<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">

      </div>
    </div>
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white mr-2">
          <i class="mdi mdi-home"></i>
        </span>
        Dashboard
      </h3>
      <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview
            <i class="mdi mdi-alert-circle-outline icon-sm text-info align-middle"></i>
          </li>
        </ul>
      </nav>
    </div>
    <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
          <div class="card-body">
            <img src="<?= base_url()?>assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
            <h4 class="font-weight-normal mb-3">Transaksi
              <i class="mdi mdi-chart-line mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5"><?=count($transaksi);?></h2>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
          <div class="card-body">
            <img src="<?= base_url()?>assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
            <h4 class="font-weight-normal mb-3">Pelanggan
              <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5"><?=count($pelanggan);?></h2>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
          <div class="card-body">
            <img src="<?= base_url()?>assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
            <h4 class="font-weight-normal mb-3">Bengkel
              <i class="mdi mdi-diamond mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5"><?=count($user);?></h2>
          </div>
        </div>
      </div>
    </div>

    </div>
  </div>
  <!-- content-wrapper ends -->
