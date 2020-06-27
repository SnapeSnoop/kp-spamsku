 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Data Pelanggan
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li class="active">Pelanggan</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="box">
       <div class="box-header">
         <button class="btn btn-primary fa fa-plus" data-toggle="modal" data-target="#modal-default"> Tambah</button>
         <button class="btn btn-success fa fa-file" data-toggle="modal" data-target="#modal-import"> Impor Berkas</button>
       </div>

       <!-- /.box-header -->
       <div class="box-body">
         <table id="example1" class="table table-bordered table-striped">
           <thead>
             <tr>
               <th>No</th>
               <th>ID Pelanggan</th>
               <th>Golongan</th>
               <th>Nama</th>
               <!-- <th>Tempat/Tanggal Lahir</th>
               <th>alamat</th>
               <th>Pekerjaan</th> -->
               <?php if ($this->session->userdata('akses') == "1") { ?>
                 <th>Action</th>
               <?php } ?>
             </tr>
           </thead>
           <tbody>
             <?php
              $no = 1;
              foreach ($pelanggan as $data) {
              ?>
               <tr>
                 <td><?= $no++; ?></td>
                 <td><?= $data->no_pelanggan ?></td>
                 <td><?= $data->golongan ?></td>
                 <td><?= $data->nama_lengkap ?></td>
                 <!-- <td><?= $data->tempat_lahir . ' ' . $data->tanggal_lahir ?></td>
                 <td><?= $data->alamat ?></td>
                 <td><?= $data->pekerjaan ?></td> -->
                 <?php if ($this->session->userdata('akses') == "1") { ?>
                   <td>
                     <a style="cursor: pointer;" onclick="select_data(
                          '<?= $data->no_pelanggan ?>',
                          '<?= $data->no_rekening ?>',
                          '<?= $data->nama_lengkap ?>',
                          '<?= $data->tempat_lahir ?>',
                          '<?= $data->tanggal_lahir ?>',
                          '<?= $data->alamat ?>',
                          '<?= $data->pekerjaan ?>'
                        )"><i data-toggle="modal" data-target="#modal-edit" class="btn btn-primary fa fa-pencil"></i></a>
                     <a href="<?php echo base_url() . 'pelanggan/action_hapus/' . $data->no_pelanggan ?>" onClick="return confirm('Apakah anda yakin menghapus data ini ?')"><i class="btn btn-danger fa fa-trash"></i></a>
                   </td><?php } ?>
               </tr>
             <?php } ?>
           </tbody>
         </table>
       </div>
     </div>
   </section>
 </div>
 <div class="modal fade" id="modal-default">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title">Tambah Data Pelanggan</h4>
       </div>
       <div class="modal-body">
         <form role="form" action="<?= base_url() . 'pelanggan/action_tambah' ?>" method="POST">
           <div class="box-body">
             <div class="form-group">
               <label for="exampleInputEmail1">ID Pelanggan</label>
               <input type="text" class="form-control" id="exampleInputEmail1" name="no_pelanggan" placeholder="Id pelanggan">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">No Rekening</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="no_rekening" placeholder="No Rekening">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Nama Lengkap</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="nama" placeholder="Nama Lengkap">
             </div>
             <!-- <div class="form-group">
               <label for="exampleInputPassword1">Tempat Lahir</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="tempat" placeholder="Tempat lahir">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Tanggal Lahir</label>
               <input type="text" class="form-control datepicker" name="tgl_lahir" placeholder="Tempat lahir">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Alamat</label>
               <textarea type="text" class="form-control" id="exampleInputPassword1" name="alamat" placeholder="Alamat"></textarea>
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Pekerjaan</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="pekerjaan" placeholder="Pekerjaan">
             </div> -->
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

 <div class="modal fade" id="modal-import">
 <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title">Impor berkas pelanggan</h4>
       </div>
       <div class="modal-body">
         <form role="form" action="<?= base_url('excell/importExcel') ?>" enctype="multipart/form-data" method="POST">
           <div class="box-body">
             <div class="form-group">
               <label>Upload Berkas</label>
               <input type="file" class="form-control" name="file" placeholder="Berkas">
             </div>
             <div class="form-group">
               <label>Pastikan memakai template di bawah ini :</label>
               <br>
               <a href="<?= base_url('sample/Template.xlsx') ?>" class="btn btn-success" download>Unduh Template excel</a>
             </div>
           </div>

           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-success">Impor Berkas</button>
           </div>
         </form>
       </div>
     </div>
     <!-- /.modal-content -->
   </div>
 </div>
 <div class="modal fade" id="modal-edit">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title">Edit Data Pelanggan</h4>
       </div>
       <div class="modal-body">
         <form role="form" action="<?= base_url() . 'pelanggan/action_edit' ?>" method="POST">
           <div class="box-body">
             <div class="form-group">
               <label for="exampleInputEmail1">ID Pelanggan</label>
               <input type="text" class="form-control" id="nopelanggan" name="no_pelanggan" placeholder="Id pelanggan">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">No Rekening</label>
               <input type="text" class="form-control" id="norekening" name="no_rekening" placeholder="No Rekening">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Nama Lengkap</label>
               <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
             </div>
             <!-- <div class="form-group">
               <label for="exampleInputPassword1">Tempat Lahir</label>
               <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat lahir">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Tanggal Lahir</label>
               <input type="text" class="form-control datepicker" id="tgl_lahir" name="tgl_lahir" placeholder="Tempat lahir">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Alamat</label>
               <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Pekerjaan</label>
               <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
             </div>      -->
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
   function select_data($no_pelanggan, $no_rekening, $nama_lengkap, $tempat_lahir, $tanggal_lahir, $alamat, $pekerjaan) {
     $("#nopelanggan").val($no_pelanggan);
     $("#norekening").val($no_rekening);
     $("#nama").val($nama_lengkap);
     $("#tempat").val($tempat_lahir);
     $("#tgl_lahir").val($tanggal_lahir);
     $("#alamat").val($alamat);
     $("#pekerjaan").val($pekerjaan);
   }
 </script>