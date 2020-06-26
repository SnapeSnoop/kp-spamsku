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
          <i class="fa fa-globe"></i> Struck Pembayaran KP-SPAMS
        </h2>
      </div>
      <!-- /.col -->
    </div>
   
    

      <?php foreach ($lihatbayar as $data ){ ?>
      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">  <small>Tanggal: <?php echo date('d/m/Y') ?></small></p>
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Tanggal Bayar:</th>
                <td>:</td>
                <td><?= $data->tanggal_bayar ?></td>
              </tr>
              <tr>
                <th>Kode Pembayaran</th>
                <td>:</td>
                <td><?= $data->kode_bayar ?></td>
              </tr>
              <tr>
                <th>No Pelanggan</th>
                <td>:</td>
                <td><?= $data->no_pelanggan ?></td>
              </tr>
              <tr>
                <th>Nama</th>
                <td>:</td>
                <td><?= $data->nama_lengkap ?></td>
              </tr>
              <tr>
                <th>No Rekening</th>
                <td>:</td>
                <td><?= $data->no_rekening ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead"></p>

          <div class="table-responsive">
            <table class="table">
              <br/>
              <tr>
                <th style="width:50%">Periode</th>
                <td></td>
                <th>Tagihan</th>
              </tr>
              <tr>
                <td><?= $data->bulan_bayar ?></td>
                <td></td>
                <td></td>
              </tr>
               <tr>
                <td></td>
                <td>:</td>
                <td>Rp. <?= number_format($data->jumlah_bayar,0) ?></td>
              </tr>
              <tr>
                <td>Biaya Adm</td>
                <td>:</td>
                <td>Rp. <?= number_format($data->biaya_adm,0) ?></td>
              </tr>
              <tr>
                <th>Total</th>
                <td>:</td>
                <td>Rp. <?= number_format($data->jumlah_bayar,0)  ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <?php } ?>
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
