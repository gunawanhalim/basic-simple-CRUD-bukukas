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
        $total = $value->pengeluaran;
        $subtotal += $total  ?>
        <tr>
		    <td><?php echo $id++ ?></td>
            <td><?php echo $value->nama_input ?></td>
            <td>Rp.<?php echo number_format($value->pengeluaran,0,',','.')?></td>
            <td><?php echo $value->tanggal_keluar ?></td>
            <td><?php echo $value->deskripsi_pengeluaran ?></td>
            </tr>
        <?php endforeach; ?>
        <td align="" colspan="2"><strong>Sub Total</strong></td>
		<td align="" colspan="3"><strong>Rp.<?php echo number_format($subtotal,0,',','.')?></strong></td>
    </tbody>
    
</table>
</div>
<script>
    window.print()
</script>