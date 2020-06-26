<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Data Konfirmasi Pembayaran Pelanggan
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li class="active">Konfirmasi Pembayaran</li>
     </ol>
   </section>
   <!-- Main content -->
   <section class="content">
     <div class="box">
     <div class="box-header">
         <button class="btn btn-primary fa fa-plus" data-toggle="modal" data-target="#modal-default"> Tambah pembayaran manual</button>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <table id="example1" class="table table-bordered table-striped">
           <thead>
             <tr>
               <th>No</th>
               <th>ID</th>
               <th>Nominal</th>
               <th>Kode bayar</th>
               <th>Tanggal Transaksi</th>
               <th>Bukti Transfer</th>
               <th>Status</th>
               <th>Action</th>
             </tr>
           </thead>
           <tbody>
             <?php
              $no = 1;
              foreach ($konfirmasi as $data) {
              ?>
               <tr>
                 <td><?= $no++; ?></td>
                 <td><?= $data->id_pelanggan ?></td>
                 <td><?= $data->kode_bayar ?></td>
                 <td><?= $data->nominal ?></td>
                 <td><?= $data->tanggal_transaksi ?></td>
                 <td><a target="_blank" href="<?= base_url('upload/bukti/'. $data->bukti_tf) ?>">Gambar</a></td>
                 <td><?= $status = $data->status == 1 ? 'Terverivikasi' :  'Belum verifikasi' ?></td>
                <?php if($data->status == 0) :?>   
                 <td>
                   <a href="<?= base_url('konfirmasi/accept/'.$data->id) ?>" class="btn btn-xs btn-primary">Verifikasi</a>
                   <!-- <a href="<?= base_url('konfirmasi/reject/'.$data->id) ?>" class="btn btn-xs btn-warning">Tolak</a> -->
                   <a href="<?= base_url('konfirmasi/delete/'.$data->id) ?>" class="btn btn-xs btn-danger">Hapus</a>
                </td>
                <?php else: ?>
                  <td>
                    <a href="<?= base_url('konfirmasi/delete/'.$data->id) ?>" class="btn btn-xs btn-danger">Hapus</a>
                  </td>
                <?php endif; ?>
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
         <h4 class="modal-title">Manual konfirmasi pembayaran</h4>
       </div>
       <div class="modal-body">
         <form role="form" action="<?= base_url() . 'konfirmasi/action_tambah' ?>" method="POST" enctype="multipart/form-data">
           <div class="box-body">
             <div class="form-group">
               <label for="exampleInputEmail1">ID Pelanggan</label>
               <select name="id_pelanggan" class="form-control">
                 <option value="">-- Pilih --</option>
                <?php foreach($pelanggan as $list): ?>
                    <option value="<?= $list->no_pelanggan ?>"><?= $list->no_pelanggan ?> - <?= $list->nama_lengkap ?></option>
                <?php endforeach ; ?>
              </select>
             </div>
             <div class="form-group">
               <label>Kode Bayar</label>
               <input type="text" name="kode_bayar" class="form-control">
             </div>
             <div class="form-group">
               <label>Nominal</label>
               <input type="text" name="nominal" class="form-control">
             </div>
             <div class="form-group">
               <label>Tanggal Transaksi</label>
               <input type="date" name="tanggal_transaksi" class="form-control">
             </div>
             <div class="form-group">
               <label>Bukti Transfer</label>
               <input type="file" name="bukti_tf" class="form-control">
             </div>
             <div class="form-group">
               <label>Status</label>
               <select name="status" class="form-control">
                 <option value="1">Verifikasi</option>
                 <option value="0">Tolak</option>
               </select>
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
   function select_data($nama, $id_pelanggan, $no_rekening, $nominal, $tanggal_transaksi, $bukti_tf, $bank, $status) {
     $("#nama").val($nama);
     $("#id_pelanggan").val($id_pelanggan);
     $("#no_rekening").val($no_rekening);
     $("#nominal").val($nominal);
     $("#tanggal_transaksi").val($tanggal_transaksi);
     $("#bukti_tf").val($bukti_tf);
     $("#bank").val($bank);
     $("#status").val($status);
   }
 </script>