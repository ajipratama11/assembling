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
                                <?php $jabatan = $this->session->userdata('jabatan'); ?>
                                <?php if ($jabatan == 1) { ?>
                                <th>Opsi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($restore as $l) : ?>
                                <tr>
                                    <td><?= $l->no_transaksi ?></td>
                                    <td><?= $l->no_rekdis ?></td>
                                    <td><?= $l->nama_pasien ?></td>
                                    <td><?= $l->status ?></td>
                                    <td><?= $l->jenis_pelayanan ?></td>
                                    <td><?= $l->asal_ruangan ?></td>
                                    <?php if ($jabatan == 1) { ?>
                                    <td>
                                        <a type="button" href="<?= base_url('Laporan/restore/' . $l->no_transaksi);   ?>" onclick="return confirm('Apakah Anda Ingin Mengembalikan Data  ?');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus" class="btn btn-small text-success"><i class="fa fa-undo"></i></i> Restore</a> |
                                        <a href="<?php echo base_url('Laporan/hapus_cek_kelengkapan/' . $l->no_transaksi); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data  ?');" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
                                    </td>
                                    <?php } ?>
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