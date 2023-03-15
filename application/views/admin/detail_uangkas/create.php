<?php echo anchor('admin/detail_uangkas', 'Back'); ?>
<form action="<?= base_url('admin/detail_uangkas/create') ?>" method="post">
	<table>
		<tr>
			<td>Name Input</td>
			<td><input type="disabled" name="nama"></td>
		</tr>
		<tr>
			<td>Pemasukan</td>
			<td><input type="hidden" name="pemasukan"></td>
		</tr>
		<tr>
			<td>Pengeluaran</td>
			<td><input type="hidden" name="pengeluaran"></td>
		</tr>
		<tr>
			<td>Deskripsi Pemasukan</td>
			<td><input type="hidden" name="deskripsi_pemasukan"></td>
		</tr>
		<tr>
			<td>Deskripsi Pengeluaran</td>
			<td><input type="hidden" name="deskripsi_pengeluaran"></td>
		</tr>
		<tr>
			<td>Tanggal Keluar</td>
			<td><input type="hidden" name="tanggal_masuk"></td>
		</tr>
		<tr>
			<td>Tanggal Keluar</td>
			<td><input type="hidden" name="tanggal_masuk"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>
