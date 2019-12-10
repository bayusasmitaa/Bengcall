
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
					Pemesanan
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
										<th>Pesanan</th>
                    <th>Lokasi</th>
										<th>Total</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 0; foreach($transaksi as $ts): $no++;?>

						<tr>
							<td><?=$no?></td>
							<td><?=$ts->sparepart?></td>
							<td><?=$ts->lokasi?></td>
							<td><?=$ts->total?></td>
              <td>
								<span class="label <?php if($ts->status == 'Pending'):?>text-warning
																	 <?php elseif($ts->status == 'Success'):?>text-info
																	 <?php endif;?>">
																			<?php if($ts->status == 'Pending'):?>
																				Belum diantar
																			<?php elseif($ts->status == 'success'):?>
																				Telah diantar
																		<?php endif;?>
																	</span>
							</td>
						</tr>
					<?php endforeach?>
								</tbody>
							</table>
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
      							<h4 class="card-title">Tambah Pesanan</h4>
      						</div>
      					</div>
      				</div>
      			</div>
      			<div class="modal-body">
      				<form class="form-sample" action="<?=base_url('index.php/pemesanan/tambah')?>" method="post" enctype="multipart/form-data">
      					<div class="form-group">
                  <select class="form-control" name="kategori">
  									<option value="Kategori">Pesan </option>
  									<?php foreach ($sparepart as $sp): ?>
  										<option value="<?= $sp->kode_sparepart?>" ><?= $sp->nama_sparepart?></option>
  									<?php endforeach?>
  								</select>
      					</div>
      			</div>
      		</div>
      	</div>
      	</form>
      </div>

	</div>
</div>
