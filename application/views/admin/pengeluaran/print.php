<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <style>
        .line-title{
            border:0cm;
            border-style: inset;
            border-top: 1px solid #000;        }
    </style>
    <title>Laporan</title>
    </head>
    <body>
        <img src="assets/images/logo.jpg" style= "position: absolute; width: 60px; height: auto;"alt="">
        <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height:1.6; font-weight: bold;">APLIKASI PENGOLAAN UANGKAS Universitas Dipanegara
                    <br> MAKASSAR INDONESIA SULAWESI SELATAN
            </td>
        </tr>
        </table>
        <hr class=line-title>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama Input</th>
                <th>Pengeluaran</th>
                <th>Tanggal Keluar</th>
                <th>Deskripsi Pengeluaran</th>

                </tr>
        </thead>
                <?php
                $id=1;
                $total=0;
                $subtotal=0;
                foreach ($uangkas as $uk):
                    $total =+ $uk->pengeluaran;
                    $subtotal += $total?>
                <tr>
                <td><?php echo $id++ ?></td>
                <td><?php echo $uk->nama_input ?></td>
                <td>Rp.<?php echo number_format($uk->pengeluaran,0,',','.')?></td>
                <td><?php echo $uk->tanggal_keluar ?></td>
                <td><?php echo $uk->deskripsi_pengeluaran ?></td>
                </tr>
                <?php endforeach; ?>
        </table>
        <div><strong>Total: Rp.<?php echo number_format($subtotal,0,',','.')?></strong></div>
        <script type="text/javascript">
            window.print();
        </script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body></html>
