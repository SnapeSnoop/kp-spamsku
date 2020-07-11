<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Pengaduan

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Pengaduan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <button class="btn btn-primary fa fa-plus" data-toggle="modal" data-target="#modal-default"> Tambah</button>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Keluhan</th>
                            <th>Status Pengerjaan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pengaduan as $data) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data->nama ?></td>
                                <td><?= $data->alamat ?></td>
                                <td><?= $data->tanggal ?></td>
                                <td><?= $data->keluhan ?></td>
                                <td><?= $data->status ?></td>
                                <td>
                                    <a style="cursor: pointer;" onclick="select_data(
                                        '<?= $data->id ?>',
                                        '<?= $data->nama ?>',
                                        '<?= $data->alamat ?>',
                                        '<?= $data->tanggal ?>',
                                        '<?= $data->keluhan ?>',
                                        '<?= $data->status ?>'
                                        )">
                                        <a href="<?php echo base_url() . 'pengaduan/action_hapus/' . $data->id ?>" onClick="return confirm('Apakah anda yakin menghapus data ini ?')"><i class="btn btn-danger fa fa-trash"></i></a>
                                </td>
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
                <h4 class="modal-title">Tambah Data Pengaduan</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url() . 'pengaduan/action_tambah' ?>" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <textarea type="text" class="form-control" id="exampleInputPassword1" name="alamat" placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tanggal</label>
                            <input type="text" class="form-control datepicker" name="tanggal" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Keluhan</label>
                            <textarea type="text" class="form-control" id="exampleInputPassword1" name="keluhan" placeholder="Keluhan"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">-- Pilih Status --</option>
                                <option value="menunggu">Menunggu</option>
                                <option value="dikerjakan">Dikerjakan</option>
                                <option value="selesai">Selesai</option>
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


<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data Pengaduan</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url() . 'pengaduan/action_edit' ?>" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tanggal</label>
                            <input type="text" class="form-control datepicker" id="tanggal" name="tanggal" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Keluhan</label>
                            <textarea type="text" class="form-control" id="keluhan" name="keluhan" placeholder="Keluhan"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">-- Pilih Status --</option>
                                <option value="Menunggu">Menunggu</option>
                                <option value="Dikerjakan">Dikerjakan</option>
                                <option value="Selesai">Selesai</option>
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
    function select_data($id, $nama, $alamat, $tanggal, $keluhan, $status) {
        $("#id").val($id);
        $("#nama").val($nama);
        $("#alamat").val($alamat);
        $("#tanggal").val($tanggal);
        $("#keluhan").val($keluhan);
        $("#status").val($status);
    }
</script>