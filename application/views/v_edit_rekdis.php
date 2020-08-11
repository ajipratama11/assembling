<?php $this->load->view('templates/head'); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view('templates/navbar'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('templates/asside'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Tambah Rekam Medis</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Tambah Rekam Medis</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Isikan Data</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" action="<?= base_url('Data/edit') ?>" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No Rekam Medis</label>
                                            <input type="text" name="no_rekdis" value="<?= $rekdis->no_rekdis ?>" class="form-control" id="exampleInputEmail1" placeholder="Isi No Rekam Medis">
                                            <?= form_error('no_rekdis', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nama Pasien</label>
                                            <input type="text" class="form-control" name="nama_pasien" value="<?= $rekdis->nama_pasien ?>" id="exampleInputPassword1" placeholder="Isi Nama Pasien">
                                            <?= form_error('nama_pasien', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tanggal Lahir</label>
                                            <input type="date" class="form-control" value="<?= $rekdis->tgl_lahir ?>" name="tgl_lahir" id="exampleInputPassword1" placeholder="Isi Nama Pasien">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-control">
                                                <option>--Jenis Kelamin--</option>
                                                <option value="Laki-laki" <?php if ($rekdis->jenis_kelamin == "Laki-laki") {
                                                                                echo "selected=\"selected\"";
                                                                            } ?>>Laki-laki</option>
                                                <option value="Perempuan" <?php if ($rekdis->jenis_kelamin == "Perempuan") {
                                                                                echo "selected=\"selected\"";
                                                                            } ?>>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Alamat</label>
                                            <input type="text" class="form-control" value="<?= $rekdis->alamat ?>" name="alamat" id="exampleInputPassword1" placeholder="Isi Alamat">
                                            <input type="hidden" class="form-control" value="<?= $rekdis->status ?>" name="status" id="exampleInputPassword1" placeholder="Isi Alamat">
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-update"> Update</i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php $this->load->view('templates/footer') ?>
</body>

</html>