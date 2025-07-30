@extends('layouts.layoutCommon')
@section('title', 'Acerca de || Los Arcos || Salón de Fiestas')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/page-header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/error-page.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/google-map.css') }}">
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <x-page-header title="Acerca de Nosotros" subtitle="Los Arcos" />
    
    <!--Page Header End-->
    
    <!--Services Four Start-->
    <section class="services-four">
        <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style2">
                <h2 class="section-title__title title-animation">Haz de tu Evento algo Especial <br>
                    Con Nuestros Servicios de Excelencia</h2>
            </div>
            <div class="row">
                <!--Services Four Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="services-four__single">
                        <div class="services-four__icon-box">
                            <div class="services-four__icon">
                                <span class="icon-passport"></span>
                            </div>
                        </div>
                        <div class="services-four__content">
                            <h4 class="services-four__title"><a href="{{ route('services') }}">Precios Accesibles</a></h4>
                            <p class="services-four__text">Ofrecemos tarifas competitivas y paquetes flexibles 
                                para que puedas celebrar tu evento sin preocupaciones</p>
                        </div>
                        <div class="services-four__arrow">
                            <a href="{{ route('services') }}"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Four Single End-->
                <!--Services Four Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-four__single">
                        <div class="services-four__icon-box">
                            <div class="services-four__icon">
                                <span class="icon-workstations"></span>
                            </div>
                        </div>
                        <div class="services-four__content">
                            <h4 class="services-four__title"><a href="{{ route('services') }}">Servicios Completos</a></h4>
                            <p class="services-four__text">Renta de salón, mobiliario, banquetes y personal 
                                de servicio especializado para tu evento</p>
                        </div>
                        <div class="services-four__arrow">
                            <a href="{{ route('services') }}"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Four Single End-->
                <!--Services Four Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="services-four__single">
                        <div class="services-four__icon-box">
                            <div class="services-four__icon">
                                <span class="icon-engineer"></span>
                            </div>
                        </div>
                        <div class="services-four__content">
                            <h4 class="services-four__title"><a href="{{ route('services') }}">Recorrido Virtual 360°</a></h4>
                            <p class="services-four__text">Conoce nuestras instalaciones desde la comodidad 
                                de tu hogar con nuestro tour virtual</p>
                        </div>
                        <div class="services-four__arrow">
                            <a href="{{ route('services') }}"><span class="icon-right-arrow"></span></a>
                        </div>
                    </div>
                </div>
                <!--Services Four Single End-->
            </div>
        </div>
    </section>
    <!--Services Four End-->
    
    <!--About One Start -->
    <section class="about-one">
        <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <ul class="list-unstyled about-one__img-list">
                            <li>
                                <div class="about-one__img">
                                    <img src="{{ asset('assets/images/resources/about-one-1-1.jpg') }}" alt="Salón Los Arcos">
                                </div>
                            </li>
                            <li>
                                <div class="about-one__img">
                                    <img src="{{ asset('assets/images/resources/about-one-1-2.jpg') }}" alt="Instalaciones Los Arcos">
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
                                <h2 class="section-title__title title-animation">Donde la Tradición se Encuentra <br>
                                    con la Celebración</h2>
                            </div>
                            <div class="about-one__design-make">
                                <div class="about-one__design-make-img">
                                    <img src="{{ asset('assets/images/resources/about-one-design-make-img-1.jpg') }}" alt="Los Arcos">
                                </div>
                                <div class="about-one__design-make-content">
                                    <h5 class="about-one__design-make-title">Desde 2014</h5>
                                    <p class="about-one__design-make-text">Fundado por Guido Vara Moreno y Paula Contreras Vega
                                        <br>
                                        Una empresa familiar con tradición</p>
                                </div>
                            </div>
                            <ul class="about-one__progress-list list-unstyled">
                                <li class="about-one__progress">
                                    <h4 class="about-one__progress-title">Capacidad del Salón</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="100%">
                                            <div class="count-text">280 personas</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="about-one__progress">
                                    <h4 class="about-one__progress-title">Superficie Total</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="100%">
                                            <div class="count-text">480 m²</div>
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
        <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="sliding-text-one__wrap">
            <ul class="sliding-text__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="Salón de Fiestas" class="sliding-text__title">Salón de Fiestas
                        <img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></h2>
                </li>
                <li>
                    <h2 data-hover="Eventos Familiares" class="sliding-text__title">Eventos Familiares
                        <img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></h2>
                </li>
                <li>
                    <h2 data-hover="Bodas y XV Años" class="sliding-text__title">Bodas y XV Años
                        <img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></h2>
                </li>
                <li>
                    <h2 data-hover="Celebraciones Especiales" class="sliding-text__title">Celebraciones Especiales
                        <img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text One End -->
    
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

    
    
    
    <!--Site Footer Start-->
    <x-footer.footerStyleOne />
@endsection