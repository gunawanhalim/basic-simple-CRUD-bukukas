<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    
  </head>
  <body>
  <div class="col-12">
    <div class="invoice p-3 mb-3">
        <div class="row">
            <div class="col-12">
                <h4>
                    <i class="fas fa-globe"><?= $title ?></i>
                    <small class="float-right">Tanggal: <?= $tanggal ?>/<?= $bulan ?>/<?= $tahun ?></small>
                </h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12 table-responsive">
            <table class="table table-stripped">
            <thead>
                <tr>
                <th>No</th>
                <th>Nama Input</th>
                <th>Tanggal Masuk </th>
                <th>Pemasukan</th>
                <th>Pengeluaran</th>
                <th>Total Harga</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $sub_total = 0;
                    foreach ($cetak_bukti as $key => $value) 
                    {   $total_harga = $value->pemasukan - $value->pengeluaran;
                        $sub_total   = $sub_total+ $total_harga;?>
                    
                        <tr>
                        <td><?= $value->id?></td>
                        <td><?= $value->nama_input?></td>
                        <td><?= $value->tanggal_masuk?></td>
                        <td>Rp.<?=  number_format($value->pemasukan,0,',','.') ?></td>
                        <td>Rp.<?=  number_format($value->pengeluaran,0,',','.') ?></td>
                        <td>Rp.<?=  number_format($total_harga,0,',','.') ?></td>
                        </tr>
                   <?php }?>
                </tbody>
                </table>
                <h2><strong>Total Harga:</strong> Rp.<?=  number_format($sub_total,0,',','.') ?></h2>
            
            </div>
        </div>
        <div class="row no-print">
        <div class="col-12">
            <button type="submit" onclick="window.print()" class="btn btn-default"><i class="fas fa-print"></i>Print</a>
        </div>
        </div>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>