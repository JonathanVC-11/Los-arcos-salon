@extends('layouts.layoutStyleThree')
@section('title', 'Inicio || Los Arcos || Salón de Fiestas')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/before-after.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/how-it-work.css') }}">
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <!-- /.stricky-header -->
    
    <!--Main Slider Three Start-->
    <section class="main-slider-three">
        <ul class="list-unstyled main-slider-three__contact-list">
            <li>
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="text">
                    <p><a href="mailto:alexvara@live.com.mx">alexvara@live.com.mx</a></p>
                </div>
            </li>
            <li>
                <div class="icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="text">
                    <p><a href="tel:7131000994">713 100 0994</a></p>
                </div>
            </li>
            <li>
                <div class="main-slider-three__social">
                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                    <a href="#"><span class="fab fa-twitter"></span></a>
                    <a href="#"><span class="fab fa-instagram"></span></a>
                    <a href="#"><span class="fab fa-whatsapp"></span></a>
                </div>
            </li>
        </ul>
        <div class="container-full">
            <div class="main-slider-three__slider">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-5">
                        <div class="main-slider-three__left">
                            <div class="swiper-container" id="main-slider-three__thumb">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="main-slider-three__content-one">
                                            <h2 class="main-slider-three__title-one">Salón</h2>
                                            <h3 class="main-slider-three__title-two">Bodas Elegantes</h3>
                                            <p class="main-slider-three__price">$15,000</p>
                                            <div class="main-slider-three__btn-box">
                                                <a href="{{ route('contact') }}" class="thm-btn main-slider-three__btn">Cotizar
                                                    <span class="icon-up-right-arrow"></span> </a>
                                            </div>
                                            <h3 class="main-slider-three__title-three">Los Arcos</h3>
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="main-slider-three__content-one">
                                            <h2 class="main-slider-three__title-one">Fiestas</h2>
                                            <h3 class="main-slider-three__title-two">XV Años Especiales</h3>
                                            <p class="main-slider-three__price">$12,000</p>
                                            <div class="main-slider-three__btn-box">
                                                <a href="{{ route('contact') }}" class="thm-btn main-slider-three__btn">Cotizar
                                                    <span class="icon-up-right-arrow"></span> </a>
                                            </div>
                                            <h3 class="main-slider-three__title-three">Los Arcos</h3>
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="main-slider-three__content-one">
                                            <h2 class="main-slider-three__title-one">Eventos</h2>
                                            <h3 class="main-slider-three__title-two">Celebraciones Familiares</h3>
                                            <p class="main-slider-three__price">$8,000</p>
                                            <div class="main-slider-three__btn-box">
                                                <a href="{{ route('contact') }}" class="thm-btn main-slider-three__btn">Cotizar
                                                    <span class="icon-up-right-arrow"></span> </a>
                                            </div>
                                            <h3 class="main-slider-three__title-three">Los Arcos</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /#main-slider-three__Nav -->
                            <div class="main-slider-three__nav">
                                <div class="swiper-button-next" id="main-slider-three__swiper-button-prev">
                                    <i class="icon-left-arrow"></i>
                                </div>
                                <div class="swiper-button-prev" id="main-slider-three__swiper-button-next">
                                    <i class="icon-right-arrow"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-7">
                        <div class="main-slider-three__right">
                            <div class="main-slider-three__main-content">
                                <div class="swiper-container" id="main-slider-three__carousel">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="main-slider-three__img-box">
                                                <div class="main-slider-three__img">
                                                    <img src="{{ asset('assets/images/resources/main-slider-three-1-1.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="main-slider-three__img-box">
                                                <div class="main-slider-three__img">
                                                    <img src="{{ asset('assets/images/resources/main-slider-three-1-2.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="main-slider-three__img-box">
                                                <div class="main-slider-three__img">
                                                    <img src="{{ asset('assets/images/resources/main-slider-three-1-3.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->
                                    </div>
                                    <!-- /# If Need main-slider-three__carousel-pagination -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Main Slider Three End-->
    
    <!--About Three Start -->
    <section class="about-three">
        <div class="about-three__shape1">
            <img class="float-bob-x" src="{{ asset('assets/images/shapes/site-footer-two-shape-1.png') }}" alt="Shape">
        </div>
        <div class="about-three__shape2">
            <img class="float-bob-x" src="{{ asset('assets/images/shapes/site-footer-two-shape-2.png') }}" alt="Shape">
        </div>
        <div class="about-three__shape3">
            <img class="float-bob-x" src="{{ asset('assets/images/shapes/about-v1-shape1.png') }}" alt="Shape">
        </div>
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-three__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <h2 class="section-title__title title-animation">Bienvenidos a Los Arcos</h2>
                        </div>
                        <p class="about-three__text">Desde 2014, nos consolidamos como el salón de eventos que brinda 
                            instalaciones acondicionadas, suficientes y adecuadas al tipo de servicio que se contrate, 
                            con seguridad y diversidad en un ambiente familiar.</p>
                        <ul class="about-three__points-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-workstations"></span>
                                </div>
                                <div class="content">
                                    <h3>Capacidad 280 Personas</h3>
                                    <p>Amplio salón de 480 m² con estructura colonial<br> y rústica, 
                                        perfecto para eventos grandes.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-social-media-marketing"></span>
                                </div>
                                <div class="content">
                                    <h3>Servicio Integral</h3>
                                    <p>Renta de salón, mobiliario, banquetes y personal<br> de servicio 
                                        especializado para tu evento.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="about-three__btn-box">
                            <a href="{{ route('about') }}" class="thm-btn about-three__btn">Conocer Más <span
                                    class="icon-up-right-arrow"></span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-three__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-three__img">
                            <img src="{{ asset('assets/images/resources/about-three-img-1.jpg') }}" alt="">
                            <div class="about-three__experience-box">
                                <h3 class="about-three__experience-title">Empresa Familiar<br> con Tradición</h3>
                                <div class="about-three__experience">
                                    <div class="about-three__experience-count-shape"></div>
                                    <p class="about-three__experience-sub-title">Años de <br>Experiencia</p>
                                    <div class="about-three__experience-count count-box">
                                        <h3 class="count-text" data-stop="10" data-speed="1500">00</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Three End -->
    
    <!--How It Work Start -->
    <section class="how-it-work">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Tipos de Eventos</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="how-it-work__single">
                        <div class="how-it-work__count"></div>
                        <h3 class="how-it-work__title">BODAS</h3>
                        <p class="how-it-work__text">Celebra el día más importante de tu vida<br> en nuestro hermoso 
                            salón con estructura<br> colonial y rústica.</p>
                        <div class="how-it-work__icon">
                            <span class="icon-staircase"></span>
                        </div>
                    </div>
                    <div class="how-it-work__single">
                        <div class="how-it-work__count"></div>
                        <h3 class="how-it-work__title">XV AÑOS</h3>
                        <p class="how-it-work__text">Haz realidad el sueño de tu quinceañera<br> con una fiesta 
                            inolvidable en nuestras<br> instalaciones.</p>
                        <div class="how-it-work__icon">
                            <span class="icon-plant"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="how-it-work__img-box">
                        <div class="how-it-work__img">
                            <img src="{{ asset('assets/images/resources/how-it-work-img-1.jpg') }}" alt="">
                        </div>
                        <div class="how-it-work__icon-2">
                            <span class="icon-globe"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="how-it-work__single how-it-work__single-2">
                        <div class="how-it-work__count"></div>
                        <h3 class="how-it-work__title">BAUTIZOS</h3>
                        <p class="how-it-work__text">Celebra este momento especial en familia<br> con nuestro ambiente 
                            acogedor y áreas<br> verdes para los niños.</p>
                        <div class="how-it-work__icon">
                            <span class="icon-vacuum-cleaner"></span>
                        </div>
                    </div>
                    <div class="how-it-work__single how-it-work__single-2">
                        <div class="how-it-work__count"></div>
                        <h3 class="how-it-work__title">EVENTOS EMPRESARIALES</h3>
                        <p class="how-it-work__text">Organiza reuniones corporativas y eventos<br> de empresa en 
                            nuestras instalaciones<br> profesionales.</p>
                        <div class="how-it-work__icon">
                            <span class="icon-workstations"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--How It Work End -->
    
    <!--Services Three Start -->
    <section class="services-three">
        <div class="services-three__bg"
            style="background-image: url({{ asset('assets/images/shapes/site-footer-shape-1.jpg') }});"></div>
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Nuestros Valores <br>
                    Servicio de Excelencia</h2>
            </div>
            <div class="row">
                <!--Services Three Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-staircase"></span>
                        </div>
                        <h3 class="services-three__title"><a href="{{ route('services') }}"> Respeto & <br>
                                Integridad </a></h3>
                        <div class="services-three__img">
                            <img src="{{ asset('assets/images/services/services-3-1.jpg') }}" alt="">
                        </div>
                        <p class="services-three__text">Nuestros valores fundamentales nos guían en cada evento. 
                            Tratamos a cada cliente con respeto, integridad y el compromiso de brindar un servicio 
                            de excelencia.</p>
                        <div class="services-three__arrow">
                            <a href="{{ route('services') }}"><span class="icon-up-right-arrow-1"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End -->
                <!--Services Three Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-workstations"></span>
                        </div>
                        <h3 class="services-three__title"><a href="{{ route('services') }}"> Servicio & <br>
                                Lealtad </a></h3>
                        <div class="services-three__img">
                            <img src="{{ asset('assets/images/services/services-3-2.jpg') }}" alt="">
                        </div>
                        <p class="services-three__text">Nuestro compromiso con el servicio y la lealtad hacia nuestros 
                            clientes se refleja en cada detalle. Trabajamos con dedicación para superar expectativas.</p>
                        <div class="services-three__arrow">
                            <a href="{{ route('services') }}"><span class="icon-up-right-arrow-1"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End -->
                <!--Services Three Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="600ms">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-plant"></span>
                        </div>
                        <h3 class="services-three__title"><a href="{{ route('services') }}"> Empatía & <br>
                                Paciencia </a></h3>
                        <div class="services-three__img">
                            <img src="{{ asset('assets/images/services/services-3-3.jpg') }}" alt="">
                        </div>
                        <p class="services-three__text">Entendemos la importancia de tu evento especial. Con empatía 
                            y paciencia, te acompañamos en cada paso de la planificación para lograr el evento perfecto.</p>
                        <div class="services-three__arrow">
                            <a href="{{ route('services') }}"><span class="icon-up-right-arrow-1"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End -->
                <!--Services Three Single Start -->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="800ms">
                    <div class="services-three__single">
                        <div class="services-three__icon">
                            <span class="icon-vacuum-cleaner"></span>
                        </div>
                        <h3 class="services-three__title"><a href="{{ route('services') }}"> Gratitud & <br>
                                Responsabilidad </a></h3>
                        <div class="services-three__img">
                            <img src="{{ asset('assets/images/services/services-3-4.jpg') }}" alt="">
                        </div>
                        <p class="services-three__text">Agradecemos la confianza depositada en nosotros y asumimos 
                            con responsabilidad el compromiso de hacer de tu evento una experiencia inolvidable.</p>
                        <div class="services-three__arrow">
                            <a href="{{ route('services') }}"><span class="icon-up-right-arrow-1"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Three Single End -->
            </div>
        </div>
    </section>
    <!--Services Three End -->
    
    <!-- Sliding Text Two Start -->
    <section class="sliding-text-two">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="sliding-text-two__wrap">
            <ul class="sliding-text-two__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="Salón Los Arcos" class="sliding-text-two__title">Salón Los Arcos</h2>
                </li>
                <li>
                    <h2 data-hover="Eventos Familiares" class="sliding-text-two__title">Eventos Familiares</h2>
                </li>
                <li>
                    <h2 data-hover="Celebraciones Especiales" class="sliding-text-two__title">Celebraciones Especiales</h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text Two End -->
    
    <!--Projects Three Start-->
    <section class="projects-three">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="projects-three__wrapper">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Galería de Eventos <br>
                    Momentos Inolvidables.</h2>
            </div>
            <div class="projects-three__carousel owl-theme owl-carousel">
                <!--Projects Three Single Start-->
                <div class="item">
                    <div class="projects-three__single">
                        <div class="projects-three__img">
                            <img src="{{ asset('assets/images/project/projects-3-1.jpg') }}" alt="">
                            <div class="projects-three__content">
                                <p class="projects-three__sub-title">Bodas</p>
                                <h4 class="projects-three__title"><a href="{{ route('project-details') }}">Boda
                                        Elegante</a></h4>
                            </div>
                            <div class="projects-three__arrow">
                                <a href="{{ asset('assets/images/project/projects-3-1.jpg') }}" class="img-popup"><span
                                        class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Three Single End-->
                <!--Projects Three Single Start-->
                <div class="item">
                    <div class="projects-three__single">
                        <div class="projects-three__img">
                            <img src="{{ asset('assets/images/project/projects-3-2.jpg') }}" alt="">
                            <div class="projects-three__content">
                                <p class="projects-three__sub-title">XV Años</p>
                                <h4 class="projects-three__title"><a href="{{ route('project-details') }}">Fiesta de
                                        XV Años</a></h4>
                            </div>
                            <div class="projects-three__arrow">
                                <a href="{{ asset('assets/images/project/projects-3-2.jpg') }}" class="img-popup"><span
                                        class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Three Single End-->
                <!--Projects Three Single Start-->
                <div class="item">
                    <div class="projects-three__single">
                        <div class="projects-three__img">
                            <img src="{{ asset('assets/images/project/projects-3-3.jpg') }}" alt="">
                            <div class="projects-three__content">
                                <p class="projects-three__sub-title">Bautizos</p>
                                <h4 class="projects-three__title"><a href="{{ route('project-details') }}">Celebración
                                        Familiar</a></h4>
                            </div>
                            <div class="projects-three__arrow">
                                <a href="{{ asset('assets/images/project/projects-3-3.jpg') }}" class="img-popup"><span
                                        class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Three Single End-->
                <!--Projects Three Single Start-->
                <div class="item">
                    <div class="projects-three__single">
                        <div class="projects-three__img">
                            <img src="{{ asset('assets/images/project/projects-3-4.jpg') }}" alt="">
                            <div class="projects-three__content">
                                <p class="projects-three__sub-title">Empresarial</p>
                                <h4 class="projects-three__title"><a href="{{ route('project-details') }}">Evento
                                        Corporativo</a></h4>
                            </div>
                            <div class="projects-three__arrow">
                                <a href="{{ asset('assets/images/project/projects-3-4.jpg') }}" class="img-popup"><span
                                        class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Three Single End-->
                <!--Projects Three Single Start-->
                <div class="item">
                    <div class="projects-three__single">
                        <div class="projects-three__img">
                            <img src="{{ asset('assets/images/project/projects-3-1.jpg') }}" alt="">
                            <div class="projects-three__content">
                                <p class="projects-three__sub-title">Bodas</p>
                                <h4 class="projects-three__title"><a href="{{ route('project-details') }}">Boda
                                        Elegante</a></h4>
                            </div>
                            <div class="projects-three__arrow">
                                <a href="{{ asset('assets/images/project/projects-3-1.jpg') }}" class="img-popup"><span
                                        class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Three Single End-->
                <!--Projects Three Single Start-->
                <div class="item">
                    <div class="projects-three__single">
                        <div class="projects-three__img">
                            <img src="{{ asset('assets/images/project/projects-3-2.jpg') }}" alt="">
                            <div class="projects-three__content">
                                <p class="projects-three__sub-title">XV Años</p>
                                <h4 class="projects-three__title"><a href="{{ route('project-details') }}">Fiesta de
                                        XV Años</a></h4>
                            </div>
                            <div class="projects-three__arrow">
                                <a href="{{ asset('assets/images/project/projects-3-2.jpg') }}" class="img-popup"><span
                                        class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Three Single End-->
                <!--Projects Three Single Start-->
                <div class="item">
                    <div class="projects-three__single">
                        <div class="projects-three__img">
                            <img src="{{ asset('assets/images/project/projects-3-3.jpg') }}" alt="">
                            <div class="projects-three__content">
                                <p class="projects-three__sub-title">Bautizos</p>
                                <h4 class="projects-three__title"><a href="{{ route('project-details') }}">Celebración
                                        Familiar</a></h4>
                            </div>
                            <div class="projects-three__arrow">
                                <a href="{{ asset('assets/images/project/projects-3-3.jpg') }}" class="img-popup"><span
                                        class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Three Single End-->
                <!--Projects Three Single Start-->
                <div class="item">
                    <div class="projects-three__single">
                        <div class="projects-three__img">
                            <img src="{{ asset('assets/images/project/projects-3-4.jpg') }}" alt="">
                            <div class="projects-three__content">
                                <p class="projects-three__sub-title">Empresarial</p>
                                <h4 class="projects-three__title"><a href="{{ route('project-details') }}">Evento
                                        Corporativo</a></h4>
                            </div>
                            <div class="projects-three__arrow">
                                <a href="{{ asset('assets/images/project/projects-3-4.jpg') }}" class="img-popup"><span
                                        class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Three Single End-->
            </div>
        </div>
    </section>
    <!--Projects Three End-->
    
    <!--Before And After Start -->
    <section class="before-and-after">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Nuestra Misión y Visión</h2>
            </div>
            <p class="before-and-after__text">Consolidarse como el salón de eventos que brinda instalaciones 
                acondicionadas,<br> suficientes y adecuadas con seguridad y diversidad.</p>
            <div class="before-and-after__img-box">
                <div class="before-after">
                    <div class="before-after-twentytwenty" id="wrinkle-before-after">
                        <img src="{{ asset('assets/images/resources/before-and-after-img-1.jpg') }}" alt="">
                        <img src="{{ asset('assets/images/resources/before-and-after-img-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Before And After End -->
    
    <!-- Testimonial One Start -->
    <section class="testimonial-one">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style2">
                <h2 class="section-title__title title-animation">
                    Lo que Dicen Nuestros Clientes
                </h2>
            </div>
            <div class="testimonial-one__top">
                <div class="row">
                    <!-- Testimonial One Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-one-client-1-1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-one__client-content">
                                    <h5 class="testimonial-one__client-name"><a
                                            href="{{ route('testimonials') }}">María González</a></h5>
                                    <p class="testimonial-one__client-sub-title">Madre de Quinceañera</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Excelente servicio y atención. El salón es hermoso y el 
                                personal muy profesional. La fiesta de XV años fue perfecta.</p>
                            <div class="testimonial-one__rating-and-review">
                                <ul class="list-unstyled testimonial-one__rating">
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-3.png') }}" alt="">
                                        </div>
                                    </li>
                                </ul>
                                <p class="testimonial-one__review">4.7/5 Excelente</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial One Single End -->
                    <!-- Testimonial One Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-one-client-1-2.jpg') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-one__client-content">
                                    <h5 class="testimonial-one__client-name"><a href="{{ route('testimonials') }}">Roberto
                                            Martínez</a></h5>
                                    <p class="testimonial-one__client-sub-title">Novio</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Nuestra boda fue un sueño hecho realidad. Las instalaciones 
                                son preciosas y la atención de primera calidad.</p>
                            <div class="testimonial-one__rating-and-review">
                                <ul class="list-unstyled testimonial-one__rating">
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-3.png') }}" alt="">
                                        </div>
                                    </li>
                                </ul>
                                <p class="testimonial-one__review">4.7/5 Excelente</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial One Single End -->
                    <!-- Testimonial One Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-one-client-1-3.jpg') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-one__client-content">
                                    <h5 class="testimonial-one__client-name"><a href="{{ route('testimonials') }}">Ana
                                            Rodríguez</a></h5>
                                    <p class="testimonial-one__client-sub-title">Organizadora</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Como organizadora de eventos, puedo decir que Los Arcos es 
                                uno de los mejores salones de la zona.</p>
                            <div class="testimonial-one__rating-and-review">
                                <ul class="list-unstyled testimonial-one__rating">
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-3.png') }}" alt="">
                                        </div>
                                    </li>
                                </ul>
                                <p class="testimonial-one__review">4.7/5 Excelente</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial One Single End -->
                </div>
            </div>
            <div class="testimonial-one__bottom">
                <div class="row">
                    <!-- Testimonial One Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="600ms">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-one-client-1-4.jpg') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-one__client-content">
                                    <h5 class="testimonial-one__client-name"><a href="{{ route('testimonials') }}">Luis
                                            Hernández</a></h5>
                                    <p class="testimonial-one__client-sub-title">Padre de Familia</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Celebramos el bautizo de nuestro hijo en Los Arcos y todo 
                                salió perfecto. El ambiente familiar hizo la diferencia.</p>
                            <div class="testimonial-one__rating-and-review">
                                <ul class="list-unstyled testimonial-one__rating">
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-3.png') }}" alt="">
                                        </div>
                                    </li>
                                </ul>
                                <p class="testimonial-one__review">4.7/5 Excelente</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial One Single End -->
                    <!-- Testimonial One Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="800ms">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-one-client-1-5.jpg') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-one__client-content">
                                    <h5 class="testimonial-one__client-name"><a href="{{ route('testimonials') }}">Carmen
                                            López</a></h5>
                                    <p class="testimonial-one__client-sub-title">Cliente Frecuente</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">He celebrado varios eventos familiares en Los Arcos. 
                                Siempre recibimos un trato cordial y profesional.</p>
                            <div class="testimonial-one__rating-and-review">
                                <ul class="list-unstyled testimonial-one__rating">
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-2.png') }}" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial-one__rating-icon">
                                            <img src="{{ asset('assets/images/icon/star-icon-3.png') }}" alt="">
                                        </div>
                                    </li>
                                </ul>
                                <p class="testimonial-one__review">4.7/5 Excelente</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial One Single End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial One End -->
    
    <!--Team One Start -->
    <section class="team-one">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Nuestro Equipo <br>
                    Profesionales a tu Servicio</h2>
            </div>
            <div class="row">
                <!--Team One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="team-one__sinlge">
                        <div class="team-one__img">
                            <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__social">
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                                <a href="#"><span class="fab fa-whatsapp"></span></a>
                            </div>
                            <p class="team-one__sub-title">Fundador y Director</p>
                            <h3 class="team-one__title"><a href="{{ route('team-details') }}">Guido Vara Moreno</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team One Single End -->
                <!--Team One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="team-one__sinlge">
                        <div class="team-one__img">
                            <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__social">
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                                <a href="#"><span class="fab fa-whatsapp"></span></a>
                            </div>
                            <p class="team-one__sub-title">Co-fundadora</p>
                            <h3 class="team-one__title"><a href="{{ route('team-details') }}">Paula Contreras Vega</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team One Single End -->
                <!--Team One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="600ms">
                    <div class="team-one__sinlge">
                        <div class="team-one__img">
                            <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__social">
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                                <a href="#"><span class="fab fa-whatsapp"></span></a>
                            </div>
                            <p class="team-one__sub-title">Coordinador de Eventos</p>
                            <h3 class="team-one__title"><a href="{{ route('team-details') }}">Alex Vara Contreras</a></h3>
                        </div>
                    </div>
                </div>
                <!--Team One Single End -->
            </div>
        </div>
    </section>
    <!--Team One End -->
    
    <!-- Blog One Start -->
    <section class="blog-one blog-three">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Consejos y Tips para <br> Eventos Perfectos
                </h2>
            </div>
            <div class="row">
                <!-- Blog One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-1.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__content-shape-1"
                                style="background-image: url({{ asset('assets/images/shapes/blog-one-content-shape-1.png') }});">
                            </div>
                            <div class="blog-one__date-and-title-box">
                                <div class="blog-one__date">
                                    <h3>15</h3>
                                    <p>Ene 2024</p>
                                </div>
                                <div class="blog-one__title-box">
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Cómo Planear la Boda
                                            <br>
                                            Perfecta en Los Arcos</a></h3>
                                </div>
                            </div>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn blog-one__btn">Leer Más <span
                                        class="icon-up-right-arrow"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single End -->
                <!-- Blog One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-2.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__content-shape-1"
                                style="background-image: url({{ asset('assets/images/shapes/blog-one-content-shape-1.png') }});">
                            </div>
                            <div class="blog-one__date-and-title-box">
                                <div class="blog-one__date">
                                    <h3>22</h3>
                                    <p>Ene 2024</p>
                                </div>
                                <div class="blog-one__title-box">
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Ideas de Decoración
                                            <br> para XV Años Inolvidables</a></h3>
                                </div>
                            </div>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn blog-one__btn">Leer Más <span
                                        class="icon-up-right-arrow"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single End -->
                <!-- Blog One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/images/blog/blog-1-3.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <div class="blog-one__content-shape-1"
                                style="background-image: url({{ asset('assets/images/shapes/blog-one-content-shape-1.png') }});">
                            </div>
                            <div class="blog-one__date-and-title-box">
                                <div class="blog-one__date">
                                    <h3>28</h3>
                                    <p>Ene 2024</p>
                                </div>
                                <div class="blog-one__title-box">
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Guía para Elegir el Menú
                                            <br>
                                            Perfecto para tu Evento</a></h3>
                                </div>
                            </div>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn blog-one__btn">Leer Más <span
                                        class="icon-up-right-arrow"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog One Single End -->
            </div>
        </div>
    </section>
    <!-- Blog One End -->
    
    <x-footer.footerStyleOne />
@endsection
