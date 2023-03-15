<div class="container-fluid">
<form action="<?php base_url('')?> filter" method="POST" target="">
<h3 class="text-success">Laporan Pengeluaran</h3>
<input type="hidden" name="nilaifilter" value="1" >
<label> Tanggal Awal</label>
<input type="date" name="starttanggal" required>
<label> Tanggal Akhir</label>
<input type="date" name="endtanggal" required>
<br>
<input class="btn btn-default" type="submit" value="Print">
</form>
<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Input</th>
            <th>Pengeluaran</th>
            <th>Deskripsi Pengeluaran</th>
            <th>Tanggal Keluar</th>
			<!-- <th colspan="3" align="center">AKSI</th> -->
        </tr>
		
		<?php 
		$id=1;
		$total=0;
        foreach ($pengeluaran as  $pmskn ):
        $total += $pmskn->pengeluaran;  ?>
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
            <td>Rp.<?php echo number_format($pmskn->pengeluaran,0,',','.')?></td>
            <td><?php echo $pmskn->deskripsi_pengeluaran?></td>
            <td><?php echo $pmskn->tanggal_keluar ?></td>
			
		
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
        <input type="text" name="tanggal_masuk" class="form-control" id="date" placeholder="Tahun-Bulan-tanggal">
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
  <div class="container-fluid">
        <?php echo $subtitle ?>
        <br>
        <br>
        <hr>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Input</th>
            <th>Pemasukan</th>
            <th>Tanggal Masuk</th>
            <th>Deksripsi Pemasukan</th>
           </tr>
    </thead>
    <tbody>
    <?php 
		$id=1;
		$total=0;
    $subtotal=0;
        foreach ($datafilter as  $value ):
        $total = $value->pemasukan;
        $subtotal += $total  ?>
        <tr>
		    <td><?php echo $id++ ?></td>
            <td><?php echo $value->nama_input ?></td>
            <td>Rp.<?php echo number_format($value->pemasukan,0,',','.')?></td>
            <td><?php echo $value->tanggal_masuk ?></td>
            <td><?php echo $value->deskripsi_pemasukan ?></td>
            </tr>
        <?php endforeach; ?>
        <td align="" colspan="2"><strong>Sub Total</strong></td>
		<td align="" colspan="3"><strong>Rp.<?php echo number_format($subtotal,0,',','.')?></strong></td>
    </tbody>
    
</table>
</div>
</div>
   