<?php
$tanggal = date('Y-m-d');
$tgl = date('ymmd');
$rand = rand(10, 100) + 1;
$kd = 'PA';
$kode = $kd . $tgl . $rand;
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Pembayaran
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Pelanggan</li>
    </ol>
  </section>

  <section class="content">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title"> Pembayaran </h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" method="POST" action="<?= base_url() . 'pembayaran/action_tambah' ?>">
        <div class="box-body">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">ID Tarif</label>
                <div class="col-sm-8">
                  <select id="id_tarif" class="form-control" name="id_tarif">
                    <option value="0">Silahkan pilih</option>
                    <?php foreach ($tarif as $tarif) : ?>
                      <option value="<?= $tarif->id_tarif ?>">Kode Pemakaian <?= $tarif->id_tarif ?> - <?= $tarif->nama_lengkap ?>(<?= $tarif->no_pelanggan ?>)</option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="col-sm-4 control-label">No Pelanggan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="no_pelanggan" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="col-sm-4 control-label">No rekening</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="no_rekening" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="col-sm-4 control-label">Nama Pelanggan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nama_lengkap" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="col-sm-4 control-label">Pekerjaan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="pekerjaan" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="col-sm-4 control-label">Alamat</label>
                <div class="col-sm-8">
                  <textarea type="text" class="form-control" name="alamat" readonly></textarea>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1" class="col-sm-4 control-label">Pemakaian</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="pemakaian" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Harga GOL1</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="hgol1" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Harga GOL2</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="hgol2" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Harga GOL3</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="hgol3" readonly>
                </div>
              </div>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Golongan</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="golongan" id="norekening" readonly="">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="col-sm-4 control-label">Bulan Rekening</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="bulan" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="col-sm-4 control-label">Menteran Awal</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="mawal" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="col-sm-4 control-label">Meteran Akhir</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="makhir" readonly>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1" class="col-sm-4 control-label">Pemakaian</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="pemakaian" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">0 - 10</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="gol1" readonly>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="sum_gol1" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">11 - 50</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="gol2" readonly>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="sum_gol2" readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">> 50</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="gol3" readonly>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="sum_gol3" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="col-sm-4 control-label">Biaya Admin</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="biaya_adm" readonly>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" class="col-sm-4 control-label">Total bayar</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="total_bayar" readonly>
                </div>
              </div>
            </div>
          </div>
          <hr />
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Kode</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="kode" id="inputEmail3" value="<?= $kode ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tanggal pembayaran</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="tgl" id="inputEmail3" value="<?= $tanggal ?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Jumlah pembayaran</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="jumlah" id="inputEmail3" placeholder="Jumlah bayar">
            </div>
          </div>
          <button type="submit" class="btn btn-info pull">OKE</button>
        </div>
      </form>
    </div>
  </section>
</div>

<script src="<?= base_url('bower_components/jquery/dist/jquery.min.js') ?>"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#id_tarif').on('change', function() {
      let id_tarif = $(this).val();
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('index.php/pembayaran/get_transaction') ?>",
        dataType: "JSON",
        data: {
          id_tarif: id_tarif
        },
        cache: false,
        success: function(data) {
          $.each(data, function() {
            if (data[0].gol1 != 0) {
              sum_gol_1 = parseInt(data[0].gol1 * data[0].hgol1);
            } else {
              sum_gol_1 = 0;
            }
            if (data[0].gol2 != 0) {
              sum_gol_2 = parseInt(data[0].gol2 * data[0].hgol2);
            } else {
              sum_gol_2 = 0;
            }
            if (data[0].gol3 != 0) {
              sum_gol_3 = parseInt(data[0].gol3 * data[0].hgol3);
            } else {
              sum_gol_3 = 0;
            }
            total_biaya = (sum_gol_1 + sum_gol_2 + sum_gol_3) + parseInt(data[0].biaya_adm);
            $('[name="no_pelanggan"]').val(data[0].no_pelanggan);
            $('[name="no_rekening"]').val(data[0].no_rekening);
            $('[name="nama_lengkap"]').val(data[0].nama_lengkap);
            $('[name="pekerjaan"]').val(data[0].pekerjaan);
            $('[name="alamat"]').val(data[0].alamat);
            $('[name="golongan"]').val(data[0].golongan);
            $('[name="bulan"]').val(data[0].bulan_rekening);
            $('[name="mawal"]').val(data[0].mawal);
            $('[name="makhir"]').val(data[0].makhir);
            $('[name="pemakaian"]').val(data[0].pemakaian);
            $('[name="biaya_adm"]').val(data[0].biaya_adm);
            $('[name="total_bayar"]').val(total_biaya);
            $('[name="idtarif"]').val(data[0].idtarif);
            $('[name="gol1"]').val(parseInt(data[0].gol1));
            $('[name="gol2"]').val(parseInt(data[0].gol2));
            $('[name="gol3"]').val(parseInt(data[0].gol3));
            $('[name="hgol1"]').val(parseInt(data[0].hgol1));
            $('[name="hgol2"]').val(parseInt(data[0].hgol2));
            $('[name="hgol3"]').val(parseInt(data[0].hgol3));
            $('[name="sum_gol1"]').val('Rp ' + sum_gol_1);
            $('[name="sum_gol2"]').val('Rp ' + sum_gol_2);
            $('[name="sum_gol3"]').val('Rp ' + sum_gol_3);
          });
        }
      });
      return false;
    });
  });
</script>