<?php echo anchor('admin/staff', 'Back'); ?>
<div class="container-fluid">
	<div class="table-responsive " style="padding-top: 6px">
		<table class="table table-striped table-hover table-condensed" id="mytable" style="width: 100%">
			<thead>
				<tr class="active">
					<th class="text-center" width="30px" style="padding-left: 20px;">No</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Terakhir Login</th>
					<th class="text-center" width="160px" style="padding-left: 20px;">Tindakan</th>
				</tr>
			</thead>
			<tbody>
				<?php $id = 1;
				foreach ($staff as $staf) { ?>
					<tr>
						<td class="text-center" width="30px" style="padding-left: 20px;"><?= $id++ ?></td>
						<td><?= $staf->last_name ?></td>
						<td><?= $staf->email ?></td>
						<td><?= $staf->last_login ?></td>
						<td class="text-center" width="160px" style="padding-left: 20px;">
							<?php echo anchor('admin/data_staff/detail/' . $person->id, 'Detail'); ?> |
							<?php echo anchor('admin/data_staff/edit/' . $person->id, 'Update'); ?> |
							<?php echo anchor('admin/data_staff/delete/' . $person->id, 'Delete'); ?>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

