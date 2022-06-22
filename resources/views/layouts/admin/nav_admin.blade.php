<style>
   .nav-item{
    text-align: right;
}
</style>
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
          <a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="/"> 
            <img class="d-inline-block align-top img-fluid" src="/kp_depan/public/assets/img/gallery/logo-icon.png" alt="" width="75" />
            <span class="text-secondary fs-4 ps-2">E-Bebas Pustaka</span><span class="text-primary fs-4 ps-2">ITS</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
            aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
           
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul id='navbarMenu' class="navbar-nav ms-auto pt-2 pt-lg-0">
           
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="bi bi-person-circle"></i> {{ Auth::user()->nama }}
                      
                    </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/admin/aktivasi">Profil</a>
                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal" href="">Logout</a>
                </div>
                </li>
              
            </ul>
        </div>
</nav>
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width:90%">
      <div class="modal-body text-center fs-2 text-black">
        Apakah anda yakin untuk logout?
      </div>
      <div class="modal-footer justify-content-center">
          <a type="button" class="btn btn-secondary mx-1" data-bs-dismiss="modal">Batal</a>
          <a type="button" class="btn btn-danger mx-1" href="/admin/logout">Logout</a>
      </div>
    </div>
  </div>
</div>

