
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('karyawan.home') }}">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="...">
        <span class="ms-3 font-weight-bold">Kamar Kita</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">

      <li class="nav-item pb-2">
        <a class="nav-link {{ (Request::is('karyawan/dashboard') ? 'active' : '') }}" href="{{ url('karyawan/dashboard') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i style="font-size: 1rem;" class="fas fa-home ps-2 pe-2 text-center text-dark {{ (Request::is('karyawan/dashboard') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item mt-2">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Master Data</h6>
      </li>
      <li class="nav-item pb-2">
        <a class="nav-link {{ (Request::is('karyawan/pengguna') ? 'active' : '') }}" href="{{ url('karyawan/pengguna') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i style="font-size: 1rem;" class="fas fa-users ps-2 pe-2 text-center text-dark {{ (Request::is('karyawan/pengguna') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Manajemen Pengguna</span>
        </a>
      </li>
      <li class="nav-item pb-2">
        <a class="nav-link {{ (Request::is('karyawan/kamar') ? 'active' : '') }}" href="{{ url('karyawan/kamar') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i style="font-size: 1rem;" class="fas fa-door-open ps-2 pe-2 text-center text-dark {{ (Request::is('karyawan/kamar') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
            </div>
            <span class="nav-link-text ms-1">Kamar</span>
        </a>
      </li>
      
      <li class="nav-item mt-2">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">RESERVASI</h6>
      </li>

      <li class="nav-item pb-2">
        <a class="nav-link {{ (Request::is('karyawan/tertunda') ? 'active' : '') }}" href="{{ url('karyawan/tertunda') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i style="font-size: 1rem;" class="fas fa-lg fa-history ps-2 pe-2 text-center text-dark {{ (Request::is('karyawan/tertunda') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
          </div>
          <span class="nav-link-text ms-1">Tertunda</span>
        </a>
      </li>
      
      <li class="nav-item pb-2">
        <a class="nav-link {{ (Request::is('karyawan/konfirmasi') ? 'active' : '') }}" href="{{ url('karyawan/konfirmasi') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i style="font-size: 1rem;" class="fas fa-lg fa-check ps-2 pe-2 text-center text-dark {{ (Request::is('karyawan/konfirmasi') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
          </div>
          <span class="nav-link-text ms-1">Konfirmasi</span>
        </a>
      </li>

      <li class="nav-item pb-2">
        <a class="nav-link {{ (Request::is('karyawan/laporan') ? 'active' : '') }}" href="{{ url('karyawan/laporan') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i style="font-size: 1rem;" class="far fa-lg fa-file-alt ps-2 pe-2 text-center text-dark {{ (Request::is('karyawan/laporan') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
          </div>
          <span class="nav-link-text ms-1">Laporan</span>
        </a>
      </li>

      <li class="nav-item pb-2">
        <a class="btn bg-gradient-dark btn-sm nav-link {{ (Request::is('karyawan/reservasi') ? 'active' : '') }}" href="{{ url('karyawan/reservasi') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i style="font-size: 1rem;" class="ni ni-fat-add ps-2 pe-2 text-center text-dark {{ (Request::is('karyawan/reservasi') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
          </div>
          <span class="nav-link-text text-white ms-1">Buat Reservasi Baru</span>
        </a>
      </li>
      
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
      </li>

      <li class="nav-item pb-2">
        <a class="nav-link {{ (Request::is('karyawan/profile') ? 'active' : '') }}" href="{{ url('karyawan/profile') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i style="font-size: 1rem;" class="fas fa-lg <i fa-address-card ps-2 pe-2 text-center text-dark {{ (Request::is('karyawan/profile') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
          </div>
          <span class="nav-link-text ms-1">Profil</span>
        </a>
      </li>
      
    </ul>
  </div>
  <div class="sidenav-footer mx-3 ">
    <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
      <div class="full-background" style="background-image: url('../assets/img/curved-images/white-curved.jpeg')"></div>
      <div class="card-body text-start p-3 w-100">
        <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
          <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
        </div>
        <div class="docs-info">
          
        </div>
      </div>
    </div>
  </div>
</aside>

