<!--Site Footer Start-->
<footer class="site-footer-two">
    <div class="site-footer-two__top">
        <div class="container">
            <div class="site-footer-two__top-inner">
                <div class="footer-widget__logo-two">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('assets/images/resources/footer-logo-1.png') }}" alt="Salón Los Arcos">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer-two__main">
        <div class="site-footer-two__main-shape"
            style="background-image: url({{ asset('assets/images/shapes/site-footer-shape.png') }})"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="footer-widget__column-two">
                        <div class="title-box">
                            <h3>Acerca del Salón</h3>
                        </div>
                        <div class="footer-widget__column-two-about">
                            <div class="text">
                                <p>
                                    Salón Los Arcos, el lugar perfecto para tus eventos especiales. 
                                    Con más de 10 años de experiencia, ofrecemos instalaciones de primera 
                                    clase con capacidad para 280 personas.
                                </p>
                            </div>
                            <ul class="footer-widget__column-two-about-list clearfix">
                                <li>
                                    <div class="icon">
                                        <i class="icon-telephone"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="tel:+521234567890">+52 123 456 7890</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-envelope-2"></i>
                                    </div>
                                    <div class="text">
                                        <p>
                                            <a href="mailto:info@salonlosarcos.com">info@salonlosarcos.com</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-pin"></i>
                                    </div>
                                    <div class="text">
                                        <p>Dirección del Salón Los Arcos</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="footer-widget__column-two ml30">
                        <div class="title-box">
                            <h3>Navegación</h3>
                        </div>
                        <ul class="footer-widget__column-two-link clearfix">
                            <li>
                                <a href="{{ route('index') }}">
                                    Inicio
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">
                                    Acerca de Nosotros
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}">
                                    Nuestros Servicios
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    Contacto
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    Cotizaciones
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="footer-widget__column-two">
                        <div class="title-box">
                            <h3>Información de Contacto</h3>
                        </div>
                        <div class="footer-widget-newsletter">
                            <div class="text">
                                <p>¿Listo para tu evento? Contáctanos para más información y cotizaciones.</p>
                            </div>
                            <div class="footer-widget__column-two-about">
                                <ul class="footer-widget__column-two-about-list clearfix">
                                    <li>
                                        <div class="icon">
                                            <i class="icon-clock"></i>
                                        </div>
                                        <div class="text">
                                            <p>Lun - Dom: 9:00 AM - 11:00 PM</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="icon-users"></i>
                                        </div>
                                        <div class="text">
                                            <p>Capacidad: 280 personas</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="icon-home"></i>
                                        </div>
                                        <div class="text">
                                            <p>480 metros cuadrados</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="title">
                                <div class="icon">
                                    <i class="icon-info"></i>
                                </div>
                                <h6>Empresa familiar desde 2014.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer-two__bottom">
        <div class="container">
            <div class="site-footer-two__bottom-inner">
                <div class="copyright-text">
                    <p>Copyright © {{ date('Y') }} <a href="{{ route('index') }}">Salón Los Arcos</a> Todos los derechos reservados.</p>
                </div>
                <div class="footer-menu">
                    <ul>
                        <li><a href="{{ route('about') }}">Política de Privacidad</a></li>
                        <li><a href="{{ route('about') }}">Términos y Condiciones</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->
</div><!-- /.page-wrapper -->