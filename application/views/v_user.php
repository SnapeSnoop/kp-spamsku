<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data User Aplikasi

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Users</li>
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
                            <th>No telepon</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($user as $data) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data->nama ?></td>
                                <td><?= $data->notlp ?></td>
                                <td><?= $data->email ?></td>
                                <td>
                                    <a style="cursor: pointer;" onclick="select_data(
                                        '<?= $data->id ?>',
                                        '<?= $data->nama ?>',
                                        '<?= $data->notlp ?>',
                                        '<?= $data->email ?>'
                                        )">
                                    <a href="<?php echo base_url() . 'user/action_hapus/' . $data->id ?>" onClick="return confirm('Apakah anda yakin menghapus data ini ?')"><i class="btn btn-danger fa fa-trash"></i></a>
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
                <h4 class="modal-title">Tambah Data User Mobile</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url() . 'user/action_tambah' ?>" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">No Telepon</label>
                            <textarea type="text" class="form-control" id="exampleInputPassword1" name="notlp" placeholder="Notlp"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <textarea type="text" class="form-control" id="exampleInputPassword1" name="email" placeholder="Email"></textarea>
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
                <h4 class="modal-title">Edit Data User Mobile</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url() . 'user/action_edit' ?>" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">No Telepon</label>
                            <textarea type="text" class="form-control" id="notlp" name="notlp" placeholder="Notlp"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <textarea type="text" class="form-control" id="email" name="email" placeholder="Email"></textarea>
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
    function select_data($id, $nama, $notlp, $email) {
        $("#id").val($id);
        $("#nama").val($nama);
        $("#notlp").val($notlp);
        $("#email").val($email);
    }
</script>