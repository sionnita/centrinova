<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                   <span class="logo-sm">
{{--                <img src="{{ asset('assets/images/logo_pendek.png')}}" alt="" height="26">--}}
            </span>
                    <span class="logo-lg">
{{--                <img src="{{ asset('assets/images/logo_panjang.png')}}" alt="" height="26">--}}
            </span>
                </a>

                <a href="index.html" class="logo logo-light">
                   <span class="logo-sm">
{{--                <img src="{{ asset('assets/images/logo_pendek.png')}}" alt="" height="45">--}}
            </span>
                    <span class="logo-lg">
{{--                <img src="{{ asset('assets/images/logo_panjang.png')}}" alt="" height="40">--}}
            </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item" data-bs-toggle="collapse" id="horimenu-btn" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="topnav">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle arrow-none" href="{{url('dashboard')}}" id="topnav-dashboard" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-home-circle icon"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle arrow-none" href="{{url('blog/')}}" id="topnav-dashboard" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-food-menu"></i>
                                    <span data-key="t-dashboard">Blog</span>
                                </a>
                            </li>
                            @if(Auth::user() -> hasRole('admin'))
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle arrow-none" href="{{url('slides/')}}" id="topnav-dashboard" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-image-add"></i>
                                    <span data-key="t-dashboard">Image Slide</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>

        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{asset('assets/images/user.png')}}"
                    alt="Header Avatar">
                    <span class="ms-2 d-none d-xl-inline-block user-item-desc">
                        <span class="user-name">{{Session::get('name')}} <i class="mdi mdi-chevron-down"></i></span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <h6 class="dropdown-header">Welcome {{Session::get('name')}}!</h6>
                    <a class="dropdown-item" href="{{url('profile/')}}"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                    <a class="dropdown-item" href="{{url('logout')}}"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
                </div>
            </div>
        </div>
    </div>



      <!-- start dash troggle-icon -->

  <!-- end dash troggle-icon -->

</header>

<div class="hori-overlay"></div>

