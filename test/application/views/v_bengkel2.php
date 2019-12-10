




		<!-- <?php if($this->session->userdata('level')=="bengkel"){?>
		<br><a href="#tambah" class="btn btn-primary" data-toggle="modal" style="float: right;"><span class="fa fa-plus"></span> Barang</a><br><br>
		<?php }?> -->


		<!-- <?php if($this->session->userdata('level')=="admin"){?>
		<br><a href="#tambah" class="btn btn-primary" data-toggle="modal" style="float: right;"><span class="fa fa-plus"></span>Katalog</a><br><br>
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
						Bengkel
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
									</ol>
								</nav>
									<thead>
										<table class="table table-bordered">
										<tr>
											<th>No</th>
											<th>Nama Benkel</th>
											<th>Alamat</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 0; foreach($user as $sr): $no++;?>

							<tr>

								<td><?=$no?></td>
								<td><?=$sr->nama_user?></td>
								<td><?=$sr->alamat?></td>
								<td>
									<a href="#tambah" class="btn btn-info text-small" data-toggle="modal">Pilih Bengkel</a>
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
									<h4 class="card-title">Tambah Sparepart</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-body">
						<form class="form-sample" action="<?=base_url('index.php/sparepart/tambah')?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<input type="text" class="form-control" name="sparepart" placeholder="Nama Sparepart">
							</div>
							<div class="form-group">
								<select class="form-control" name="kategori">
									<option value="Kategori">Kategori</option>
									<?php foreach ($kategori as $kt): ?>
										<option value="<?= $kt->kode_kategori?>" ><?= $kt->nama_kategori?></option>
									<?php endforeach?>
								</select>
							</div>
							<div class="form-group">
								<input type="number" class="form-control" name="harga" placeholder="Harga">
							</div>
							<div class="form-group">
								<center>
									<input type="submit" name="tambah" value="Tambah" class="btn btn-success">
									<input type="submit" class="btn btn-danger" value="Cancel" data-dismiss="modal">
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
									<h4 class="card-title">Update Sparepart</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-body">
						<form class="form-sample" action="<?=base_url('index.php/Sparepart/update')?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<input type="hidden" name="kode_sparepart" required id="kode_sparepart">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="sparepart"  required  id="sparepart">
							</div>
							<div class="form-group">
								<select name="kategori" class="form-control" id="kategori" required >
									<?php foreach ($kategori as $kt): ?>
										<option value="<?= $kt->kode_kategori?>" ><?= $kt->nama_kategori?></option>
									<?php endforeach?>
								</select>
							</div>
							<div class="form-group">
								<input type="number" class="form-control" name="harga" id="harga">
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


			function edit(kode_sparepart){
				$.ajax({
					type:"post",
					url:"<?=base_url()?>index.php/sparepart/tampil_ubah_sparepart/"+kode_sparepart,
					dataType:"json",


					success:function(data){
						$("#kode_sparepart").val(data.kode_sparepart);
						$("#sparepart").val(data.sparepart);
						$("#kategori").val(data.kode_kategori);
						$("#merk").val(data.merk);
						$("#stok").val(data.stok);
						$("#harga").val(data.harga);

					}
				});
			}

		</script>


	</body>
</html>
