<?php echo anchor('admin/pemasukan', 'Back'); ?>
<form action="<?= base_url('admin/pemasukan/update') ?>" method="post">
	<table class="table">
		<tr>
			<td><strong>Pemasukan</strong></td>
			<td><input type="text" name="pemasukan" value="<?= $pemasukan->pemasukan ?>"></td>
		</tr>
		<tr>
			<td><strong>Deskripsi Pemasukan</strong></td>
			<td><input type="text" name="deskripsi_pemasukan" value="<?= $pemasukan->deskripsi_pemasukan ?>"></td>
		</tr>
		<tr>
			
			<td><input type="hidden" name="tanggal_masuk" value="<?= $pemasukan->tanggal_masuk ?>"></td>
		</tr>
		<tr>
			<td></td>
			<input type="hidden" name="id" value="<?= $pemasukan->id ?>">
			<td><input class="btn btn-primary"type="submit" value="Submit"></td>
		</tr>
	</table>
</form>
