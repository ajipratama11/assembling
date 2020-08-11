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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Akun</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Assembling</a></li>
              <li class="breadcrumb-item active">Akun</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Daftar Akun</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              
              <div class="card-body">
                  <?php if($jabatan == 1) { ?>
                <button class="btn btn-success">Tambah Akun</button><br><br>
                  <?php } ?>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
               
                  <td>No</td>
                  <td>Username</td>
                  <td>Password</td>
                  <td>Nama Lengkap</td>
                  <td>Jabatan</td>
                  <td>No HP</td>
                  <td>Aksi</td>
               
                </thead>
                <tbody>
                    <?php $no=1;
                    foreach($user as $s) { ?>
                <tr>
                 <td><?= $no++; ?></td>
                 <td><?= $s->username ?></td>
                 <td><?= $s->password ?></td>
                 <td><?= $s->nama_lengkap ?></td>
                 <td><?= $s->jabatan ?></td>
                 <td><?= $s->no_hp ?></td>
                 <td>
                     <a type="submit" href="" class="btn btn-warning">Edit</a>
                     <a type="submit" href="" class="btn btn-danger">Hapus</a>
                 </td>
                </tr>
                    <?php } ?>
              </table>
            </div>
                <!-- /.card-body -->

                
            <!-- /.card -->

            <!-- Form Element sizes -->
            
            <!-- /.card -->

            
            <!-- /.card -->

            <!-- Input addon -->
            
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
      
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('templates/footer') ?>
</body>
</html>