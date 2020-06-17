<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     Cetak Data Pembayaran
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Laporan</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box">
    <div class="box-header">
         <button class="btn btn-primary fa fa-print" data-toggle="modal" data-target="#modal-default"> Cetak</button>
       </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
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
            <!-- <?php
                  $no = 1;
                  foreach ($databayar as $data) {
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $data->no_rekening ?></td>
                      <td><?= $data->no_pelanggan ?></td>
                      <td><?= $data->nama_lengkap ?></td>
                      <td><?= $data->golongan ?></td>
                      <td>
                        <a href="<?= base_url() . 'pembayaran/detail/' . $data->no_pelanggan ?>"><i class="fa fa-eye btn btn-default"></i></a>
                      </td>
                    </tr>
                  <?php } ?> -->
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>