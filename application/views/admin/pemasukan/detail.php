<?php echo anchor('admin/person', 'Back'); ?>
<table>
	<div class="container">
		<button class="btn btn-sm btn-primary">
			<input type="type"> Input pemasukan
		</button>
	</div>
	<tr>
		<td>Pemasukan</td>
		<td>:</td>
		<td><?= $pemasukan->name ?></td>
	</tr>
	<tr>
		<td>Tanggal Pemasukan</td>
		<td>:</td>
		<td><?= $pemasukan->tanggal_masuk ?></td>
	</tr>
</table>
