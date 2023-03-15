<?php echo anchor('admin/pengeluaran', 'Back'); ?>
<form action="<?= base_url('admin/pengeluaran/update') ?>" method="post">
	<table class="table">
		<tr>
			<td><strong>Pengeluaran</strong></td>
			<td><input type="text" name="pengeluaran" value="<?= $pengeluaran->pengeluaran ?>"></td>
		</tr>
		<tr>
		 	<td><strong>Nama Input</strong></td>
			<td><input type="text" name="nama_input" value="<?= $pengeluaran->nama_input ?>"></td>
		</tr>
		<tr>
		 	<td><strong>Deskripsi Pengeluaran</strong></td>
			<td><input type="text" name="deskripsi_pengeluaran" value="<?= $pengeluaran->deskripsi_pengeluaran ?>"></td>
		</tr>
		<tr>
			
			<td><input type="hidden" name="tanggal_keluar" value="<?= $pengeluaran->tanggal_keluar ?>"></td>
		</tr>
		<tr>
			<td></td>
			<input type="hidden" name="id" value="<?= $pengeluaran->id ?>">
			<td><input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>
