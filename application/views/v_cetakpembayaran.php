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
        <button class="btn btn-primary " data-toggle="modal" data-target="#modal-cetak"> Filter Dan Cetak</button>
      </div>

      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="vertical-align:middle;text-align:center;width:50px" rowspan=3>No</th>
              <th style="vertical-align:middle;text-align:center;width:50px;" rowspan=3>ID</td>
              <th style="vertical-align:middle;text-align:center;width:50px;" rowspan=3>Nama Pelanggan</th>
              <th style="vertical-align:middle; text-align:center;width:50px;" colspan=5>Hasil Pembacaan Meter Pelanggan</th>
              <th style="vertical-align:middle; text-align:center;width:50px;" colspan=5>Tagihan Pelanggan</th>
              <th style="vertical-align:middle;text-align:center;width:50px;" rowspan=3>Tarif </td>
              <th style="vertical-align:middle;text-align:center;width:50px;" rowspan=3>Beban</th>
              <th style="vertical-align:middle; text-align:center;width:50px;" colspan=3>Harga Per Meter</th>

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
            foreach ($cetak as $data) {
            ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $data->no_pelanggan ?></td>
                <td><?= $data->nama_lengkap ?></td>
                <td><?= $data->mawal ?></td>
                <td><?= $data->makhir ?></td>
                <td><?= $data->gol1 ?></td>
                <td><?= $data->gol2 ?></td>
                <td><?= $data->gol3 ?></td>
                <td><?= $data->pemakaian ?></td>
                <td><?= @$total_gol1 = $data->gol1 * $data->h_gol1 ?></td>
                <td><?= @$total_gol2 = $data->gol2 * $data->h_gol2 ?></td>
                <td><?= @$total_gol3 =  $data->gol3 * $data->h_gol3 ?></td>
                <td><?= ($total_gol1 + $total_gol2 + $total_gol3) + $data->biaya_adm ?></td>
                <td><?= $data->golongan ?></td>
                <td><?= $data->biaya_adm ?></td>
                <td><?= $data->h_gol1 ?></td>
                <td><?= $data->h_gol2 ?></td>
                <td><?= $data->h_gol3 ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <div class="modal fade" id="modal-cetak">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Filter Data Cetak Pelanggan</h4>
        </div>
        <div class="modal-body">
          <form target="_blank" role="form" action="<?= base_url('cetak/cetak_pdf') ?>" enctype="multipart/form-data" method="POST">
            <div class="box-body">
              <div class="form-group">
                <label>Pilih Bulan : </label>
                <select name="bulan_rekening" id="bulan_rekening" required>
                  <option value="">Pilih Bulan</option>
                  <?php foreach ($bulan as $perbulan) : ?>
                    <option value="<?= $perbulan->bulan; ?>"><?= $perbulan->nama_bulan; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label>Pilih Tahun : </label>
                <select name="tahun_rekening" id="tahun_rekening" required>
                  <option value="">Pilih Tahun</option>
                  <?php foreach ($tahun as $pertahun) : ?>
                    <option value="<?= $pertahun->tahun; ?>"><?= $pertahun->tahun; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="print" class="btn btn-success ">Cetak</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
  </div>
</div>