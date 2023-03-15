
<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-4 " data-toggle="modal" data-target="#tambah_kas_pemasukan">
        <i class=""></i> Tambah Pengeluaran</button>
        <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/laporan/print_pengeluaran')?>">
      <i class="fa fa-print"></i>Print</a>
        <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/laporan/pdf_pengeluaran')?>">
      <i class="fa fa-file"></i> Export PDF</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Input</th>
            <th>Pengeluaran</th>
            <th>Deskripsi Pengeluaran</th>
            <th>Tanggal Keluar</th>
            
			<th colspan="3" align="center">AKSI</th>
        </tr>
		
		<?php 
		$id=1;
		$total=0;
        foreach ($pengeluaran as  $pmskn ):
        $total += $pmskn->pengeluaran;  
        ?>
		<tr>
		<script>
			$( function() {
			$( "#date" ).datepicker({
				dateFormat: "yyyy-mm-dd"
			});
			} );
		</script>
            <td><?php echo $id++ ?></td>
            <td><?php echo $pmskn->nama_input ?></td>
            <td>Rp.<?php echo number_format($pmskn->pengeluaran,0,',','.')?></td>
            <td><?php echo $pmskn->deskripsi_pengeluaran ?></td>
            <td><?php echo $pmskn->tanggal_keluar ?></td>
			      <td><div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i> Detail </div></td>
            <td><?php echo anchor('admin/pengeluaran/edit/'.$pmskn->id,
            '<div class="btn btn-primary btn-sm">Edit </div>')?></td>
            <td><?php echo anchor('admin/pengeluaran/hapus/'.$pmskn->id,
            '<div class="btn btn-danger btn-sm">Hapus</i></div>')?> </td>
			
        </tr>
        <?php endforeach; ?>
		
		<tr>
			<td align="" colspan="1"><strong>Sub Total</strong></td>
			<td align="" colspan="2"><strong><?php echo number_format($total,0,',','.')?></strong></td>

		</tr>
    </table>
	
 </div>
 <div class="modal fade" id="tambah_kas_pemasukan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Uang pengeluaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/pengeluaran/create'?> " method="post" enctype="multipart/form-data">
    <div class="form-group">
        
        <input type="hidden" name="tanggal_keluar" class="form-control" id="date" placeholder="Tahun-Bulan-tanggal">
		 
        <label> Pengeluaran <strong></strong> </label>
        <input type="text" name="pengeluaran" class="form-control">
        <input type="date" name="tanggal_keluar" class="form-control">
        <input type="hidden" name="nama_input" class="form-control" value="<?= $userdata->last_name?>">
        <label> Deskripsi Pengeluaran <strong></strong> </label>
        <input type="text" name="deskripsi_pengeluaran" class="form-control">
          
          
     </div>
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Masukkan kas Pengeluaran</button>
      </div>
      </form>
    </div>
  </div>
</div>
