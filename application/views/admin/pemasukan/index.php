
<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-4 " data-toggle="modal" data-target="#tambah_kas_pemasukan">
        <i class=" "></i> Tambah Pemasukan</button>
        <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/laporan/print_pemasukan')?>">
      <i class="fa fa-print"></i>Print</a>
        <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/laporan/pdf_pemasukan')?>">
      <i class="fa fa-file"></i> Export PDF</a>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Input</th>
            <th>Pemasukan</th>
            <th>Deskripsi Pemasukan</th>
            <th>Tanggal Masuk</th>
			<th colspan="3" align="center">AKSI</th>
        </tr>
		
		<?php 
		$id=1;
		$total=0;
        foreach ($pemasukan as  $pmskn ):
        $total += $pmskn->pemasukan;  ?>
		<tr>
		<script>
			$( function() {
			$( "#date" ).datepicker({
				dateFormat: "yy-mm-dd"
			});
			} );
		</script>
            <td><?php echo $id++ ?></td>
            <td><?php echo $pmskn->nama_input?></td>
            <td>Rp.<?php echo number_format($pmskn->pemasukan,0,',','.')?></td>
            <td><?php echo $pmskn->deskripsi_pemasukan?></td>
            <td><?php echo $pmskn->tanggal_masuk ?></td>
			
            <td><div class="btn btn-success btn-sm"><i class=""></i> Detail</div></td>
            <td><?php echo anchor('admin/pemasukan/edit/'.$pmskn->id,
            '<div class="btn btn-primary btn-sm">Edit </div>')?></td>
            <td><?php echo anchor('admin/pemasukan/hapus/'.$pmskn->id,
            '<div class="btn btn-danger btn-sm">Hapus</i></div>')?> </td>
			
        </tr>
        <?php endforeach; ?>
		
		<tr>
			<td align="" colspan="1"><strong>Sub Total</strong></td>
			<td align="" colspan="2"><strong>Rp.<?php echo number_format($total,0,',','.')?></strong></td>

		</tr>
    </table>
	
 </div>
 <div class="modal fade" id="tambah_kas_pemasukan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Uang Pemasukan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/pemasukan/create'?> " method="post" enctype="multipart/form-data">
    <div class="form-group">
      
        <label> Tanggal Masuk </label>
        <input type="date" name="tanggal_masuk" class="form-control local-date" id="date" placeholder="Tahun-Bulan-tanggal">
        <input type="hidden" name="nama_input" class="form-control" value="<?= $userdata->last_name; ?>">
		    <label> Pemasukan <strong> Rp. </strong> </label>
	    	<input type="text" name="pemasukan" class="form-control">        
        <label> Deskripsi Pemasukan <strong></strong> </label>
	    	<input type="text" name="deskripsi_pemasukan" class="form-control">        
     </div>
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Masukkan kas pemasukan</button>
      </div>
      </form>
    </div>
  </div>
</div>
