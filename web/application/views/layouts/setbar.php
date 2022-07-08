<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url("index.php/home") ?>" class="brand-link">
      <img src="<?php echo base_url('assets/dist/img/sejahtera.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rental Mobil Sejahtera</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/dist/img/admin.jpg') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info ">
          <a href="#" class="d-block" ><?php 
          $username = $this->session->userdata('username');
          if ($username){
            echo "$username" ;
          }
          ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                <b>Daftar Menu</b>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url("index.php/mobil/index") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Mobil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url("index.php/merk/index") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Merk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url("index.php/sewa/index") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Sewa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url("index.php/users/index") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url("index.php/perawatan/index") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Perawatan Kendaraan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url("index.php/jenis_perawatan/index") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="text-center">Kelola Referensi Jenis Perawatan</p>
                </a>
              </li>
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>