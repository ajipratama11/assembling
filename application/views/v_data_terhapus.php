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
                            <?php foreach ($restore as $r) : ?>
                                <tr>
                                    <td><?= $r->no_rekdis ?></td>
                                    <td><?= $r->nama_pasien ?>...</td>
                                    <td><?= $r->tgl_lahir ?></>
                                    <td><?= $r->jenis_kelamin ?></td>
                                    <td><?= $r->alamat ?></td>
                                    <td>
                                      <a type="button" href="<?= base_url('Data/restore/' . $r->no_rekdis);   ?>" onclick="return confirm('Apakah Anda Ingin Mengembalikan Data  ?');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus" class="btn btn-small"><i class="fa fa-edit"></i> Restore</a> |
                                      <a type="button" href="<?= base_url('Data/hapusData/' . $r->no_rekdis);   ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Permanen  ?');" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus" class="btn btn-small text-danger"><i class="fa fa-edit"></i> Hapus Permanen</a>
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