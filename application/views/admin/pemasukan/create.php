<?php echo anchor('admin/person', 'Back'); ?>
<form action="<?= base_url('admin/person/create') ?>" method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Tanggal Pemasukan</td>
			<td><input type="text" name="tanggal_masuk"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>
