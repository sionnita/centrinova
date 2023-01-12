
<header class="header-section bg-warning">

    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="logo">
                        <a href="{{url('/')}}" class=" text-white">
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
                        @if(Auth::check())

                            <li class="heart-icon">
                            <a href="{{url('dashboard/')}}"  class="text-white">
                                <i class="fa fa-user"></i>
                                {{Auth::user()->name}}
                            </a>
                            </li>
                            <li class="heart-icon">
                                <a href="{{url('logout')}}"  class="text-white">
                                    <i class="fa fa-sign-out"></i>Logout
                                </a>
                            </li>
                        @else
                        <li class="heart-icon">
                                <a href="{{url('sign_in/')}}" class="text-white">
                                    <i class="fa fa-user"></i>
                                    Login
                                </a>
                        </li>
                            @endif
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </div>

</header>
