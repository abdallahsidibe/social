<header>
    <div class="container">
        <div class="header-data">
            <div class="logo">
                <a href="index.html" title=""><img src="{{ asset('assetss/images/logo.png') }}" alt=""></a>
            </div>
            <div class="search-bar">
                <form>
                    <input type="text" name="search" placeholder="Search...">
                    <button type="submit"><i class="la la-search"></i></button>
                </form>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="/influent" title="">
                            <span><img src="{{ asset('assetss/images/icon1.png') }}" alt=""></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/profiles" title="">
                            <span><img src="{{ asset('assetss/images/icon4.png') }}" alt=""></span>
                            Compte Influent
                        </a>

                    </li>
                    <li>
                        <a href="{{ route('topics.index') }}" title="">
                            <span><img src="{{ asset('assetss/images/icon3.png') }}" alt=""></span>
                            Forum
                        </a>
                    </li>

                    <li>
                        <a href="/chatify" title="" class="not-box-openm">
                            <span><img src="{{ asset('assetss/images/icon6.png') }}" alt=""></span>
                            Messages
                        </a>
                    </li>                   
                    <li>
                        <a href="#" title="" class="not-box-open">
                            <span><img src="{{ asset('assetss/images/icon7.png') }}" alt=""></span>
                            Notification
                        </a>
                        <div class="notification-box noti" id="notification">

                            <div class="nott-list">
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{ asset('assetss/images/resources/ny-img1.png') }}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="#" title="">Jassica William</a> Comment on your project.
                                        </h3>
                                        <span>2 min ago</span>
                                    </div>
                                </div>
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{ asset('assetss/images/resources/ny-img2.png') }}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="#" title="">Jassica William</a> Comment on your project.
                                        </h3>
                                        <span>2 min ago</span>
                                    </div>
                                </div>
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{ asset('assetss/images/resources/ny-img3.png') }}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="#" title="">Jassica William</a> Comment on your project.
                                        </h3>
                                        <span>2 min ago</span>
                                    </div>
                                </div>
                                <div class="notfication-details">
                                    <div class="noty-user-img">
                                        <img src="{{ asset('assetss/images/resources/ny-img2.png') }}" alt="">
                                    </div>
                                    <div class="notification-info">
                                        <h3><a href="#" title="">Jassica William</a> Comment on your project.
                                        </h3>
                                        <span>2 min ago</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="menu-btn">
                <a href="#" title=""><i class="fa fa-bars"></i></a>
            </div>
            <div class="user-account">
                <div class="user-info">
                    <img src="{{ asset('assetss/images/resources/user.png') }}" alt="">
                    <a href="#" title="">{{ Auth::user()->name }}</a>
                    <i class="la la-sort-down"></i>
                </div>
                <div class="user-account-settingss" id="users">


                    <ul class="us-links">
                        <li><a href="{{ route('my-profil') }}" title="">Profil</a></li>
                        <li><a href="{{ route('topics.create') }}" title="">Créer un sujet</a></li>
                        <li><a href="{{ route('topics.ind') }}" title="">Mes sujets</a></li>
                    </ul>
                    <h3 class="tc"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Deconnexion') }}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </a></h3>
                </div>
            </div>
        </div>
    </div>
</header>
