<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer__shape-1 float-bob-x">
        <img src="{{ asset('assets/images/shapes/site-footer-shape-1.png') }}" alt="">
    </div>
    <div class="site-footer__shape-2 float-bob-y">
        <img src="{{ asset('assets/images/shapes/site-footer-shape-2.png') }}" alt="">
    </div>
    <div class="site-footer__marquee">
        <ul class="marquee_mode">
            <li>Salón de Eventos </li>
            <li>Los Arcos</li>
        </ul>
    </div>
    <div class="container">
        <div class="site-footer__top">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="{{ route('index') }}"><img
                                    src="{{ asset('assets/images/resources/footer-logo-1.png') }}"
                                    alt="Salón Los Arcos"></a>
                        </div>
                        <p class="footer-widget__about-text">
                            Salón Los Arcos, el lugar perfecto para tus eventos especiales. 
                            Con más de 10 años de experiencia, ofrecemos instalaciones de primera 
                            clase con capacidad para 280 personas en un ambiente familiar y acogedor.
                        </p>
                        <div class="site-footer__social">
                            <a href="https://www.facebook.com/profile.php?id=100054229521920"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__usefull-link">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Navegación</h3>
                        </div>
                        <div class="footer-widget__link-box">
                            <ul class="footer-widget__link list-unstyled">
                                <li><a href="{{ route('index') }}">Inicio</a></li>
                                <li><a href="{{ route('about') }}">Acerca de Nosotros</a></li>
                                <li><a href="{{ route('contact') }}">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__services">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Contacto</h3>
                        </div>
                        <div class="footer-widget__contact-info">
                            <ul class="footer-widget__link list-unstyled">
                                <li><i class="fas fa-phone"></i> <a href="tel:713 100 0994">713 100 0994</a></li>
                                <li><i class="fas fa-envelope"></i> <a href="mailto:alexvara@live.com.mx"> alexvara@live.com.mx</a></li>
                                <li><i class="fas fa-map-marker-alt"></i> <span>Cda. Hidalgo Manzana 006, Tianguistenco de Galeana, 52600 Guadalupe Yancuictlalpan, Méx.</span></li>
                                <li><i class="fas fa-clock"></i> <span>Lun - Dom: 9:00 AM - 11:00 PM</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="site-footer__bottom-inner">
                <p class="site-footer__bottom-text">© {{ date('Y') }}
                    Copyright <a href="{{ route('index') }}">Salón Los Arcos.</a> | Todos los derechos reservados.</p>
                <ul class="list-unstyled site-footer__bottom-menu">
                    <li><a href="{{ route('about') }}">Política de Privacidad</a></li>
                    <li><a href="{{ route('about') }}">Términos y Condiciones</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->
</div><!-- /.page-wrapper -->
