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
						User
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
											<th>Nama User</th>
											<th>Alamat</th>
											<th>Username</th>
											<th>Password</th>
											<th>Level</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 0; foreach($user as $sr): $no++;?>

							<tr>

								<td><?=$no?></td>
								<td><?=$sr->nama_user?></td>
								<td><?=$sr->alamat?></td>
								<td><?=$sr->username?></td>
								<td><?=$sr->password?></td>
								<td><?=$sr->level?></td>
								<td>
									<?php if($this->session->userdata('level')=="admin"){?> <a href="#ubah" data-toggle="modal" onclick="edit(<?=$sr->kode_user?>)"  class="btn btn-warning"><i class="mdi mdi-border-color"></i></a><?php }else{ 		echo "Anda User"; }?>
									<?php if($this->session->userdata('level')=="admin"){?> <a href="<?=base_url('index.php/User/hapus/'.$sr->kode_user)?>" 	class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus?')" ><i class="mdi mdi-delete"></i></a><?php }else{ echo "Anda User"; }?>
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
									<h4 class="card-title">Tambah User</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-body">
						<form class="form-sample" action="<?=base_url('index.php/User/tambah')?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<input type="text" class="form-control" name="kode_user" placeholder="Kode">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="nama_user" placeholder="Nama User">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="alamat" placeholder="Alamat">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="username" placeholder="Username">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="password" placeholder="Password">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="level" placeholder="Level">
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
									<h4 class="card-title">Update User</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-body">
						<form class="form-sample" action="<?=base_url('index.php/User/update')?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<input type="hidden" name="kode_user" required id="kode_user">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="nama_user" id="nama_user">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="username" id="username">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="password" id="password">
							</div>
							<div class="form-group">
								<input type="hidden" class="form-control" name="level" >
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




		<div class="modal fade" id="usbah" >
			<div class="modal-dialog">

			<div class="modal-content">
			<div class="modal-header">

				<div class="row">

					<div class="col-md-6">
						<div class="modal-title">Ubah User</div>
					</div>
					<div class="col-md-6">
						<button class="btn " data-dismiss = "modal" style="float: right; ">X</button>
						</div>

						</div>

			<div class="modal-body">


			<form action="<?=base_url('index.php/User/update')?>" method="post" >

			<table>


			<td><input type="hidden" name="kode_user" required id="kode_user" style="margin-left: 20px;"></td>


				<tr>
				<td>Nama User</td>
				<td><input type="text" name="nama_user" required id="nama_user" style="margin-left: 20px;"></td>
				</tr>



				<tr>
				<td>Username</td>
				<td><input type="text" name="username" required id="username" style="margin-left: 20px;"></td>
				</tr>

				<tr>
				<td>Password</td>
				<td><input type="text" name="password" id="password" required style="margin-left: 20px;"></td>
				</tr>

				<td><input type="hidden" name="level"  required id="level" style="margin-left: 20px;"></td>

			</table>


			<center><input type="submit" name="tambah" value="Ubah" class="btn btn-warning" style="margin-top: 30px;"></center>

		</form>

			</div>
			</div>
			</div>

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
