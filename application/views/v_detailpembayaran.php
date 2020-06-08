 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pembayaran
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pembayaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <div class="box">
         <!-- /.box-header -->
            <div class="box-body">
      <div class="row">
          <div class="col-xs-6">
        <p class="lead">Data Pembayaran Per Pelanggan</p>

        <div class="table-responsive">
          <?php foreach($pelanggan as $a){ ?>
          <table class="table">
            <tr>
              <th style="width:50%">No Pelanggan</th>
              <td><?= $a->no_pelanggan ?></td>
            </tr>
            <tr>
              <th>Nama</th>
              <td><?= $a->nama_lengkap ?></td>
            </tr>
            <tr>
              <th>Alamat</th>
              <td><?= $a->alamat ?></td>
            </tr>
            <tr>
              <th>Pekerjaan</th>
              <td><?= $a->pekerjaan ?></td>
            </tr>
             <tr>
              <th><a href="<?= base_url().'pembayaran/datapembayaran' ?>"><button class="btn btn-danger">Kembali</button></a></th>
              <td></td>
            </tr>
          </table>
        <?php } ?>
        
        </div>

      </div>

      </div>
     
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Pembayaran</th>
                    <th>Bulan Bayar</th>
                    <th>Jumlah Bayar</th>
                    <th>Tanggal bayar</th>
                    <th>Status</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                <tbody>
                   <?php 
                    $no=1;
                    foreach($detail as $data){ 
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $data->kode_bayar ?></td>
                      <td><?= $data->bulan_bayar ?></td>
                      <td><?= $data->jumlah_bayar ?></td>
                      <td><?= $data->tanggal_bayar ?></td>
                      <td><?= $data->status_bayar ?></td>
                      <td>
                        <a href="<?= base_url().'pembayaran/lihat/'.$data->kode_bayar ?>"><i class="fa fa-eye btn btn-default"></i></a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </div>
