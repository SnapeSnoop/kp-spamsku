<?php 
  $tanggal= date('Y-m-d');
  $tgl = date('ymmd');
  $rand = rand(10,100);
  $kd = 'PA';
  $kode = $kd.$tgl.$rand;
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
            <form class="form-horizontal" method="POST" action="<?= base_url().'pembayaran/action_tambah' ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No Pelanggan</label>
                  <div class="col-sm-4">
                     <input type="hidden" class="form-control" name="idtarif">
                    <input type="text" class="form-control" name="no_pelanggan" id="no_pelanggan" placeholder="Masukan Nomor Pelanggan">
                  </div>
                </div>
                 <div class="form-group">
                   <label for="exampleInputEmail1" class="col-sm-2 control-label">No rekening</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="no_rekening" readonly>
                  </div>
                </div>
                <div class="form-group">
                   <label for="exampleInputEmail1" class="col-sm-2 control-label">Nama Pelanggan</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="nama_lengkap" readonly>
                  </div>
                </div>
                <div class="form-group">
                   <label for="exampleInputEmail1" class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="pekerjaan" readonly>
                  </div>
                </div>
                <div class="form-group">
                   <label for="exampleInputEmail1" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-4">
                    <textarea type="text" class="form-control" name="alamat" readonly></textarea>
                  </div>
                </div>
                


                 <hr/>
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
                    <input type="text" class="form-control" id="no_pelanggan" name="bulan" readonly>
                  </div>
                </div>
                 <div class="form-group">
                   <label for="exampleInputEmail1" class="col-sm-4 control-label">Menteran Awal</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="mawal" readonly>
                  </div>
                </div>
                 <div class="form-group">
                   <label for="exampleInputEmail1" class="col-sm-4 control-label">Meteran Akhir</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="makhir"  readonly>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                   <label for="exampleInputEmail1" class="col-sm-4 control-label">Pemakaian</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="pakai" readonly >
                  </div>
                </div>
                 <div class="form-group">
                   <label for="exampleInputEmail1" class="col-sm-4 control-label">Biaya Admin</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="biaya_adm" readonly >
                  </div>
                </div>
                 <div class="form-group">
                   <label for="exampleInputEmail1" class="col-sm-4 control-label">Total bayar</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="total_bayar" readonly >
                  </div>
                </div>
               
                </div>
              </div>


              <hr/>
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
              </div>
              </div>
              <!-- /.box-footer -->
            </form>
      </div>
    </section>
</div>

<script src="<?= base_url ('bower_components/jquery/dist/jquery.min.js') ?>"></script>

<script type="text/javascript">
        $(document).ready(function(){
             $('#no_pelanggan').on('input',function(){
                 
                var no_pelanggan=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/pembayaran/get_pelanggan')?>",
                    dataType : "JSON",
                    data : {no_pelanggan: no_pelanggan},
                    cache:false,
                    success: function(data){
                        $.each(data,function(no_pelanggan, no_rekening, nama_lengkap, pekerjaan,alamat,golongan,bulan,mawal,makhir,pakai,biaya_adm,total_bayar,idtarif){
                            $('[name="no_rekening"]').val(data.no_rekening);
                            $('[name="nama_lengkap"]').val(data.nama_lengkap);
                            $('[name="pekerjaan"]').val(data.pekerjaan);
                            $('[name="alamat"]').val(data.alamat);
                            $('[name="golongan"]').val(data.golongan);
                            $('[name="bulan"]').val(data.bulan);
                            $('[name="mawal"]').val(data.mawal);
                            $('[name="makhir"]').val(data.makhir);
                            $('[name="pakai"]').val(data.pakai);
                            $('[name="biaya_adm"]').val(data.biaya_adm);
                            $('[name="total_bayar"]').val(data.total_bayar);
                            $('[name="idtarif"]').val(data.idtarif);
                             
                        });
                         
                    }
                });
                return false;
           });
 
        });
    </script>