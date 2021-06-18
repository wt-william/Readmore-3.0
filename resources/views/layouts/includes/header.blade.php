<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="/">
                        <img src="img/rm_trans.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="/">Homepage</a></li>
                            <li><a href=""> Browse <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="/categories"> Categories </a></li>
                                    <li><a href="/anime-detail">Anime Details</a></li>
                                    <li><a href="/watching">Anime Watching</a></li>
                                    <li><a href="/detail">Blog Details</a></li>
                                    <li><a href="/signup">Sign Up</a></li>
                                    <li><a href="/login-user">Login</a></li>
                                </ul>
                            </li>
                            <li><a href="/blog">Our Blog</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="header__right">
                <form class="form-inline">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            <!-- <div class="input-group-append"> -->
                                <button class="btn btn-outline-secondary" type="button"><i
                                        class="fa fa-search"></i></button>
                            <!-- </div> -->
                            <div class="icon-profile">
                                <a href="/login-user"><span class="icon_profile"></span></a>
                            </div>    
                        </form>
                    <div class="small">Logged in as:</div>
                        @if (Auth::check())
                            <h6 style="color: white">{{Auth::user()->name}}</h6 style="color: white">
                        @endif
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->