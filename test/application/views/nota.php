Bengkel<br>
Toko Terpercaya<br>
_________________________________<br>
No Nota :<?= $ts->kode_transaksi?><br>
Nama Kasir :<?= $ts->nama_user?><br>
Tanggal :<?= $ts->tanggal_beli?>


<table border="1px solid black" style="border-collapse: collapse;">


	<tr>
	<th>No</th><th>Judul</th><th>Harga</th><th>Jumlah</th><th>Sub total</th>
	</tr>

	<?php $no=0; foreach($dts as $dts):$no++?>

	<tr>

	<td><?= $no?></td><td><?= $dts->nama_sparepart?></td><td><?= number_format($dts->harga)?></td><td><?= $dts->jumlah?></td><td><?= number_format($dts->harga*$dts->jumlah)?></td>

	</tr>
<?php endforeach?>

	<tr>

	<td colspan="2">Total</td><td colspan="3"><?= $ts->total?></td><td>

	</tr>


</table>


<script>
  $("#oke").dataTable({
    dom: 'Bfrtip',
    responsive: true,
    buttons: [
      'copy' , 'csv' , 'excel' , 'pdf' , 'print'
    ]
  });
</script>
