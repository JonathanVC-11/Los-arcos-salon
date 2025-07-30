@extends('layouts.layoutStyleOne')
@section('title', 'Inicio || Salón Los Arcos || El lugar perfecto para tus eventos')
@section('content')
    <x-strickyHeaderOne />

    <!-- Main Slider Start -->
    <section class="main-slider">
        <div class="main-slider__carousel owl-carousel owl-theme">
            <div class="item">
                <div class="main-slider__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/slider-1-1.jpg') }});">
                </div>
                <div class="main-slider__shape-1"></div>
                <div class="main-slider__shape-2"></div>
                <div class="main-slider__shape-3"></div>
                <div class="main-slider__shape-4"></div>
                <div class="container">
                    <div class="main-slider__content">
                        <h2 class="main-slider__title">Salón Los Arcos <br> El lugar perfecto <br> para tus eventos
                            especiales</h2>
                        <div class="main-slider__btn-box">
                            <a href="{{ route('about') }}" class="thm-btn main-slider__btn">Conoce Más <span
                                    class="icon-up-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main-slider__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/slider-1-2.jpg') }});">
                </div>
                <div class="main-slider__shape-1"></div>
                <div class="main-slider__shape-2"></div>
                <div class="main-slider__shape-3"></div>
                <div class="main-slider__shape-4"></div>
                <div class="container">
                    <div class="main-slider__content">
                        <h2 class="main-slider__title">Capacidad para <br> 280 personas <br> con estilo colonial rústico
                        </h2>
                        <div class="main-slider__btn-box">
                            <a href="{{ route('about') }}" class="thm-btn main-slider__btn">Nuestros Servicios <span
                                    class="icon-up-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main-slider__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/slider-1-3.jpg') }});">
                </div>
                <div class="main-slider__shape-1"></div>
                <div class="main-slider__shape-2"></div>
                <div class="main-slider__shape-3"></div>
                <div class="main-slider__shape-4"></div>
                <div class="container">
                    <div class="main-slider__content">
                        <h2 class="main-slider__title">Empresa familiar <br> con más de 10 años <br> de experiencia</h2>
                        <div class="main-slider__btn-box">
                            <a href="{{ route('contact') }}" class="thm-btn main-slider__btn">Cotiza Ahora <span
                                    class="icon-up-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Main Slider End -->

    <!--Feature One Start -->
    <section class="feature-one">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="feature-one__inner">
                <ul class="list-unstyled feature-one__list">
                    <li class="wow fadeInLeft" data-wow-delay="100ms">
                        <div class="icon">
                            <span class="icon-engineer"></span>
                        </div>
                        <div class="text">
                            <p>
                                <a href="{{ route('services') }}">Instalaciones Acondicionadas <br>
                                    y Seguras para Todo Tipo de Eventos</a>
                            </p>
                        </div>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="200ms">
                        <div class="icon">
                            <span class="icon-workstations"></span>
                        </div>
                        <div class="text">
                            <p><a href="{{ route('services') }}">Mobiliario Completo <br>
                                    y Servicio de Banquetes</a></p>
                        </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-delay="300ms">
                        <div class="icon">
                            <span class="icon-cyber-security"></span>
                        </div>
                        <div class="text">
                            <p><a href="{{ route('services') }}">Amplio Estacionamiento <br>
                                    y Áreas Verdes</a></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Feature One End -->

    <!--About One Start -->
    <section class="about-one">
        <div class="about-one__shape1">
            <img class="float-bob-x" src="{{ asset('assets/images/shapes/about-v1-shape1.png') }}" alt="Shape">
        </div>
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-one__left">
                        <ul class="list-unstyled about-one__img-list">
                            <li>
                                <div class="about-one__img">
                                    <img src="{{ asset('assets/images/resources/about-one-1-1.jpg') }}" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="about-one__img">
                                    <img src="{{ asset('assets/images/resources/about-one-1-2.jpg') }}" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about-one__right wow fadeInLeft" data-wow-delay="300ms">
                        <div class="about-one__content">
                            <div class="about-one__content-shape-1"
                                style="background-image: url({{ asset('assets/images/shapes/about-one-content-shape-1.png') }});">
                            </div>
                            <div class="section-title sec-title-animation animation-style2">
                                <h2 class="section-title__title title-animation">Nuestra Historia <br>
                                    Salón Los Arcos</h2>
                            </div>
                            <div class="about-one__design-make">
                                <div class="about-one__design-make-img">
                                    <img src="{{ asset('assets/images/resources/about-one-design-make-img-1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="about-one__design-make-content">
                                    <h5 class="about-one__design-make-title">Desde 2014</h5>
                                    <p class="about-one__design-make-text">Fundado por don Guido Vara Moreno <br>
                                        y doña Paula Contreras Vega</p>
                                </div>
                            </div>
                            <p class="about-one__text">
                                Inició como área para eventos familiares y ante lo agradable del lugar y la buena vista,
                                se amplió para convertirlo en salón. El nombre "Los Arcos" proviene de la estructura
                                colonial y rústica, estructurado con ladrillo rojo y madera.
                            </p>
                            <ul class="about-one__progress-list list-unstyled">
                                <li class="about-one__progress">
                                    <h4 class="about-one__progress-title">Satisfacción del Cliente</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="95%">
                                            <div class="count-text">95%</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="about-one__progress">
                                    <h4 class="about-one__progress-title">Calidad del Servicio</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="98%">
                                            <div class="count-text">98%</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End -->

    <!-- Sliding Text One Start -->
    <section class="sliding-text-one">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="sliding-text-one__wrap">
            <ul class="sliding-text__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="Eventos Familiares" class="sliding-text__title">Eventos Familiares
                        <img src="{{ asset('assets/images/icon/star-icon.png') }}" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Bodas" class="sliding-text__title">Bodas
                        <img src="{{ asset('assets/images/icon/star-icon.png') }}" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="XV Años" class="sliding-text__title">XV Años
                        <img src="{{ asset('assets/images/icon/star-icon.png') }}" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Eventos Corporativos" class="sliding-text__title">Eventos Corporativos
                        <img src="{{ asset('assets/images/icon/star-icon.png') }}" alt="">
                    </h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text One End -->

    <!-- Services One Start -->
    <section class="services-one">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">
                    Nuestros Servicios <br>para tu Evento Perfecto
                </h2>
            </div>
            <div class="row">
                <!-- Services One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <div class="services-one__shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/services-one-shape-1.png') }});">
                        </div>
                        <div class="services-one__content-box">
                            <h3 class="services-one__title"><a href="{{ route('services') }}">Renta del Salón</a></h3>
                            <div class="services-one__img">
                                <img src="{{ asset('assets/images/services/services-1-1.jpg') }}" alt="">
                            </div>
                            <p class="services-one__text">480 metros cuadrados con capacidad para 280 personas,
                                estructura colonial rústica con ladrillo rojo y madera.</p>
                        </div>
                        <a href="{{ route('services') }}" class="services-one__btn"><span class="icon-next"></span>Más
                            Detalles</a>
                    </div>
                </div>
                <!-- Services One Single End -->
                <!-- Services One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-one__single">
                        <div class="services-one__shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/services-one-shape-1.png') }});">
                        </div>
                        <div class="services-one__content-box">
                            <h3 class="services-one__title"><a href="{{ route('services') }}">Mobiliario Completo</a>
                            </h3>
                            <div class="services-one__img">
                                <img src="{{ asset('assets/images/services/services-1-2.jpg') }}" alt="">
                            </div>
                            <p class="services-one__text">Mesas, sillas, mantelería y todo el mobiliario necesario
                                para que tu evento sea perfecto.</p>
                        </div>
                        <a href="{{ route('services') }}" class="services-one__btn"><span class="icon-next"></span>Más
                            Detalles</a>
                    </div>
                </div>
                <!-- Services One Single End -->
                <!-- Services One Single Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="services-one__single">
                        <div class="services-one__shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/services-one-shape-1.png') }});">
                        </div>
                        <div class="services-one__content-box">
                            <h3 class="services-one__title"><a href="{{ route('services') }}">Servicio de Banquetes</a>
                            </h3>
                            <div class="services-one__img">
                                <img src="{{ asset('assets/images/services/services-1-3.jpg') }}" alt="">
                            </div>
                            <p class="services-one__text">Personal de servicio profesional y menús personalizados
                                para hacer de tu evento una experiencia inolvidable.</p>
                        </div>
                        <a href="{{ route('services') }}" class="services-one__btn"><span class="icon-next"></span>Más
                            Detalles</a>
                    </div>
                </div>
                <!-- Services One Single End -->
            </div>
        </div>
    </section>
    <!-- Services One End -->

<!-- Projects One Start -->
<section class="projects-one">
    <div class="section-shape-1"
        style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
    <div class="projects-one__top">
        <div class="container">
            <div class="projects-one__top-inner">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <h2 class="section-title__title title-animation" style="margin-bottom: 30px;">
                        Galería de Eventos <br> realizados en Nuestro Salón
                    </h2>
                </div>
                <div class="projects-one__filter-box">
                    <ul class="projects-one__filter style1 post-filter list-unstyled clearfix">
                        <li data-filter=".filter-item" class="active"><span class="filter-text">Todos</span></li>
                        <li data-filter=".bodas"><span class="filter-text">Bodas</span></li>
                        <li data-filter=".xv"><span class="filter-text">XV Años</span></li>
                        <li data-filter=".familiares"><span class="filter-text">Familiares</span></li>
                        <li data-filter=".corporativos"><span class="filter-text">Corporativos</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="projects-one__bottom">
        <div class="container">
            <div class="row filter-layout">
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item bodas familiares">
                    <div class="projects-one__single">
                        <div class="projects-one__img-box">
                            <div class="projects-one__img" style="width: 100%; height: 250px; overflow: hidden; position: relative;">
                                <img src="{{ asset('assets/images/project/projects-1-1.jpg') }}" alt="" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                            </div>
                            <div class="projects-one__content">
                                <div class="projects-one__content-shape-1"
                                    style="background-image: url({{ asset('assets/images/shapes/projects-one-content-shape-1.png') }});">
                                </div>
                                <h4 class="projects-one__title"><a href="{{ route('project-details') }}">Boda
                                        Elegante</a></h4>
                                <p class="projects-one__sub-title">Evento Familiar</p>
                            </div>
                            <div class="projects-one__arrow">
                                <a href="{{ asset('assets/images/project/projects-1-1.jpg') }}"
                                    class="img-popup"><span class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item xv corporativos">
                    <div class="projects-one__single">
                        <div class="projects-one__img-box">
                            <div class="projects-one__img" style="width: 100%; height: 250px; overflow: hidden; position: relative;">
                                <img src="{{ asset('assets/images/project/projects-1-2.jpg') }}" alt="" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                            </div>
                            <div class="projects-one__content">
                                <div class="projects-one__content-shape-1"
                                    style="background-image: url({{ asset('assets/images/shapes/projects-one-content-shape-1.png') }});">
                                </div>
                                <h4 class="projects-one__title"><a href="{{ route('project-details') }}">Fiesta XV
                                        Años</a></h4>
                                <p class="projects-one__sub-title">Celebración Especial</p>
                            </div>
                            <div class="projects-one__arrow">
                                <a href="{{ asset('assets/images/project/projects-1-2.jpg') }}"
                                    class="img-popup"><span class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item bodas xv">
                    <div class="projects-one__single">
                        <div class="projects-one__img-box">
                            <div class="projects-one__img" style="width: 100%; height: 250px; overflow: hidden; position: relative;">
                                <img src="{{ asset('assets/images/project/projects-1-3.jpg') }}" alt="" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                            </div>
                            <div class="projects-one__content">
                                <div class="projects-one__content-shape-1"
                                    style="background-image: url({{ asset('assets/images/shapes/projects-one-content-shape-1.png') }});">
                                </div>
                                <h4 class="projects-one__title"><a href="{{ route('project-details') }}">Evento
                                        Corporativo</a></h4>
                                <p class="projects-one__sub-title">Reunión Empresarial</p>
                            </div>
                            <div class="projects-one__arrow">
                                <a href="{{ asset('assets/images/project/projects-1-3.jpg') }}"
                                    class="img-popup"><span class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item familiares corporativos">
                    <div class="projects-one__single">
                        <div class="projects-one__img-box">
                            <div class="projects-one__img" style="width: 100%; height: 250px; overflow: hidden; position: relative;">
                                <img src="{{ asset('assets/images/project/projects-1-4.jpg') }}" alt="" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                            </div>
                            <div class="projects-one__content">
                                <div class="projects-one__content-shape-1"
                                    style="background-image: url({{ asset('assets/images/shapes/projects-one-content-shape-1.png') }});">
                                </div>
                                <h4 class="projects-one__title"><a href="{{ route('project-details') }}">Reunión
                                        Familiar</a></h4>
                                <p class="projects-one__sub-title">Celebración Íntima</p>
                            </div>
                            <div class="projects-one__arrow">
                                <a href="{{ asset('assets/images/project/projects-1-4.jpg') }}"
                                    class="img-popup"><span class="icon-up-right-arrow-1"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Projects One End -->


    <!-- Design Interior Start -->
    <section class="design-interior">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-left sec-title-animation animation-style2">
                <h2 class="section-title__title title-animation">Nuestras Instalaciones <br>
                    Todo lo que Necesitas</h2>
            </div>
            <div class="design-interior__inner">
                <div class="row">
                    <div class="col-xl-10">
                        <div class="design-interior__left wow fadeInLeft" data-wow-delay="100ms">
                            <div class="design-interior__shape-1"
                                style="background-image: url({{ asset('assets/images/shapes/design-interior-shape-1.png') }});">
                            </div>
                            <ul class="list-unstyled design-interior__list">
                                <li>
                                    <div class="design-interior__single">
                                        <h4 class="design-interior__title">Cocina Equipada</h4>
                                        <p class="design-interior__text">Cocina completamente equipada para la preparación
                                            de alimentos y servicio de banquetes profesional.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="design-interior__single">
                                        <h4 class="design-interior__title">Sanitarios Separados</h4>
                                        <p class="design-interior__text">Sanitarios para hombres y mujeres,
                                            mantenidos en perfectas condiciones de limpieza.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="design-interior__single">
                                        <h4 class="design-interior__title">Sala Guardarropa</h4>
                                        <p class="design-interior__text">Espacio dedicado para guardar pertenencias
                                            y cambio de vestimenta de los invitados.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="design-interior__single">
                                        <h4 class="design-interior__title">Estacionamiento y Áreas Verdes</h4>
                                        <p class="design-interior__text">Amplio estacionamiento y áreas verdes ideales
                                            para actividades infantiles con inflables y juegos.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="design-interior__right wow fadeInRight" data-wow-delay="300ms">
                            <div class="design-interior__img">
                                <img src="{{ asset('assets/images/resources/design-interior-img-1.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Design Interior End -->

    <!-- Mission Vision Values Start -->
    <section class="services-one" style="padding-top: 60px;">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">
                    Nuestra Filosofía <br>Misión, Visión y Valores
                </h2>
            </div>
            <div class="row">
                <!-- Mission Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <div class="services-one__shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/services-one-shape-1.png') }});">
                        </div>
                        <div class="services-one__content-box">
                            <h3 class="services-one__title">Misión</h3>
                            <p class="services-one__text">
                                Consolidarse como el salón de eventos que brinda instalaciones acondicionadas,
                                suficientes y adecuadas al tipo de servicio que se contrate, con seguridad y diversidad.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Mission End -->
                <!-- Vision Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-one__single">
                        <div class="services-one__shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/services-one-shape-1.png') }});">
                        </div>
                        <div class="services-one__content-box">
                            <h3 class="services-one__title">Visión</h3>
                            <p class="services-one__text">
                                Ofrecer un servicio de excelencia, trato cordial, con enfoque de atención
                                a los clientes en un ambiente familiar.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Vision End -->
                <!-- Values Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="services-one__single">
                        <div class="services-one__shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/services-one-shape-1.png') }});">
                        </div>
                        <div class="services-one__content-box">
                            <h3 class="services-one__title">Valores</h3>
                            <div class="services-one__text">
                                <ul style="list-style: none; padding: 0; margin: 0;">
                                    <li>• Respeto • Integridad</li>
                                    <li>• Servicio • Lealtad</li>
                                    <li>• Empatía • Paciencia</li>
                                    <li>• Gratitud • Perseverancia</li>
                                    <li>• Libertad • Responsabilidad</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Values End -->
            </div>
        </div>
    </section>
    <!-- Mission Vision Values End -->




    <!-- Awards One Start -->
    <section class="awards-one">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style2">
                <h2 class="section-title__title title-animation">¿Listo para tu Evento? <br> Contáctanos Ahora</h2>
            </div>
            <div class="row">
                <div class="col-xl-7">
                    <div class="awards-one__left">
                        <ul class="list-unstyled awards-one__list">
                            <li class="wow fadeInLeft" data-wow-delay="100ms">
                                <div class="awards-one__title-box">
                                    <div class="awards-one__title-circle-box">
                                        <p>📞</p>
                                    </div>
                                    <h3 class="awards-one__title">Llámanos <br>
                                        para Cotizar</h3>
                                </div>
                                <div class="awards-one__year">
                                    <p>24/7</p>
                                </div>
                                <div class="awards-one__arrow">
                                    <a href="tel:+1234567890"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay="200ms">
                                <div class="awards-one__title-box">
                                    <div class="awards-one__title-circle-box">
                                        <p>📧</p>
                                    </div>
                                    <h3 class="awards-one__title">Envíanos un <br>
                                        Correo</h3>
                                </div>
                                <div class="awards-one__year">
                                    <p>Info</p>
                                </div>
                                <div class="awards-one__arrow">
                                    <a href="mailto:info@salonlosarcos.com"><span
                                            class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay="400ms">
                                <div class="awards-one__title-box">
                                    <div class="awards-one__title-circle-box">
                                        <p>📍</p>
                                    </div>
                                    <h3 class="awards-one__title">Visítanos <br>
                                        Personalmente</h3>
                                </div>
                                <div class="awards-one__year">
                                    <p>Hoy</p>
                                </div>
                                <div class="awards-one__arrow">
                                    <a href="{{ route('contact') }}"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="awards-one__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="awards-one__img-box">
                            <div class="awards-one__img">
                                <img src="{{ asset('assets/images/resources/awards-one-img-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Awards One End -->




    <x-footer.footerStyleOne />
@endsection
