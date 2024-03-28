<body class="hold-transition sidebar-mini small-text">
  <div class="wrapper">
  
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light navbar-light" style="border-radius: 2px;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
  
      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
  
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        
        <!-- Notifications Dropdown Menu -->
        <li class="dropdown user user-menu">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-users gradient-purple"></i>
            <span class="hidden-xs"><?=$this->fungsi->user_login()->nama?></span></span>
          </a>
          <div class="dropdown-menu dropdown-menu-xs">
            <div class="dropdown-divider"></div>
            <a href="<?= site_url('auth/logout') ?>" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i>Log Out</a>
        </li> 
        <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
      </ul>
      
    </nav>
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-light elevation-4"  style="border: 2px solid light; border-radius: 5px;">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?= base_url('assets/template/') ?>dist/img/logoipb.png" alt="Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Dit-SDM</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview">
              <a href="<?= base_url('dashboard') ?>" class="nav-link active" style="border: 2px solid light; border-radius: 20px;  background: linear-gradient(to right, #1B1A55,#030637); color: #FFFFFF;">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-header">PAGES</li>
            <?php if($this->session->userdata('user') == 2) { ?> 
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                 UNIT KERJA
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('pengajuan') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pengajuan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('baru') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pegawai Baru</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('ganti') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pergantian</p>
                  </a>
                </li>
                </li>
              </ul>
              <?php } ?>

              <?php if($this->session->userdata('user') == 1) { ?> 
     
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                    Ringkasan
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('posisipegawai') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Posisi Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('statuspegawai') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Status Pegawai</p>
                </a>
              </li>
            </li>
          </ul>
              <li class="nav-item">
              <a href="<?= base_url('pengelolaan') ?>" class="nav-link">
                  <i class="far fa-folder nav-icon"></i>
                  <p>Pengelolaan</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?= base_url('perencanaan') ?>" class="nav-link">
                  <i class="far fa-id-card nav-icon"></i>
                  <p>Perencanaan</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?= base_url('verifikasi') ?>" class="nav-link">
                  <i class="fas fa-check-double nav-icon"></i>
                  <p>Verifikasi</p>
                </a>
              </li>
            <?php } ?>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark"><?= $title ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          