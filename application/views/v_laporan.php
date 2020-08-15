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
                            <h1 class="m-0 text-dark">Tabel Cek Kelengkapan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Tabel Cek Kelengkapan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Tabel Data Cek Kelengkapan</h5>
                    <h5><?= $this->session->flashdata('success') ?></h5>
                </div>
                <!-- /.content-header -->
                <div class="card-body">
                    <br>
                    <br>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No Transaksi</th>
                                <th>No Rekam medis</th>
                                <th>Nama Form</th>
                                <th>Keterangan Lengkap/Tidak Lengkap</th>
                                <th>Jenis Layanan</th>
                                <th>Asal Ruangan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($laporan as $l) : ?>
                                <tr>
                                    <td><?= $l->no_transaksi ?></td>
                                    <td><?= $l->no_rekdis ?></td>
                                    <td><?= $l->nama_pasien ?></td>
                                    <td><?= $l->status ?></td>
                                    <td><?= $l->jenis_pelayanan ?></td>
                                    <td><?= $l->asal_ruangan ?></td>
                                    <td>
                                        <a href="<?php echo site_url('Laporan/update_cekkel/' . $l->no_transaksi) ?>" class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="<?php echo base_url('Data/hapusSementara/' . $l->no_transaksi); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data  ?');" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
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