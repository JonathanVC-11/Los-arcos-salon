@extends('layouts.layoutOnepageStyleOne')
@section('title', 'Home One || tecture || tecture Laravel Template')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
@endpush

@section('content')
    <x-strickyHeaderOne />
    <!-- /.stricky-header -->



    <!-- Main Sllider Start -->
    <section class="main-slider" id="home">
        <div class="main-slider__carousel owl-carousel owl-theme">

            <div class="item">
                <div class="main-slider__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/slider-1-1.jpg') }});">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider__shape-1"></div>
                <div class="main-slider__shape-2"></div>
                <div class="main-slider__shape-3"></div>
                <div class="main-slider__shape-4"></div>
                <div class="container">
                    <div class="main-slider__content">
                        <div class="main-slider__video-link">
                            <a href="https://www.youtube.com/watch?v=OzUkvzyBttA" class="video-popup">
                                <div class="main-slider__video-icon">
                                    <span class="fa fa-play"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                        <h2 class="main-slider__title">Dedicated Team <br> Exceptional unique <br> architecture
                            Design Idea
                        </h2>
                        <div class="main-slider__btn-box">
                            <a href="{{ route('about') }}" class="thm-btn main-slider__btn">More Details <span
                                    class="icon-up-right-arrow"></span> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="main-slider__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/slider-1-2.jpg') }});">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider__shape-1"></div>
                <div class="main-slider__shape-2"></div>
                <div class="main-slider__shape-3"></div>
                <div class="main-slider__shape-4"></div>
                <div class="container">
                    <div class="main-slider__content">
                        <div class="main-slider__video-link">
                            <a href="https://www.youtube.com/watch?v=OzUkvzyBttA" class="video-popup">
                                <div class="main-slider__video-icon">
                                    <span class="fa fa-play"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                        <h2 class="main-slider__title">Dedicated Team <br> Exceptional unique <br> architecture
                            Design Idea
                        </h2>
                        <div class="main-slider__btn-box">
                            <a href="{{ route('about') }}" class="thm-btn main-slider__btn">More Details <span
                                    class="icon-up-right-arrow"></span> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="main-slider__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/slider-1-3.jpg') }});">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider__shape-1"></div>
                <div class="main-slider__shape-2"></div>
                <div class="main-slider__shape-3"></div>
                <div class="main-slider__shape-4"></div>
                <div class="container">
                    <div class="main-slider__content">
                        <div class="main-slider__video-link">
                            <a href="https://www.youtube.com/watch?v=OzUkvzyBttA" class="video-popup">
                                <div class="main-slider__video-icon">
                                    <span class="fa fa-play"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                        <h2 class="main-slider__title">Dedicated Team <br> Exceptional unique <br> architecture
                            Design Idea
                        </h2>
                        <div class="main-slider__btn-box">
                            <a href="{{ route('about') }}" class="thm-btn main-slider__btn">More Details <span
                                    class="icon-up-right-arrow"></span> </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Main Sllider Start -->

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
                            <p><a href="{{ route('services') }}">360 Panorama & 3D Virtual <br>
                                    Reality Experience</a></p>
                        </div>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay="200ms">
                        <div class="icon">
                            <span class="icon-workstations"></span>
                        </div>
                        <div class="text">
                            <p><a href="{{ route('services') }}">Crafted Furniture <br>
                                    and Sustainable Material</a></p>
                        </div>
                    </li>
                    <li class="wow fadeInRight" data-wow-delay="300ms">
                        <div class="icon">
                            <span class="icon-cyber-security"></span>
                        </div>
                        <div class="text">
                            <p><a href="{{ route('services') }}">Young, Enthusiastic and <br>
                                    Innovative Architects</a></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Feature One End -->

    <!--About One Start -->
    <section class="about-one" id="about">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
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
                                <h2 class="section-title__title title-animation">Where Inovation Meet <br>
                                    Interior Design</h2>
                            </div>
                            <div class="about-one__design-make">
                                <div class="about-one__design-make-img">
                                    <img src="{{ asset('assets/images/resources/about-one-design-make-img-1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="about-one__design-make-content">
                                    <h5 class="about-one__design-make-title">Design Make Dream</h5>
                                    <p class="about-one__design-make-text">Rapidiously evolve pandemic experiences
                                        <br>
                                        and Dramatically administrate
                                    </p>
                                </div>
                            </div>
                            <ul class="about-one__progress-list list-unstyled">
                                <li class="about-one__progress">
                                    <h4 class="about-one__progress-title">Architecture</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="85%">
                                            <div class="count-text">85%</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="about-one__progress">
                                    <h4 class="about-one__progress-title">Interior Design </h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="90%">
                                            <div class="count-text">90%</div>
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
                    <h2 data-hover="Interior Design" class="sliding-text__title">Interior Design
                        <img src="{{ asset('assets/images/icon/star-icon.png') }}" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="luxury homes" class="sliding-text__title">luxury homes
                        <img src="{{ asset('assets/images/icon/star-icon.png') }}" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="construction simulator" class="sliding-text__title">construction simulator
                        <img src="{{ asset('assets/images/icon/star-icon.png') }}" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="construction simulator" class="sliding-text__title">construction simulator
                        <img src="{{ asset('assets/images/icon/star-icon.png') }}" alt="">
                    </h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text One End -->

    <!-- Services One Start -->
    <section class="services-one" id="services">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">
                    Where Inovation Meet <br>Interior Design
                </h2>
            </div>
            <div class="row">
                <!-- Services One Sinlge Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <div class="services-one__shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/services-one-shape-1.png') }});">
                        </div>
                        <div class="services-one__content-box">
                            <h3 class="services-one__title"><a href="{{ route('evolve-space-designs') }}">Evolve Space
                                    Designs</a></h3>
                            <div class="services-one__img">
                                <img src="{{ asset('assets/images/services/services-1-1.jpg') }}" alt="">
                            </div>
                            <p class="services-one__text">A corporate business entity is an oit organization
                                formed with the a mans a</p>
                        </div>
                        <a href="{{ route('evolve-space-designs') }}" class="services-one__btn"><span
                                class="icon-next"></span>More Details</a>
                    </div>
                </div>
                <!-- Services One Sinlge End -->
                <!-- Services One Sinlge Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-one__single">
                        <div class="services-one__shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/services-one-shape-1.png') }});">
                        </div>
                        <div class="services-one__content-box">
                            <h3 class="services-one__title"><a href="{{ route('eden-home-styling') }}">Eden Home
                                    Styling</a>
                            </h3>
                            <div class="services-one__img">
                                <img src="{{ asset('assets/images/services/services-1-2.jpg') }}" alt="">
                            </div>
                            <p class="services-one__text">A corporate business entity is an oit organization
                                formed with the a mans a</p>
                        </div>
                        <a href="{{ route('eden-home-styling') }}" class="services-one__btn"><span
                                class="icon-next"></span>More Details</a>
                    </div>
                </div>
                <!-- Services One Sinlge End -->
                <!-- Services One Sinlge Start -->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="services-one__single">
                        <div class="services-one__shape-1"
                            style="background-image: url({{ asset('assets/images/shapes/services-one-shape-1.png') }});">
                        </div>
                        <div class="services-one__content-box">
                            <h3 class="services-one__title"><a href="{{ route('harmony-interiors') }}">Harmony
                                    Interiors</a>
                            </h3>
                            <div class="services-one__img">
                                <img src="{{ asset('assets/images/services/services-1-3.jpg') }}" alt="">
                            </div>
                            <p class="services-one__text">A corporate business entity is an oit organization
                                formed with the a mans a</p>
                        </div>
                        <a href="{{ route('harmony-interiors') }}" class="services-one__btn"><span
                                class="icon-next"></span>More Details</a>
                    </div>
                </div>
                <!-- Services One Sinlge End -->
            </div>
        </div>
    </section>
    <!-- Services One End -->

    <!-- Projects One Start -->
    <section class="projects-one" id="projects">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="projects-one__top">
            <div class="container">
                <div class="projects-one__top-inner">
                    <div class="section-title text-left sec-title-animation animation-style2">
                        <h2 class="section-title__title title-animation">We Elevate Your Brand's <br>
                            Daring Dedication.</h2>
                    </div>
                    <div class="projects-one__filter-box">
                        <ul class="projects-one__filter style1 post-filter list-unstyled clearfix">
                            <li data-filter=".filter-item" class="active"><span class="filter-text">All</span>
                            </li>
                            <li data-filter=".des"><span class="filter-text">Design</span></li>
                            <li data-filter=".ani"><span class="filter-text">Anime</span></li>
                            <li data-filter=".nat"><span class="filter-text">Nature</span></li>
                            <li data-filter=".anim"><span class="filter-text">Animal</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="projects-one__bottom">
            <div class="container">
                <div class="row filter-layout">
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item des nat anim">
                        <div class="projects-one__single">
                            <div class="projects-one__img-box">
                                <div class="projects-one__img">
                                    <img src="{{ asset('assets/images/project/projects-1-1.jpg') }}" alt="">
                                </div>
                                <div class="projects-one__content">
                                    <div class="projects-one__content-shape-1"
                                        style="background-image: url({{ asset('assets/images/shapes/projects-one-content-shape-1.png') }});">
                                    </div>
                                    <h4 class="projects-one__title"><a href="{{ route('project-details') }}">Neoclassical
                                            Sofa</a></h4>
                                    <p class="projects-one__sub-title">Interior Design</p>
                                </div>
                                <div class="projects-one__arrow">
                                    <a href="{{ asset('assets/images/project/projects-1-1.jpg') }}"
                                        class="img-popup"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item anim ani">
                        <div class="projects-one__single">
                            <div class="projects-one__img-box">
                                <div class="projects-one__img">
                                    <img src="{{ asset('assets/images/project/projects-1-2.jpg') }}" alt="">
                                </div>
                                <div class="projects-one__content">
                                    <div class="projects-one__content-shape-1"
                                        style="background-image: url({{ asset('assets/images/shapes/projects-one-content-shape-1.png') }});">
                                    </div>
                                    <h4 class="projects-one__title"><a href="{{ route('project-details') }}">Neoclassical
                                            Sofa</a></h4>
                                    <p class="projects-one__sub-title">Interior Design</p>
                                </div>
                                <div class="projects-one__arrow">
                                    <a href="{{ asset('assets/images/project/projects-1-2.jpg') }}"
                                        class="img-popup"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item des ani">
                        <div class="projects-one__single">
                            <div class="projects-one__img-box">
                                <div class="projects-one__img">
                                    <img src="{{ asset('assets/images/project/projects-1-3.jpg') }}" alt="">
                                </div>
                                <div class="projects-one__content">
                                    <div class="projects-one__content-shape-1"
                                        style="background-image: url({{ asset('assets/images/shapes/projects-one-content-shape-1.png') }});">
                                    </div>
                                    <h4 class="projects-one__title"><a href="{{ route('project-details') }}">Neoclassical
                                            Sofa</a></h4>
                                    <p class="projects-one__sub-title">Interior Design</p>
                                </div>
                                <div class="projects-one__arrow">
                                    <a href="{{ asset('assets/images/project/projects-1-3.jpg') }}"
                                        class="img-popup"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item des ani nat">
                        <div class="projects-one__single">
                            <div class="projects-one__img-box">
                                <div class="projects-one__img">
                                    <img src="{{ asset('assets/images/project/projects-1-4.jpg') }}" alt="">
                                </div>
                                <div class="projects-one__content">
                                    <div class="projects-one__content-shape-1"
                                        style="background-image: url({{ asset('assets/images/shapes/projects-one-content-shape-1.png') }});">
                                    </div>
                                    <h4 class="projects-one__title"><a href="{{ route('project-details') }}">Neoclassical
                                            Sofa</a></h4>
                                    <p class="projects-one__sub-title">Interior Design</p>
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
                <h2 class="section-title__title title-animation">Elevate Your Lifestyle With <br>
                    Our Designs Interior</h2>
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
                                        <h4 class="design-interior__title"><a
                                                href="{{ route('harmony-interiors') }}">Harmony
                                                Interiors</a></h4>
                                        <p class="design-interior__text">It is a long established fact that a reader
                                            will be distracted
                                            by the readable hkljklkl.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="design-interior__single">
                                        <h4 class="design-interior__title"><a href="{{ route('about') }}">Amman Rotane
                                                Hotel</a></h4>
                                        <p class="design-interior__text">It is a long established fact that a reader
                                            will be distracted
                                            by the readable hkljklkl.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="design-interior__single">
                                        <h4 class="design-interior__title"><a href="{{ route('about') }}">European Lard
                                                Sration</a>
                                        </h4>
                                        <p class="design-interior__text">It is a long established fact that a reader
                                            will be distracted
                                            by the readable hkljklkl.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="design-interior__single">
                                        <h4 class="design-interior__title"><a
                                                href="{{ route('harmony-interiors') }}">Harmony
                                                Interiors</a></h4>
                                        <p class="design-interior__text">It is a long established fact that a reader
                                            will be distracted
                                            by the readable hkljklkl.</p>
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

    <!-- Testimonial One Start -->
    <section class="testimonial-one" id="testimonial">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style2">
                <h2 class="section-title__title title-animation">
                    What Our Clients Say
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
                                            href="{{ route('testimonials') }}">Madriya
                                            Merin</a></h5>
                                    <p class="testimonial-one__client-sub-title">Spatial Design</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Arrangements are made to transport cargo by sea
                                to meet customers’ international transpor
                                tation needs.</p>
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
                                <p class="testimonial-one__review">4.7/6 on Disign</p>
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
                                    <h5 class="testimonial-one__client-name"><a href="{{ route('testimonials') }}">Mike
                                            Hardson</a></h5>
                                    <p class="testimonial-one__client-sub-title">Spatial Design</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Arrangements are made to transport cargo by sea
                                to meet customers’ international transpor
                                tation needs.</p>
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
                                <p class="testimonial-one__review">4.7/6 on Disign</p>
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
                                    <h5 class="testimonial-one__client-name"><a href="{{ route('testimonials') }}">Marlon
                                            Samuls</a></h5>
                                    <p class="testimonial-one__client-sub-title">Spatial Design</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Arrangements are made to transport cargo by sea
                                to meet customers’ international transpor
                                tation needs.</p>
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
                                <p class="testimonial-one__review">4.7/6 on Disign</p>
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
                                    <h5 class="testimonial-one__client-name"><a href="{{ route('testimonials') }}">Marco
                                            Jansen</a></h5>
                                    <p class="testimonial-one__client-sub-title">Spatial Design</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Arrangements are made to transport cargo by sea
                                to meet customers’ international transpor
                                tation needs.</p>
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
                                <p class="testimonial-one__review">4.7/6 on Disign</p>
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
                                    <h5 class="testimonial-one__client-name"><a href="{{ route('testimonials') }}">Mithel
                                            Mars</a></h5>
                                    <p class="testimonial-one__client-sub-title">Spatial Design</p>
                                </div>
                            </div>
                            <p class="testimonial-one__text">Arrangements are made to transport cargo by sea
                                to meet customers’ international transpor
                                tation needs.</p>
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
                                <p class="testimonial-one__review">4.7/6 on Disign</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial One Single End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial One End -->

    <!-- Video One Start -->
    <section class="video-one" id="video">
        <div class="video-one__inner">
            <div class="video-one__curved-circle">
                <div class="curved-circle">
                    Cool Branding And Development
                </div><!-- /.curved-circle -->
                <div class="video-one__video-link">
                    <a href="https://www.youtube.com/watch?v=OzUkvzyBttA" class="video-popup">
                        <div class="video-one__video-icon">
                            <span class="fa fa-play"></span>
                        </div>
                    </a>
                </div>
            </div><!-- /.curved-circle -->
            <div class="video-one__main-content">
                <div class="swiper-container" id="video-one__carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="video-one__main-content-inner">
                                <div class="video-one__main-content-bg"
                                    style="background-image: url({{ asset('assets/images/backgrounds/video-one-inner-content-bg-1-1.jpg') }});">
                                </div>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="video-one__main-content-inner">
                                <div class="video-one__main-content-bg"
                                    style="background-image: url({{ asset('assets/images/backgrounds/video-one-inner-content-bg-1-2.jpg') }});">
                                </div>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="video-one__main-content-inner">
                                <div class="video-one__main-content-bg"
                                    style="background-image: url({{ asset('assets/images/backgrounds/video-one-inner-content-bg-1-3.jpg') }});">
                                </div>
                            </div>
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
                <div class="video-one__nav">
                    <div class="swiper-button-prev" id="video-one__swiper-button-next">
                        <i class="icon-prev"></i>
                    </div>
                    <div class="swiper-button-next" id="video-one__swiper-button-prev">
                        <i class="icon-next"></i>
                    </div>
                </div>
            </div>

            <div class="video-one__thumb-box">
                <div class="swiper-container" id="video-one__thumb">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="video-one__img-holder-box">
                                <div class="video-one__img-holder">
                                    <img src="{{ asset('assets/images/resources/video-one-thumb-img-1-1.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="video-one__img-holder-box">
                                <div class="video-one__img-holder">
                                    <img src="{{ asset('assets/images/resources/video-one-thumb-img-1-2.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="video-one__img-holder-box">
                                <div class="video-one__img-holder">
                                    <img src="{{ asset('assets/images/resources/video-one-thumb-img-1-3.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video One End -->

    <!-- Awards One Start -->
    <section class="awards-one">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style2">
                <h2 class="section-title__title title-animation">Our Company Awards <br> & Achievements</h2>
            </div>
            <div class="row">
                <div class="col-xl-7">
                    <div class="awards-one__left">
                        <ul class="list-unstyled awards-one__list">
                            <li class="wow fadeInLeft" data-wow-delay="100ms">
                                <div class="awards-one__title-box">
                                    <div class="awards-one__title-circle-box">
                                        <p>W.</p>
                                    </div>
                                    <h3 class="awards-one__title">Boston Award For <br>
                                        Architecture</h3>
                                </div>
                                <div class="awards-one__year">
                                    <p>2024</p>
                                </div>
                                <div class="awards-one__arrow">
                                    <a href="{{ route('about') }}"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay="200ms">
                                <div class="awards-one__title-box">
                                    <div class="awards-one__title-circle-box">
                                        <p>W.</p>
                                    </div>
                                    <h3 class="awards-one__title">Boston Award For <br>
                                        Architecture</h3>
                                </div>
                                <div class="awards-one__year">
                                    <p>2025</p>
                                </div>
                                <div class="awards-one__arrow">
                                    <a href="{{ route('about') }}"><span class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay="400ms">
                                <div class="awards-one__title-box">
                                    <div class="awards-one__title-circle-box">
                                        <p>W.</p>
                                    </div>
                                    <h3 class="awards-one__title">Boston Award For <br>
                                        Architecture</h3>
                                </div>
                                <div class="awards-one__year">
                                    <p>2026</p>
                                </div>
                                <div class="awards-one__arrow">
                                    <a href="{{ route('about') }}"><span class="icon-up-right-arrow-1"></span></a>
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
                            <div class="awards-one__img-two">
                                <img src="{{ asset('assets/images/resources/awards-one-img-2.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Awards One End -->

    <!-- Blog One Start -->
    <section class="blog-one" id="blog">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Latest News & Articles From <br> The Blog Posts
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
                                    <h3>23</h3>
                                    <p>Sep 2024</p>
                                </div>
                                <div class="blog-one__title-box">
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Top 10 Modern
                                            Building
                                            <br>
                                            Design in Califronia, USA</a></h3>
                                </div>
                            </div>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn blog-one__btn">More Details <span
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
                                    <h3>13</h3>
                                    <p>Sep 2024</p>
                                </div>
                                <div class="blog-one__title-box">
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">It is a long
                                            established
                                            fact <br> that a reader will</a></h3>
                                </div>
                            </div>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn blog-one__btn">More Details <span
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
                                    <h3>04</h3>
                                    <p>Sep 2024</p>
                                </div>
                                <div class="blog-one__title-box">
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Lorem Ipsum is
                                            simply
                                            <br>
                                            dummy text of the printing</a></h3>
                                </div>
                            </div>
                            <div class="blog-one__btn-box">
                                <a href="{{ route('blog-details') }}" class="thm-btn blog-one__btn">More Details <span
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

    <!--Contact Page Start-->
    <section id="contact" class="contact-page pdt0">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="contact-page__inner">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="contact-page__left">
                            <div class="contact-page__information">
                                <h3 class="contact-page__information-title">Contact Informatlon</h3>
                                <ul class="contact-page__information-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pin"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Address</h3>
                                            <p>7515 Carriage Court, CA, 92236 USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-trading"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Contact Namber</h3>
                                            <p><a href="tel:66561598596969">( 6656) 1598596969</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-envelope-1"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Email Us</h3>
                                            <p><a href="mailto:shifamoni6790@gmail.com">shifamoni6790@gmail.com</a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-7 col-lg-7">
                        <div class="contact-page__right">
                            <h3 class="contact-page__contact-title">Get A Quote</h3>
                            <form id="contact-form" class="contact-page__form" action="assets/mail.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-page__input-box">
                                            <input type="text" name="name" placeholder="Your name" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-page__input-box">
                                            <input type="email" name="email" placeholder="Your Email"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-page__input-box">
                                            <input type="number" placeholder="Mobile" name="number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-page__input-box">
                                            <input type="text" placeholder="Company" name="company">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-page__input-box text-message-box">
                                            <textarea name="message" placeholder="Messege"></textarea>
                                        </div>
                                        <div class="contact-page__btn-box">
                                            <button type="submit" class="thm-btn contact-page__btn"
                                                data-loading-text="Please wait...">
                                                Get Started
                                                <span class="icon-up-right-arrow"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="ajax-response mb-0 error"></p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="brand-one__carousel owl-theme owl-carousel">
                <div class="item">
                    <div class="brand-one__img">
                        <a href="#"><img src="{{ asset('assets/images/brand/brand-1-1.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="item">
                    <div class="brand-one__img">
                        <a href="#"><img src="{{ asset('assets/images/brand/brand-1-2.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="item">
                    <div class="brand-one__img">
                        <a href="#"><img src="{{ asset('assets/images/brand/brand-1-3.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="item">
                    <div class="brand-one__img">
                        <a href="#"><img src="{{ asset('assets/images/brand/brand-1-4.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="item">
                    <div class="brand-one__img">
                        <a href="#"><img src="{{ asset('assets/images/brand/brand-1-5.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="item">
                    <div class="brand-one__img">
                        <a href="#"><img src="{{ asset('assets/images/brand/brand-1-6.png') }}"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->
    <x-footer.footerStyleOne />
@endsection
