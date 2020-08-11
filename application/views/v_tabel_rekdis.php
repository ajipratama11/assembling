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
                            <h1 class="m-0 text-dark">Tabel Rekam Medis</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Tabel Rekam Medis</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Tabel Data Rekam Medis</h5>
                    <h5><?= $this->session->flashdata('success') ?></h5>
                </div>
                <!-- /.content-header -->
                <div class="card-body">
                    <a href="<?= base_url('Data/add_rekdis') ?>" class="btn btn-success">Tambah Data</a>
                    <br>
                    <br>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No Rekdis</th>
                                <th>Nama Pasien</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rekdis as $r) : ?>
                                <tr>
                                    <td><?= $r->no_rekdis ?></td>
                                    <td><?= $r->nama_pasien ?></td>
                                    <td><?= $r->tgl_lahir ?></>
                                    <td><?= $r->jenis_kelamin ?></td>
                                    <td><?= $r->alamat ?></td>
                                    <td>
                                        <a href="<?php echo site_url('Data/edit/' . $r->no_rekdis) ?>" class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="<?php echo base_url('Data/hapusSementara/' . $r->no_rekdis); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data  ?');" class="btn btn-small text-danger"><i class="fa fa-edit"></i> Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('templates/footer') ?>
</body>

</html>