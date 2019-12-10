<!-- <?php if($this->session->userdata('level')=="admin"){?>
<br><a href="#tambah" class="btn btn-primary" data-toggle="modal" style="float: right;"><span class="fa fa-plus"></span> User</a><br><br>
<?php }?> -->

<div class="main-panel">
  <div class="content-wrapper">
    <?php if($this->session->flashdata('pesan')): ?>
      <div class="row">
        <div class="col-12">
          <span class="d-flex align-items-center purchase-popup">
            <?= $this->session->flashdata('pesan') ?>
          </span>
        </div>
      </div>
    <?php endif?>
    <div class="page-header">
      <div class="page-title">
        <span class="page-title-icon bg-gradient-info text-white mr-2">
          <i class="mdi mdi-account-multiple"></i>
        </span>
        Pelanggan
      </div>
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
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <?php if($this->session->userdata('level')=="bengkel"){?>
                  <a href="#tambah" class="btn btn-success" data-toggle="modal"><i class="mdi mdi-plus"></i></a>
                  <?php }?>
                  <?php if($this->session->userdata('level')=="admin"){?>
                  <a href="#tambah" class="btn btn-success" data-toggle="modal"><i class="mdi mdi-plus"></i></a>
                  <?php }?>
                </li>
              </ol>
            </nav>
              <thead>
                <table class="table table-bordered">
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 0; foreach($pelanggan as $pl): $no++;?>

          <tr>

            <td><?=$no?></td>
            <td><?=$pl->nama?></td>
            <td><?=$pl->username?></td>
            <td><?=$pl->password?></td>
            <td>
              <?php if($this->session->userdata('level')=="admin"){?> <a href="#ubah" data-toggle="modal" onclick="edit(<?=$pl->kode_pelanggan?>)"  class="btn btn-warning"><i class="mdi mdi-border-color"></i></a><?php }else{ 		echo "Anda User"; }?>
              <?php if($this->session->userdata('level')=="admin"){?> <a href="<?=base_url('index.php/pelanggan/hapus/'.$pl->kode_pelanggan)?>" 	class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus?')" ><i class="mdi mdi-delete"></i></a><?php }else{ echo "Anda User"; }?>
            </td>


          </tr>
        <?php endforeach?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="tambah" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row">
          <div class="col-md-12">
            <div class="modal-title">
              <h4 class="card-title">Tambah Pelanggan</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <form class="form-sample" action="<?=base_url('index.php/pelanggan/tambah')?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" class="form-control" name="nama" placeholder="Nama Pelanggan">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <center>
              <input type="submit" name="tambah" value="Tambah" class="btn btn-success">
              <input type="submit" class="btn btn-danger" value="Cancel" data-dismiss ="modal">
            </center>
          </div>
      </div>
    </div>
  </div>
  </form>
</div>

<div class="modal fade" id="ubah" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row">
          <div class="col-md-12">
            <div class="modal-title">
              <h4 class="card-title">Update Pelanggan</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <form class="form-sample" action="<?=base_url('index.php/Pelanggan/update')?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="hidden" name="kode_pelanggan" required id="kode_pelanggan">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="nama" id="nama">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="username" id="username">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="password" id="password">
          </div>
          <div class="form-group">
            <center>
              <input type="submit" name="update" value="Update" class="btn btn-warning">
              <input type="submit" class="btn btn-danger" value="Cancel" data-dismiss ="modal">
            </center>
          </div>
      </div>
    </div>
  </div>
  </form>
</div>




<script >

function edit(kode_user){
  $.ajax({
  type:"post",
  url:"<?=base_url()?>index.php/User/tampil_ubah_user/"+kode_user,
  dataType:"json",
  success:function(data){
  $("#kode_user").val(data.kode_user);
  $("#nama_user").val(data.nama_user);

  $("#username").val(data.username);
  $("#password").val(data.password);
  $("#level").val(data.level);
  }
});
}

</script>


</body>
</html>
