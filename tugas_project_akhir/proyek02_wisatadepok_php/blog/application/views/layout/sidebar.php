<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../../index3.html" class="brand-link">
    <img src="<?php echo base_url('dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8') ?>">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar ">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
          <img src="<?= base_url('dist/img/avatar.png')?>" class="img-circle elevation-2" alt="User Image">
    </div>
      <div class="info">
        <a href="" class="d-block">
          <?php
            if($this->session->has_userdata('username')){
                echo $this->session->userdata('username');
                echo '-'.$this->session->userdata('role');
            }
          ?>
        </a>
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
              Dashboard
            </p>
          </a>
        </li>

        <?php if ($this->session->userdata('role') == 'administrator') { ?>
          <li class="nav-header">Wisata</li>

          <li class="nav-item">
            <a href="<?= base_url('index.php/tempat_wisata/index') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Tempat Wisata</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/jenis_wisata/index') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Jenis Wisata</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/kecamatan/index') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Kecamatan</p>
            </a>
          </li>
          </li>
          <li class="nav-header">Komentar</li>

          <li class="nav-item">
            <a href="<?= base_url('index.php/komentar/index') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Komentar</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('index.php/nilai_rating/index') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Nilai Rating</p>
            </a>
          </li>
          <li class="nav-header">Extras</li>

          <li class="nav-item">
            <a href="<?= base_url('index.php/users/index') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Users</p>
            </a>
          </li>


        <?php } elseif ($this->session->userdata('role') == 'public') { ?>
          <li class="nav-header">Wisata</li>

          <li class="nav-item">
            <a href="<?= base_url('index.php/tempat_wisata/tampil') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Tempat Wisata</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/jenis_wisata/tampil') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Jenis Wisata</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('index.php/kecamatan/tampil') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Kecamatan</p>
            </a>
          </li>
          </li>
          <li class="nav-header">Komentar</li>

          <li class="nav-item">
            <a href="<?= base_url('index.php/komentar/tampil') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Komentar</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('index.php/nilai_rating/tampil') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Nilai Rating</p>
            </a>
          </li>
          <li class="nav-header">Extras</li>

          <li class="nav-item">
            <a href="<?= base_url('index.php/users/tampil') ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Users</p>
            </a>
          </li>
        <?php } ?>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>