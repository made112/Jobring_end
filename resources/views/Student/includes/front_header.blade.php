<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{url('images/front_images/logo.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">home</a></li>

                                        <li><a href="#"> <i class=></i></a>
                                            <ul class="submenu">
                                                <li><a href="candidate.html">Candidates </a></li>
                                                <li><a href="job_details.html">job details </a></li>
                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="{{route('Account')}}">Account</a></li>
                                        <li><a href="{{route('Brows.jobs')}}">bowse you job</a></li>



                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                @if(empty(Auth::check()))
                                    <div class="phone_num d-none d-xl-block">
                                        <a href="{{url('/login')}}">Log in</a>
                                    </div>
                                    <div class="phone_num d-none d-xl-block">
                                        <a href="{{url('/register')}}">Register</a>
                                    </div>
                                @else
                                    <div class="phone_num d-none d-xl-block">
                                        <a class="fa fa-sign-out " href="{{route('user.logout')}}">Logout</a>
                                    </div>
                                    <div class="phone_num d-none d-xl-block">
                                        <a class="fa fa-user" href="{{url('/account')}}">Account</a>
                                    </div>
                                @endif

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
