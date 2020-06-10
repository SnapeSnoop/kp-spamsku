 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Data Tarif

     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li class="active">Tarif</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="box">
       <div class="box-header">
         <button class="btn btn-primary fa fa-plus" data-toggle="modal" data-target="#modal-tambah"> Tambah</button>
       </div>

       <!-- /.box-header -->
       <div class="box-body">
         <table id="example1" class="table table-bordered table-striped">
           <thead>
             <tr>
               <th>No</th>
               <th>No Pelanggan</th>
               <th>Nama Pelanggan</th>
               <th>Golongan</th>
               <th>Meter Awal</th>
               <th>Meter Akhir</th>
               <!-- <th>0 - 10</th>
               <th>11 - 50</th>
               <th> >50 </th> -->
               <th> Total Pemakaian</th>
             </tr>
           </thead>
           <tbody>
             <?php
              $no = 1;
              foreach ($tarif as $data) {
              ?>
               <tr>
                 <td><?= $no++; ?></td>
                 <td><?= $data->no_pelanggan ?></td>
                 <td><?= $data->nama_lengkap ?></td>
                 <td><?= $data->golongan ?></td>
                 <td><?= $data->mawal ?></td>
                 <td><?= $data->makhir ?></td>
                 <!-- <td><?= $data->gol1 ?></td>
                 <td><?= $data->gol2 ?></td>
                 <td><?= $data->gol3 ?></td> -->
                 <td><?= $data->pemakaian ?></td>
               </tr>
             <?php } ?>
           </tbody>
         </table>
       </div>
     </div>
   </section>
 </div>


 <div class="modal fade" id="modal-tambah">
   <div class="modal-dialog" style="width: 1000px;">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title">Tambah Data</h4>
       </div>
       <div class="modal-body">
         <form class="form-horizontal" method="POST" action="<?= base_url() . 'tarif/action_tambah' ?>">
           <div class="box-body">
             <div class="row">
               <div class="col-md-6">
                 <div class="form-group">
                   <label for="inputEmail3" class="col-sm-4 control-label">No Rekening</label>
                   <div class="col-sm-8">
                     <input type="text" class="form-control" name="norekening" id="norekening" placeholder="Masukan Nomor Rekening">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="exampleInputEmail1" class="col-sm-4 control-label">No Pelanggan</label>
                   <div class="col-sm-8">
                     <input type="text" class="form-control" id="no_pelanggan" name="no_pelanggan" placeholder="No Pelanggan" readonly>
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="exampleInputEmail1" class="col-sm-4 control-label">Nama Pelanggan</label>
                   <div class="col-sm-8">
                     <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pelanggan" readonly>
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="exampleInputEmail1" class="col-sm-4 control-label">Golongan</label>
                   <div class="col-sm-8">
                     <input type="hidden" class="form-control" id="idgolongan" name="idgolongan" placeholder="Golongan" readonly>
                     <input type="text" class="form-control" id="golongan" placeholder="Golongan" readonly>
                   </div>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                   <label for="exampleInputEmail1" class="col-sm-4 control-label">Bulan Rekening</label>
                   <div class="col-sm-8">
                     <input type="text" class="form-control datepicker" name="bulan" placeholder="Bulan Rekening">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="exampleInputEmail1" class="col-sm-4 control-label">Menteran Awal</label>
                   <div class="col-sm-8">
                     <input type="text" class="form-control" id="mawal2" name="mawal" placeholder="Meteran Awal">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="exampleInputEmail1" class="col-sm-4 control-label">Menteran Akhir</label>
                   <div class="col-sm-8">
                     <input type="hidden" class="form-control" id="biaya_air" name="biaya_air">
                     <input type="hidden" class="form-control" id="biaya_adm" name="biaya_adm">
                     <input type="text" class="form-control" id="makhir2" name="makhir" placeholder="Meteran Akhir">
                   </div>
                 </div>
               </div>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Simpan</button>
             </div>
           </div>
         </form>
       </div>
     </div>
   </div>
 </div>



 <script src="<?= base_url('bower_components/jquery/dist/jquery.min.js') ?>"></script>

 <script type="text/javascript">
   $(document).ready(function() {
     $('#norekening').on('input', function() {

       var norekening = $(this).val();
       $.ajax({
         type: "POST",
         url: "<?php echo base_url('index.php/tarif/get_data') ?>",
         dataType: "JSON",
         data: {
           norekening: norekening
         },
         cache: false,
         success: function(data) {
           $.each(data, function(idgolongan, no_pelanggan, nama, golongan, air, adm) {
             $('[name="no_pelanggan"]').val(data.no_pelanggan);
             $('[name="nama"]').val(data.nama);
             $('[id="golongan"]').val(data.golongan);
             $('[id="idgolongan"]').val(data.idgolongan);
             $('[id="biaya_air"]').val(data.air);
             $('[id="biaya_adm"]').val(data.adm);
           });
         }
       });
       return false;
     });

   });
 </script>