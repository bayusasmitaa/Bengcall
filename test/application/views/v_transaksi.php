
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
					Transaksi
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
										<th>Pelanggan</th>
										<th>Lokasi</th>
										<th>Masalah</th>
										<th>Status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 0; foreach($transaksi as $ts): $no++;?>

						<tr>
							<td><?=$no?></td>
							<td><?=$ts->nama?></td>
							<td><?=$ts->lokasi?></td>
							<td><?=$ts->masalah?></td>
							<td>
								<span class="label <?php if($ts->status == 'pending'):?>text-warning
								<?php elseif($ts->status == 'success'):?>text-info
																	 <?php endif;?>">
																			<?php if($ts->status == 'pending'):?>
																				Transaksi Belum Selesai
																			<?php elseif($ts->status == 'success'):?>
																				Transaksi Selesai
																		<?php endif;?>
																	</span>
							</td>
							<td>
								<a href="<?=base_url("index.php");?>/transaksi/konfirmasi_pembayaran/<?=$ts->kode_transaksi;?>" class="btn btn-success btn-sm"><i class="mdi mdi-check"></i></a>
								<a href="<?=base_url("index.php");?>/transaksi/delete_transaksi/<?=$ts->kode_transaksi;?>" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></a>
							</td>
						</tr>
						<?php $no++;
					   endforeach?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>
