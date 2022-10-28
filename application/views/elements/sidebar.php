<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url('/'); ?>" class="brand-link">
    <img src="<?php echo base_url(); ?>assets/icon/folder.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">OCR App</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
      <img src="<?php echo base_url(); ?>assets/icon/user.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="" class="d-block active"><?php echo $name[0]->name; ?></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>" class="nav-link" id="sb-db">
            <i class="nav-icon far fa-circle text-info"></i>
            <p class="text">Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>listdata" class="nav-link" id="sb-ld">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p>List Data</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>logout" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>