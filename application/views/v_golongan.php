 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Data Golongan

     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li class="active">Golongan</li>
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
               <th>Tarif</th>
               <th>Gol1</th>
               <th>Gol2</th>
               <th>Gol3</th>
               <th>Biaya Beban</th>
               <th>Action</th>
             </tr>
           </thead>
           <tbody>
             <?php
              $no = 1;
              foreach ($golongan as $data) {
              ?>
               <tr>
                 <td><?= $no++; ?></td>
                 <td><?= $data->golongan ?></td>
                 <td><?= $data->gol1 ?></td>
                 <td><?= $data->gol2 ?></td>
                 <td><?= $data->gol3 ?></td>
                 <td><?= $data->biaya_adm ?></td>
                 <td>
                   <a style="cursor: pointer;" onclick="select_data(
                          '<?= $data->idgolongan ?>',
                          '<?= $data->golongan ?>',
                          '<?= $data->gol1 ?>',
                          '<?= $data->gol2 ?>',
                          '<?= $data->gol3 ?>',
                          '<?= $data->biaya_adm ?>'
                        )"><i data-toggle="modal" data-target="#modal-edit" class="btn btn-primary fa fa-pencil"></i></a>
                   <a href="<?php echo base_url() . 'golongan/action_hapus/' . $data->idgolongan ?>" onClick="return confirm('Apakah anda yakin menghapus data ini ?')"><i class="btn btn-danger fa fa-trash"></i></a>
                 </td>
               </tr>
             <?php } ?>
           </tbody>
         </table>
       </div>
     </div>
   </section>
 </div>


 <div class="modal fade" id="modal-tambah">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title">Tambah Data</h4>
       </div>
       <div class="modal-body">
         <form role="form" action="<?= base_url() . 'golongan/action_tambah' ?>" method="POST">
           <div class="box-body">
             <div class="form-group">
               <label for="exampleInputEmail1">Tarif</label>
               <input type="text" class="form-control" id="exampleInputEmail1" name="golongan" placeholder="Tarif">
             </div>
             <div class="form-group">
               <label for="exampleInputEmail1">Gol1</label>
               <input type="text" class="form-control" id="exampleInputEmail1" name="gol1" placeholder="Golongan 1">
             </div>
             <div class="form-group">
               <label for="exampleInputEmail1">Gol2</label>
               <input type="text" class="form-control" id="exampleInputEmail1" name="gol2" placeholder="Golongan 2">
             </div>
             <div class="form-group">
               <label for="exampleInputEmail1">Gol3</label>
               <input type="text" class="form-control" id="exampleInputEmail1" name="gol2" placeholder="Golongan 3">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Biaya Beban</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="biayaadm" placeholder="Biaya Beban">
             </div>
           </div>

           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Simpan</button>
           </div>
         </form>
       </div>
     </div>
     <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
 </div>

 <div class="modal fade" id="modal-edit">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title">Edit Data</h4>
       </div>
       <div class="modal-body">
         <form role="form" action="<?= base_url() . 'golongan/action_edit' ?>" method="POST">
           <div class="box-body">
             <div class="form-group">
               <label for="exampleInputEmail1">Tarif</label>
               <input type="hidden" class="form-control" id="idgolongan" name="idgolongan">
               <input type="text" class="form-control" id="golongan" name="golongan" placeholder="Tarif">
             </div>
             <div class="form-group">
               <label for="exampleInputEmail1">Gol1</label>
               <input type="text" class="form-control" id="gol1" name="gol1" placeholder="Golongan 1">
             </div>
             <div class="form-group">
               <label for="exampleInputEmail1">Gol2</label>
               <input type="text" class="form-control" id="gol2" name="gol2" placeholder="Golongan 2">
             </div>
             <div class="form-group">
               <label for="exampleInputEmail1">Gol3</label>
               <input type="text" class="form-control" id="gol3" name="gol3" placeholder="Golongan 3">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Biaya Beban</label>
               <input type="text" class="form-control" id="biayaadm" name="biayaadm" placeholder="Biaya Beban">
             </div>
           </div>

           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Simpan</button>
           </div>
         </form>
       </div>
     </div>
     <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
 </div>


 <script type="text/javascript">
   function select_data($idgolongan, $golongan, $gol1, $gol2, $gol3, $biaya_air, $biaya_adm) {
     $('#idgolongan').val($idgolongan);
     $('#golongan').val($golongan);
     $('#gol1').val($gol1);
     $('#gol2').val($gol2);
     $('#gol3').val($gol3);
     $('#biaya_air').val($biaya_air);
     $('#biayaadm').val($biaya_adm);
   }
 </script>