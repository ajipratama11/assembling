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
            <h1>Cek Kelengkapan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Laporan</a></li>
              <li class="breadcrumb-item active">Cek Kelengkapan</li>
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
                <h3 class="card-title">Form Cek Kelengkapan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                <div class="card-body col-md-12">
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">No. Transaksi</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group col-md-4">
                  <label for="exampleInputEmail1">No. RM</label>
                  <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <Button type="submit" class="btn btn-primary">Cari</Button>
                  </div>
                </div>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Nama Pasien</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Jenis Pelayanan</label>
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Asal Ruangan</label>
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Tanggal Cek</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  
                </div>

<div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
               
                  <td>Form</td>
                  <td>Lengkap</td>
                  <td>Tidak Lengkap</td>
               
                </thead>
                <tbody>
                <tr>
                  <td>SBAR</td>
                  <td> <input  type="radio" value="lengkap" id="radio1" name="textField" />
                  </td>
                  <td> <input type="radio" value="tidak lengkap" id="radio2" name="textField" /></td>
                
                </tr>
                <tr>
                  <td>CARD X</td>
                  <td> <input onclick="myfunction()" type="radio" value="lengkap" id="radio3" name="textField2" />
                  </td>
                  <td> <input type="radio" value="tidak lengkap" id="radio4" name="textField2" /></td>
                
                </tr>
                <tr>
                  <td>PEMANTAUAN</td>
                  <td> <input type="radio" value="lengkap" id="radio5" name="textField3" />
                  </td>
                  <td> <input type="radio" value="tidak lengkap" id="radio6" name="textField3" /></td>
                
                </tr>
                <tr>
                  <td>INFORM CONSENT</td>
                  <td> <input type="radio" value="lengkap" id="radio7" name="textField4" />
                  </td>
                  <td> <input type="radio" value="tidak lengkap" id="radio8" name="textField4" /></td>
                
                </tr>
                <tr>
                  <td>SKRINING</td>
                  <td> <input type="radio" value="lengkap" id="radio9" name="textField5" />
                  </td>
                  <td> <input type="radio" value="tidak lengkap" id="radio10" name="textField5" /></td>
                
                </tr>
                <tr>
                  <td>PENGKAJIAN KADAR</td>
                  <td> <input type="radio" value="lengkap" id="radio11" name="textField6" />
                  </td>
                  <td> <input type="radio" value="tidak lengkap" id="radio12" name="textField6" /></td>
                
                </tr>
            
              </table>
            </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit"  class="btn btn-primary" value="Simpan Sementara"></input>
                 
                  <input type="submit" disabled  id="simpan" class="btn btn-primary" value="Simpan"></input>
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
<script type="text/javascript">
    

   // Make this a function.
   function checkProgress() {
  if ( $("input:radio[name*='textField']:checked").length != 0) {
    if ( $("input:radio[name*='textField2']:checked").length != 0) {
        if ( $("input:radio[name*='textField3']:checked").length != 0) {
          if ( $("input:radio[name*='textField4']:checked").length != 0) {
            if ( $("input:radio[name*='textField5']:checked").length != 0) {
              if ( $("input:radio[name*='textField6']:checked").length != 0) {
                $('#simpan').prop('disabled', false);
            }
          }
        }
      }
    }
  } else {
    $('#simpan').prop('disabled', true);
  }
}

$(function () {
  // Set the status once the doc loads.
  checkProgress();
  // Set it again when any of the radio buttons are clicked.
  $("input:radio[name*='textField']").on("click change", checkProgress);
  $("input:radio[name*='textField2']").on("click change", checkProgress);
  $("input:radio[name*='textField3']").on("click change", checkProgress);
  $("input:radio[name*='textField4']").on("click change", checkProgress);
  $("input:radio[name*='textField5']").on("click change", checkProgress);
  $("input:radio[name*='textField6']").on("click change", checkProgress);
});
</script>