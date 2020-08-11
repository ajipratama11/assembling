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
              <li class="breadcrumb-item"><a href="#">Akun</a></li>
              <li class="breadcrumb-item active">Edit Akun</li>
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
                <h3 class="card-title">Form Edit Akun</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body col-md-4">
                <?= $this->session->flashdata('message'); ?>
              </div>
              <form action="<?php echo base_url('Akun/editAkun/'.$akun->id_user); ?>" method="post" enctype="multipart/form-data">
                <div class="card-body col-md-12">
                  <div class="form-group col-md-4">
                      <label for="exampleInputEmail1">Username</label>
                    
                      <input type="text" class="form-control" name="username" value="<?= $akun->username ?>" id="exampleInputEmail1" placeholder="Username">
                  </div>
                    <input type="hidden" value="<?= $akun->password ?>" name="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
              
                
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" value="<?= $akun->nama_lengkap ?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Jabatan</label>
                    <select name="id_jabatan" class="form-control">
                    <?php 
                    $jabatan = $this->db->query("SELECT * FROM jabatan")->result();
                    foreach($jabatan as $k) { ?>
                      <option <?php if($k->id_jabatan==$akun->id_jabatan) echo 'selected' ?> value="<?= $k->id_jabatan ?>"><?= $k->jabatan ?></option>
                    <?php }
                     ?>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Nomor HP</label>
                    <input name="no_hp" type="number" class="form-control" value="<?= $akun->no_hp ?>" id="exampleInputEmail1" placeholder="Nomor HP">
                    <input name="tanggal_buat" value="<?= $akun->tanggal_buat ?>" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Nomor HP">
                    <input name="terakhir_login" value="<?= $akun->terakhir_login ?>" type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Nomor HP">
                  </div>
                </div>


                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" name="submit"  class="btn btn-primary" value="submit">Simpan</input>
                </div>
              </form>
            </div>
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
