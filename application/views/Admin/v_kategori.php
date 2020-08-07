<?php $this->load->view('templates/header');
?>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
        $this->load->view('templates/navbar');
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Kategori</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-header" style="background:#2980b9; color:#fff;">List Kategori</h5><br>


                                <button style="margin-bottom: 10px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Tambah Kategori</button>
                                        


                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b>No</b></th>
                                                <th><b>Nama Kategori</b></th>
                                                <th><b>Harga</b></th>
                                                <th><b>Deskripsi</b></th>
                                                <th><b>Aksi</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($kategori as $k) { ?>

                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $k->nama_kategori ?></td>
                                                    <td><?= $k->harga ?></td>
                                                    <td><?= $k->deskripsi ?></td>
                                                    <td>
                                                    <a href="<?php echo base_url('Admin/Galeri/index/'.$k->id_kategori); ?>" class="btn btn-success">Galeri</a>
                                                    <a data-toggle="modal" data-target="#modal-edit<?= $k->id_kategori; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" class="btn btn-warning">Edit</a>
                                                    <a onclick="return confirm('Apakah Anda Ingin Menghapus Data  ?');" href="<?php echo base_url('Admin/Kategori/hapusKategori/'.$k->id_kategori); ?>" class="btn btn-danger">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                
                <?php  foreach($kategori as $row): ?>
                    <div class="row">
                    <div id="modal-edit<?=$row->id_kategori;?>" class="modal fade">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">   </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            
                                <div class="modal-body">
                                    <form action="<?php echo base_url('Admin/Kategori/editKategori/'.$row->id_kategori); ?>" method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-4  control-label col-form-label">Nama Kategori</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" style="border-radius: 10px;" name="id_kategori" class="form-control" id="username" value="<?php echo $row->id_kategori;  ?>" placeholder="Nama Penanggung Jawab" required>
                                                <input type="text" style="border-radius: 10px;" name="nama_kategori" class="form-control" id="username" value="<?php echo $row->nama_kategori;  ?>" placeholder="Nama Penanggung Jawab" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-4  control-label col-form-label">Harga</label>
                                            <div class="col-sm-8">
                                                <input type="text" style="border-radius: 10px;" name="harga" class="form-control" id="password" value="<?php echo $row->harga  ?>" placeholder="Nama Penanggung Jawab" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-4  control-label col-form-label">Deskripsi</label>
                                            <div class="col-sm-8">
                                                <textarea style="width: 300px; height:90px;" name="deskripsi" placeholder="Deskripsi" required><?php echo $row->deskripsi  ?></textarea>
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    <?php endforeach; ?>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Kategori</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url('Admin/Kategori/tambahKategori'); ?>" method="post" enctype="multipart/form-data">
                             
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-4  control-label col-form-label">Nama Kategori</label>
                                    <div class="col-sm-8">
                                        <input type="text" style="border-radius: 10px;" name="nama_kategori" class="form-control" id="username" placeholder="Nama Kategori" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-4  control-label col-form-label">Harga</label>
                                    <div class="col-sm-8">
                                        <input type="number" style="border-radius: 10px;" name="harga" class="form-control" id="password" placeholder="Harga" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-4  control-label col-form-label">Deskripsi</label>
                                    <div class="col-sm-8">
                                        <textarea style="width: 300px; height:90px;" name="deskripsi" placeholder="Deskripsi" required></textarea>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                COPYRIGHT © BIKEA TECHNOCRAFT 2019
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url() ?>vendor/admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url() ?>vendor/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>vendor/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url() ?>vendor/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url() ?>vendor/admin/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url() ?>vendor/admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url() ?>vendor/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url() ?>vendor/admin/dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="<?= base_url() ?>vendor/admin/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?= base_url() ?>vendor/admin/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="<?= base_url() ?>vendor/admin/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>