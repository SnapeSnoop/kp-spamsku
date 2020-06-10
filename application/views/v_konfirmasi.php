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
       </div>

       <!-- /.box-header -->
       <div class="box-body">
         <table id="example1" class="table table-bordered table-striped">
           <thead>
             <tr>
               <th>No</th>
               <th>Nama</th>
               <th>Id Pelanggan</th>
               <th>No Rekening</th>
               <th>Nominal</th>
               <th>Tanggal Transaksi</th>
               <th>Bukti Transfer</th>
               <th>Nama Bank</th>
               <th>Status</th>
               <?php if ($this->session->userdata('akses') == "1") { ?>
                 <th>Action</th>
               <?php } ?>
             </tr>
           </thead>
           <tbody>
             <?php
              $no = 1;
              foreach ($konfirmasi as $data) {
              ?>
               <tr>
                 <td><?= $no++; ?></td>
                 <td><?= $data->nama ?></td>
                 <td><?= $data->id_pelanggan ?></td>
                 <td><?= $data->no_rekening ?></td>
                 <td><?= $data->nonimal ?></td>
                 <td><?= $data->tanggal_transaksi ?></td>
                 <td><?= $data->bukti_tf ?></td>
                 <td><?= $data->bank ?></td>
                 <td><?= $data->status ?></td>
                 <?php if ($this->session->userdata('akses') == "1") { ?>
                   <td>
                     <a style="cursor: pointer;" onclick="select_data(
                          '<?= $data->nama ?>',
                          '<?= $data->id_pelanggan ?>',
                          '<?= $data->no_rekening ?>',
                          '<?= $data->nominal ?>',
                          '<?= $data->tanggal_transaksi ?>',
                          '<?= $data->bukti_tf ?>',
                          '<?= $data->bank ?>',
                          '<?= $data->status ?>'
                        )"><i data-toggle="modal" data-target="#modal-edit" class="btn btn-primary fa fa-pencil"></i></a>
                     <a href="<?php echo base_url() . 'pelanggan/action_hapus/' . $data->id_pelanggan ?>" onClick="return confirm('Apakah anda yakin menghapus data ini ?')"><i class="btn btn-danger fa fa-trash"></i></a>
                   </td><?php } ?>
               </tr>
             <?php } ?>
           </tbody>
         </table>
       </div>
     </div>
   </section>
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