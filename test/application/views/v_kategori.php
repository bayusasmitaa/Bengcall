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
						<i class="mdi mdi-table-large"></i>
					</span>
					Kategori
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
										<th>Kode</th>
										<th>Nama</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 0; foreach($kategori as $kt): $no++;?>

						<tr>

							<td><?=$no?></td>
							<td><?=$kt->kode_kategori?></td>
							<td><?=$kt->nama_kategori?></td>
							<td>
							<?php if($this->session->userdata('level')=="admin"){?> <a href="#ubah" data-toggle="modal" onclick="edit(<?=$kt->kode_kategori?>)"  class="btn btn-warning"><i class="mdi mdi-border-color"></i></a><?php }else{ 		echo ""; }?>
							<?php if($this->session->userdata('level')=="admin"){?><a href="<?=base_url('index.php/Kategori/hapus/'.$kt->kode_kategori)?>" class="btn btn-danger" onclick="return confirm('Are you sure?')" ><i class="mdi mdi-delete"></i></a><?php }else{ echo ""; }?>
							<?php if($this->session->userdata('level')=="bengkel"){?> <a href="#ubah" data-toggle="modal" onclick="edit(<?=$kt->kode_kategori?>)"  class="btn btn-warning"><i class="mdi mdi-border-color"></i></a><?php }else{ 		echo ""; }?>
							<?php if($this->session->userdata('level')=="bengkel"){?><a href="<?=base_url('index.php/Kategori/hapus/'.$kt->kode_kategori)?>" class="btn btn-danger" onclick="return confirm('Are you sure?')" ><i class="mdi mdi-delete"></i></a><?php }else{ echo ""; }?>
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
							<h4 class="card-title">Tambah Kategori</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<form class="form-sample" action="<?=base_url('index.php/kategori/tambah')?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori">
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
							<h4 class="card-title">Update Kategori</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<form class="form-sample" action="<?=base_url('index.php/kategori/update')?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="hidden" name="kode_kategori" required id="kode_kategori">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="nama_kategori" required id="nama_kategori">
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


	function edit(kode_kategori){
		$.ajax({
			type:"post",
			dataType:"json",
			url:"<?=base_url()?>index.php/kategori/tampil_ubah_kategori/"+kode_kategori,


			success:function(data){
				$("#kode_kategori").val(data.kode_kategori);
				$("#nama_kategori").val(data.nama_kategori);

			}
		});
	}

</script>
