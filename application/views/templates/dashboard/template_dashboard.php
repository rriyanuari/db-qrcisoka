<?php $this->load->view('templates/open'); ?>

<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url() ?>" class="nav-link">Program QR Code Gudang Cisoka</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a href="<?= base_url()."logout" ?>">Logout</a>
      </li>
    </ul>
  </nav>
<!-- /.navbar -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url() ?>" class="brand-link">
    <img src="<?= base_url() ?>/assets/dist/img/logo-gcal.png"
          alt="GCAL Logo"
          class="brand-image img-circle "
          style="opacity: .8">
    <span class="brand-text font-weight-light">Gudang Cisoka</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item active">
          <a href="<?= base_url() ?>" class="nav-link <?= ($page == 'dashboard') ? 'active' : '' ?>">
            <p>
              Dashboard
            </p>
          </a>
        </li> 
        <li class="nav-item">
          <a href="<?= base_url('dashboard/jenis-barang') ?>" class="nav-link <?= ($page == 'jenisBarang') ? 'active' : '' ?>">
            <p>
              Jenis Barang
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('dashboard/barang') ?>" class="nav-link <?= ($page == 'barang') ? 'active' : '' ?>">
            <p>
              Barang
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('dashboard/history') ?>" class="nav-link <?= ($page == 'history') ? 'active' : '' ?>">
            <p>
              History
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview <?= ($page == 'transMasuk' || $page == 'transKeluar' || $page == 'transReturn') ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link <?= ($page == 'transMasuk' || $page == 'transKeluar' || $page == 'transReturn') ? 'active' : '' ?>">
            <p>
              Form Transaksi
            </p>
            <i class="right fas fa-angle-left"></i>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('dashboard/transaksi-masuk') ?>" class="nav-link <?= ($page == 'transMasuk') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('dashboard/transaksi-keluar') ?>" class="nav-link <?= ($page == 'transKeluar') ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('dashboard/transaksi-return') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Return</p>
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

<!-- CONTENT WRAPPER -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <?php

        // Konten Dinamis
        $this->load->view('pages/'.$kontenDinamis);
      
      ?>   
    </div>
    <!-- /.container-fluid -->
  </section>
</div>
<!-- /. CONTENT WRAPPER -->

<?php 
  $this->load->view('templates/footer'); 
  $this->load->view('templates/close');   
?>
