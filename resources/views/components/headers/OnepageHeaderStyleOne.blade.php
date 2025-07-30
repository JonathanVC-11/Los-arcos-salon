<header class="main-header">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="container">
                        <div class="main-menu__wrapper-inner">
                            <div class="main-menu__logo">
                                <div class="section-shape-1"
                                    style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
                                <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-1.png') }}" alt=""></a>
                            </div>
                            
                            <div class="main-menu__bottom">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list one-page-scroll-menu">
                                        <li class="dropdown scrollToLink">
                                            <a href="#home">Home</a>
                                            <ul>
                                                <li><a href="{{ route('index-one-page') }}">One Page Styles One</a></li>
                                            </ul>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#about">About Us</a>
                                        </li>
                                        <li class="scrollToLink">
                                            <a href="#contact">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu__search-and-btn-box">
                                    <div class="main-menu__search-box">
                                        <a href="#"
                                            class="main-menu__search search-toggler icon-search-interface-symbol"></a>
                                    </div>
                                    <div class="main-menu__btn-box">
                                        <a href="{{ route('contact') }}" class="thm-btn main-menu__btn">Free Quote <span
                                                class="icon-up-right-arrow"></span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>