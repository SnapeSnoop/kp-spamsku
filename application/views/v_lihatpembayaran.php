 <div class="content-wrapper">
<section class="content-header">
      <h1>
        Detail Pembayaran
      </h1>
      
    </section>

    

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Detail Pembayaran PDAM
          
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
       
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
                <td>Golongan 1</td>
                <td>:</td>
                <td>Rp. <?= number_format($data->jumlah_bayar,0) ?></td>
              </tr>
              <tr>
                <td>Golongan 2</td>
                <td>:</td>
                <td>Rp. <?= number_format($data->jumlah_bayar,0) ?></td>
              </tr>
              <tr>
                <td>Golongan 3</td>
                <td>:</td>
                <td>Rp. <?= number_format($data->jumlah_bayar,0) ?></td>
              </tr>
               <tr>
                <td>Jumlah </td>
                <td>:</td>
                <td>Rp. <?= number_format($data->jumlah_bayar,0) ?></td>
              </tr>
              <tr>
                <td>Biaya beban</td>
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
  
    <div class="row no-print">
        <div class="col-xs-12">
          <a href="<?= base_url().'pembayaran/detail/'. $data->no_pelanggan ?>"><button class="btn btn-danger">Kembali</button></a>
          <a href="<?= base_url().'pembayaran/cetak/'.$data->kode_bayar?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
        </div>
    </div>
      <?php } ?>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  