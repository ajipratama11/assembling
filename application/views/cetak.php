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
                    <div class="col">
                        <div class="row">
                            <img src="<?= base_url() ?>assets/admin/images/ch.png" width="100" height="100">
                            <h5 class="card-title" style="margin-left: 30%; margin-top: 30px;">Rumah Sakit Citra Husada Jember</h5>
                            <br>
                        </div>
                    </div>
                </div>
                <!-- /.content-header -->
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No Transaksi</th>
                                <th>No Rekam medis</th>
                                <th>Nama Form</th>
                                <th>Keterangan Lengkap/Tidak Lengkap</th>
                                <th>Jenis Layanan</th>
                                <th>Asal Ruangan</th>
                                <th>Catatan</th>
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
                                    <td><?= $l->catatan ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('templates/footer') ?>
    <script>
        window.print();
    </script>
</body>

</html>