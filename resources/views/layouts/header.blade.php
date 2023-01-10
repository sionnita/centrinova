
<header class="header-section">

    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="logo">
                        <a href="#">
                            Centrinova
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="advanced-search">
                        <div class="input-group">
                            <input type="text" placeholder="What do you need?" />
                            <button type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            @if(Auth::check())
                                <a href="{{url('dashboard/')}}">
                                    <i class="fa fa-user"></i>
                                    {{Auth::user()->name}}
                                </a>
                            @else
                                <a href="{{url('sign_in/')}}">
                                    <i class="fa fa-user"></i>
                                    Login
                                </a>
                            @endif
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">

            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Collection</a>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Pages</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
