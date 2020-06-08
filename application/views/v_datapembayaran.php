 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pembayaran
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pembayaran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No Rekening</th>
                    <th>No Pelanggan</th>
                    <th>Nama pelanggan</th>
                    <th>Golongan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                   <?php 
                    $no=1;
                    foreach($databayar as $data){ 
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $data->no_rekening ?></td>
                      <td><?= $data->no_pelanggan ?></td>
                      <td><?= $data->nama_lengkap ?></td>
                      <td><?= $data->golongan ?></td>
                      <td>
                        <a href="<?= base_url().'pembayaran/detail/'. $data->no_pelanggan ?>"><i class="fa fa-eye btn btn-default"></i></a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </div>
