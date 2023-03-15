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
		<td><?= $person->name ?></td>
	</tr>
	<tr>
		<td>Address</td>
		<td>:</td>
		<td><?= $person->address ?></td>
	</tr>
</table>
