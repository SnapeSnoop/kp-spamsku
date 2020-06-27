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
          <i class="fa fa-globe"></i> Data Pelanggan
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
                  <th>No</th>
                  <th>No Pelanggan</th>
                  <th>No Rekening</th>
                  <th>Nama</th>
                  <th>No KTP</th>
                  <th>Tempat/Tanggal Lahir</th>
                  <th>Agama</th>
                  <th>Alamat</th>
                  <th>Pekerjaan</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no=1;
                foreach ($pelanggan as $data ){ ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data->no_pelanggan ?></td>
                    <td><?= $data->no_rekening ?></td>
                    <td><?= $data->nama_lengkap ?></td>
                    <td><?= $data->noktp ?></td>
                    <td><?= $data->tempat_lahir .' / '.$data->tanggal_lahir ?></td>
                    <td><?= $data->agama ?></td>
                    <td><?= $data->alamat ?></td>
                    <td><?= $data->pekerjaan ?></td>
                  </tr>
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
