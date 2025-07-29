<header class="main-header">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="container">
                <div class="main-menu__wrapper-inner">
                    <div class="main-menu__logo">
                        <div class="section-shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});">
                        </div>
                        <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-1.png') }}"
                                alt=""></a>
                    </div>
                    <div class="main-menu__bottom">
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <x-menuList />
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
