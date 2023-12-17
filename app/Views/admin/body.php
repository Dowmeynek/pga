<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <h5 class="text-white text-uppercase mb-md-3">WELCOME <?= $currentuser ?>!</h5>
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="<?= base_url() ?>img/pga.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PGA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>img/kwala.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>
    
      <!-- Sidebar Menu -->
  
      <?= $this->include('admin/content/cal') ?>
      <?= $this->include('admin/content/navigation') ?>   
      <hr class="white">  
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <a href="/logout" class="d-block">Logout</a>
        </div>
  </aside>
  </div>
  </div>
</body>