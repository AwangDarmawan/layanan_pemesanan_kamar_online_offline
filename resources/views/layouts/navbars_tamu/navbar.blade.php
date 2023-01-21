<div class="header-area ">
    <div id="sticky-header" class="main-header-area">
        <div class="container-fluid p-0">
            <div class="row align-items-center no-gutters">
                <div class="col-xl-5 col-lg-6">
                    <div class="main-menu  d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a class="{{ (Request::is('tamu/home') ? 'active' : '') }}" href="{{ url('tamu/home') }}">home</a></li>
                                <li><a class="{{ (Request::is('tamu/kamar') ? 'active' : '') }}"href="{{ url('tamu/kamar') }}">Kamar</a></li>
                                <li><a class="{{ (Request::is('tamu/tentang') ? 'active' : '') }}"href="{{ url('tamu/tentang') }}">Tentang</a></li>
                                <li><a class="{{ (Request::is('tamu/pesanan') ? 'active' : '') }}" href="#">pages <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="{{ url('tamu/pesanan') }}">Pesanan Saya</a></li>
                                    </ul>
                                </li>
                                <li><a class="{{ (Request::is('tamu/kontak') ? 'active' : '') }}" href="{{ url('tamu/kontak') }}">Kontak</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <div class="logo-img">
                        <a href="index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                    <div class="book_room">
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="book_btn d-none d-lg-block">
                            <a class="popup-with-form" href="#test-form">Memesan Kamar</a>
                        </div>
                        
                            {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-user me-sm-1"></i>{{ Auth::user()->name }}
                            </a> --}}
                            
                            {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div> --}}

                            {{-- <div class="dropdown dropdown-right">
                                <a data-toggle="dropdown"  class="{{ (Request::is('tamu/profil') ? 'active' : '') }}" href="#"> <i class="fas fa-user-circle fa-2x text-white ml-3 mt-2"></i><h3 class="text-white text-bold mt-2"style="float:right;">&nbsp;PROFIL<h3></a>
                                
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="submenu" href="{{ url('tamu/profil') }}">Profil</a>
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>

                                </div>
                            </div> --}}

                              <div class="main-menu">
                               
                                    <ul id="navigation">
                                        
                                        <li><i class="fas fa-user-circle fa-2x text-white ml-3 mt-1"></i><a data-toggle="dropdown"  class="{{ (Request::is('tamu/profil') ? 'active' : '') }}" href="#"> </a>
                                            <ul class="submenu">
                                                <li><a href="{{ url('tamu/profil') }}">Profil</a></li>
                                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                      @csrf
                                                                  </form></li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                
                            </div>
                            
                          
                        
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>