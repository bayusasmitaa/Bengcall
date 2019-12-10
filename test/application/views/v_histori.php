
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
						<i class="mdi mdi-chart-bar"></i>
					</span>
					Histori Pemesanan
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
										<a href="<?=base_url('index.php/Histori/cetak_laporan')?>" class="btn btn-info">Print</a>
									</li>
								</ol>
							</nav>
								<thead>
									<table class="table table-bordered">
									<tr>
										<th>No</th>
										<th>No. Nota</th>
										<th>Sparepart</th>
										<th>Pelanggan</th>
										<th>Alamat</th>
										<th>Total</th>
										<th>Status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 0; foreach($ts as $ts): $no++;?>

						<tr>
							<td><?=$no?></td>
							<td><?=$ts->kode_transaksi?></td>
							<td><?=$ts->nama_pembeli?></td>
							<td><?=$ts->total?></td>
							<td><?=$ts->tanggal_beli?></td>
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
