 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Data Petugas

     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li class="active">Petugas</li>
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
               <th>Id Petugas</th>
               <th>Nama Petugas</th>
               <th>Tempat/Tanggal Lahir</th>
               <th>Jenis Kelamin</th>
               <th>Alamat</th>
               <th>No Hp</th>
               <th>Email</th>
               <th>Username</th>
               <th>Action</th>
             </tr>
           </thead>
           <tbody>
             <?php
              $no = 1;
              foreach ($kasir as $data) {
              ?>
               <tr>
                 <td><?= $no++; ?></td>
                 <td><?= $data->idptgs ?></td>
                 <td><?= $data->nama_petugas ?></td>
                 <td><?= $data->tempat_lahir . ' ' . $data->tanggal_lahir ?></td>
                 <td><?= $data->jk ?></td>
                 <td><?= $data->alamat ?></td>
                 <td><?= $data->nohp ?></td>
                 <td><?= $data->email ?></td>
                 <td><?= $data->username ?></td>
                 <td>
                   <a style="cursor: pointer;" onclick="select_data(
                          '<?= $data->idptgs ?>',
                          '<?= $data->nama_petugas ?>',
                          '<?= $data->tempat_lahir ?>',
                          '<?= $data->tanggal_lahir ?>',
                          '<?= $data->jk ?>',
                          '<?= $data->alamat ?>',
                          '<?= $data->nohp ?>',
                          '<?= $data->email ?>',
                          '<?= $data->username ?>',
                        )" data-toggle="modal" data-target="#modal-edit"><i class="btn btn-primary fa fa-pencil"></i></a>
                   <a href="<?php echo base_url() . 'kasir/action_hapus/' . $data->idptgs ?>" onClick="return confirm('Apakah anda yakin menghapus data ini ?')"><i class="btn btn-danger fa fa-trash"></i></a>
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
         <h4 class="modal-title">Tambah Data Petugas</h4>
       </div>
       <div class="modal-body">
         <form role="form" action="<?= base_url() . 'kasir/action_tambah' ?>" method="POST">
           <div class="box-body">
             <div class="form-group">
               <label for="exampleInputEmail1">Id Petugas</label>
               <input type="text" class="form-control" id="exampleInputEmail1" name="idptgs" placeholder="Id Petugas">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Nama Lengkap</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="nama" placeholder="Nama Lengkap">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Tempat Lahir</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="tempat" placeholder="Tempat lahir">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Tanggal Lahir</label>
               <input type="text" class="form-control datepicker" id="exampleInputPassword1" name="tgl_lahir">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Jenis Kelamin</label>
               <div>
                 <input type="radio" id="exampleInputPassword1" name="jk" value="Laki-laki" checked>Laki-laki
                 <input type="radio" id="exampleInputPassword1" name="jk" value="Perempuan">Perempuan
               </div>
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Alamat</label>
               <textarea type="text" class="form-control" id="exampleInputPassword1" name="alamat" placeholder="Alamat"></textarea>
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">No Hp</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="nohp" placeholder="No Hp">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Email</label>
               <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Email">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Username</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="username" placeholder="Username">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Password</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
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
         <h4 class="modal-title">Edit Data Petugas</h4>
       </div>
       <div class="modal-body">
         <form role="form" action="<?= base_url() . 'kasir/action_edit' ?>" method="POST">
           <div class="box-body">
             <div class="form-group">
               <label for="exampleInputEmail1">Id Petugas</label>
               <input type="text" class="form-control" id="idptgs" name="idptgs" placeholder="Id Petugas" readonly>
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Nama Lengkap</label>
               <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Tempat Lahir</label>
               <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat lahir">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Tanggal Lahir</label>
               <input type="text" class="form-control datepicker" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal lahir">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Jenis Kelamin</label>
               <div>
                 <input type="radio" id="jk" name="jk" value="Laki-laki" checked>Laki-laki
                 <input type="radio" id="jk" name="jk" value="Perempuan">Perempuan
               </div>
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Alamat</label>
               <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">No Hp</label>
               <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Hp">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Email</label>
               <input type="email" class="form-control" id="email" name="email" placeholder="Email">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Username</label>
               <input type="text" class="form-control" id="username" name="username" placeholder="Username">
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
   function select_data($idptgs, $nama_petugas, $tempat_lahir, $tanggal_lahir, $jk, $alamat, $nohp, $email,$username) {
     $("#idptgs").val($idptgs);
     $("#nama").val($nama_petugas);
     $("#tempat").val($tempat_lahir);
     $("#tgl_lahir").val($tanggal_lahir);
     $("#jk").val($jk);
     $("#alamat").val($alamat);
     $("#nohp").val($nohp);
     $("#email").val($email);
     $("#username").val($username);
   }
 </script>