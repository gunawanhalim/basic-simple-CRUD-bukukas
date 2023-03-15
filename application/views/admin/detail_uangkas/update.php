<?php echo anchor('admin/detail_uangkas', 'Back'); ?>
<form action="<?= base_url('admin/detail_uangkas/update') ?>" method="post">
<div class="form-group">
        <div class="table">
        <tr>
         <td><strong> Nama Input </strong></label> </td>
         <td><input type="text" name="nama_input" class="form-control" value="<?php echo $uangkas->nama_input ?>"></td>
         </tr>
         <label >Pemasukan</label>
         <input type="hidden" name="id" class="form-control" value="<?php echo $uangkas->id ?>">
         <input type="text" name="pemasukan" class="form-control" value="<?php echo $uangkas->pemasukan ?>">
         <label >Pengeluaran</label>
         <input type="text" name="pengeluaran" class="form-control" value="<?php echo $uangkas->pengeluaran ?>">
         <label >tanggal keluar</label>
         <input type="text" name="tanggal_keluar" class="form-control" value="<?php echo $uangkas->tanggal_keluar ?>">
         <label >tanggal masuk</label>
         <input type="text" name="tanggal_masuk" class="form-control" value="<?php echo $uangkas->tanggal_masuk ?>">
         <label >Deskripsi Pemasukan</label>
         <input type="text" name="deskripsi_pemasukan" class="form-control" value="<?php echo $uangkas->deskripsi_pemasukan ?>">
         <label >Deskripsi Pengeluaran</label>
         <input type="text" name="deskripsi_pengeluaran" class="form-control" value="<?php echo $uangkas->deskripsi_pengeluaran ?>">
         <tr><td><input type="submit" value="Submit"></td> </tr>
        </div>
        </div>
</form>
