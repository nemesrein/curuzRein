<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="<?php echo site_url("admin/dashboard") ?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
<li class="nav-item">
  <a class="nav-link" href="<?php echo site_url("admin/skills") ?>">
  <i class="fas fa-fw fa-laptop-code"></i>
    <span>Skills</span></a>
</li>
<!-- Heading -->

<!-- Divider -->
<hr class="sidebar-divider">
<li class="nav-item active">
  <a class="nav-link" href="<?php echo site_url("admin/projects") ?>">
    <i class="fas fa-fw fa-project-diagram"></i>
    <span>Projects</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
<li class="nav-item">
  <a class="nav-link" href="index.html">
  <i class="fas fa-fw fa-user-circle"></i>
    <span>Profile</span></a>
</li>
<hr class="sidebar-divider d-none d-md-block">
<li class="nav-item">
  <a class="nav-link" href="index.html">
  <i class="fas fa-fw fa-sms"></i>
    <span>Messages</span></a>
</li>
<hr class="sidebar-divider d-none d-md-block">
<li class="nav-item">
  <a class="nav-link" href="<?php echo site_url("admin/destroy") ?>">
  <i class="fas fa-fw fa-sign-out-alt"></i>
    <span>logout</span></a>
</li>
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->