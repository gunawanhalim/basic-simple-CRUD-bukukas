<?php echo anchor('admin/staff', 'Back'); ?>
<form action="<?= base_url('admin/data_staff/update') ?>" method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="last_name" value="<?= $staff->last_name ?>"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="email" value="<?= $staff->email ?>"></td>
		</tr>
		<tr>
			<td></td>
			<input type="hidden" name="id" value="<?= $staff->id ?>">
			<td><input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>
