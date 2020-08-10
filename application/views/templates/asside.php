<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?= base_url(); ?>assets/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Assembling</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url(); ?>assets/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?=  $this->session->userdata('username') ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
        <li class="nav-item">
          <a href="<?= base_url(); ?>assets/template/pages/widgets.html" class="nav-link">
            <i class="nav-icon fa fa-dashboard"></i>
            <p>
              Beranda
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url(); ?>assets/template/pages/widgets.html" class="nav-link">
            <i class="nav-icon fa fa-book"></i>
            <p>
              Data Rekam Medis
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url(); ?>assets/template/pages/widgets.html" class="nav-link">
            <i class="nav-icon fa fa-edit"></i>
            <p>
              Cek Kelengkapan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url(); ?>assets/template/pages/widgets.html" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>
              Data user
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-file"></i>
            <p>
              Laporan
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url(); ?>assets/template/pages/forms/general.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Data Rekam Medis</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>assets/template/pages/forms/advanced.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Form</p>
              </a>
            </li>
           
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-table"></i>
            <p>
              Data Terhapus
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url(); ?>assets/template/pages/tables/simple.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Data Rekam Medis</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>assets/template/pages/tables/data.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Data Form</p>
              </a>
            </li>
          </ul>
        </li>
       
       
        
        
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>