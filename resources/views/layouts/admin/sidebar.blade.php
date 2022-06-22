<div class="sidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand-icon rotate-n-15">
                <img class="d-inline-block align-top img-fluid" src="/kp_depan/public/assets/img/gallery/logo-icon.png" alt="" width="75" />
            </div>
            <div class="sidebar-brand-text mx-3">E-Bebas Pustaka</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tahapan Bebas Pustaka
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/validasi">
                    <i class="fas fa-fw fa-check-square" aria-hidden="true"></i>
                    <span>Validasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/terimaTA">
                    <i class="fas fa-fw fa-hand-holding"></i>
                    <span>Terima TA</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/tanggungan">
                    <i class="far fa-fw fa-sticky-note"></i>
                    <span>Tanggungan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/suratbebas">
                    <i class="far fa-fw fa-file-alt"></i>
                    <span>Surat BP</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
</div>
            


<style>
/* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>