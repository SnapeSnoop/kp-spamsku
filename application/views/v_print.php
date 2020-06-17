<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('dist/css/AdminLTE.min.css') ?>">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> Data Pembayaran
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-12">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="vertical-align:middle;text-align:center;width:50px" rowspan=3>No</th>
                <th style="vertical-align:middle;text-align:center;width:50px;" rowspan=3>ID Pelanggan </td>
                <th style="vertical-align:middle;text-align:center;width:50px;" rowspan=3>Nama Pelanggan</th>
                <th style="vertical-align:middle; text-align:center;width:50px;" colspan=5>Hasil Pembacaan Meter Pelanggan</th>
                <th style="vertical-align:middle; text-align:center;width:50px;" colspan=5>Tagihan Pelanggan</th>
                <th style="vertical-align:middle;text-align:center;width:50px;" rowspan=3>Tarif </td>
                <th style="vertical-align:middle;text-align:center;width:50px;" rowspan=3>Beban</th>
                <th style="vertical-align:middle; text-align:center;width:50px;" colspan=3>Harga Per Meter</th>
                <th style="vertical-align:middle;text-align:center;width:50px;" rowspan=3>Ket</th>
              </tr>
              <tr>
                <th style="text-align:center;text-align:center;width:50px;">Meter Awal</th>
                <th style="text-align:center;text-align:center;width:50px;">Meter Akhir</th>
                <th style="text-align:center;text-align:center;width:50px;">0 - 10</th>
                <th style="text-align:center;text-align:center;width:50px;">11 - 50 </th>
                <th style="text-align:center;text-align:center;width:50px;"> >50 </th>
                <th style="text-align:center;text-align:center;width:50px;">Total Pemakaian</th>
                <th style="text-align:center;text-align:center;width:50px;">Tagihan Gol 1</th>
                <th style="text-align:center;text-align:center;width:50px;">Tagihan Gol 2</th>
                <th style="text-align:center;text-align:center;width:50px;">Tagihan Gol 3 </th>
                <th style="text-align:center;text-align:center;width:50px;"> Total Tagihan </th>
                <th style="text-align:center;text-align:center;width:50px;">0 - 10</th>
                <th style="text-align:center;text-align:center;width:50px;">11 - 50 </th>
                <th style="text-align:center;text-align:center;width:50px;"> >50 </th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($pembayaran as $data) { ?>
                <!-- <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data->kode_bayar ?></td>
                    <td><?= $data->no_pelanggan ?></td>
                    <td><?= $data->no_rekening ?></td>
                    <td><?= $data->nama_lengkap ?></td>
                    <td><?= $data->golongan ?></td>
                    <td><?= $data->bulan_bayar ?></td>
                    <td><?= $data->jumlah_bayar ?></td>
                    <td><?= $data->tanggal_bayar ?></td>
                  </tr> -->
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>


  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>

</html>