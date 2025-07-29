@extends('layouts.layoutCommon')
@section('title', 'About || tecture || tecture Laravel  Template')
@push('styles') 
    
<link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/page-header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/error-page.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/google-map.css') }}">
 
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <x-page-header title="About Us" subtitle="About Us" />


        <!--Page Header End-->

        <!--Services Four Start-->
        <section class="services-four">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style2">
                    <h2 class="section-title__title title-animation">Elevate Your Spac Transform Your <br>
                        Home With Expert Design</h2>
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
                                <h4 class="services-four__title"><a href="{{ route('services') }}">Reasonable Prices</a>
                                </h4>
                                <p class="services-four__text">As well as getting to fly to different dest
                                    as part of their job, airplane pilots get big</p>
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
                                <h4 class="services-four__title"><a href="{{ route('services') }}">Reasonable Services</a>
                                </h4>
                                <p class="services-four__text">As well as getting to fly to different dest
                                    as part of their job, airplane pilots get big</p>
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
                                <h4 class="services-four__title"><a href="{{ route('services') }}">360 PANORAMA & 3D
                                        VIRTUAL
                                    </a>
                                </h4>
                                <p class="services-four__text">As well as getting to fly to different dest
                                    as part of their job, airplane pilots get big</p>
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
                                        <img src="{{ asset('assets/images/resources/about-one-design-make-img-1.jpg') }}" alt="">
                                    </div>
                                    <div class="about-one__design-make-content">
                                        <h5 class="about-one__design-make-title">Design Make Dream</h5>
                                        <p class="about-one__design-make-text">Rapidiously evolve pandemic experiences
                                            <br>
                                            and Dramatically administrate</p>
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

        <!-- Projects One Start -->
        <section class="projects-one projects-four">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
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
                                        <h4 class="projects-one__title"><a href="#">Neoclassical Sofa</a></h4>
                                        <p class="projects-one__sub-title">Interior Design</p>
                                    </div>
                                    <div class="projects-one__arrow">
                                        <a href="{{ asset('assets/images/project/projects-1-1.jpg') }}" class="img-popup"><span
                                                class="icon-up-right-arrow-1"></span></a>
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
                                        <h4 class="projects-one__title"><a href="#">Neoclassical Sofa</a></h4>
                                        <p class="projects-one__sub-title">Interior Design</p>
                                    </div>
                                    <div class="projects-one__arrow">
                                        <a href="{{ asset('assets/images/project/projects-1-2.jpg') }}" class="img-popup"><span
                                                class="icon-up-right-arrow-1"></span></a>
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
                                        <h4 class="projects-one__title"><a href="#">Neoclassical Sofa</a></h4>
                                        <p class="projects-one__sub-title">Interior Design</p>
                                    </div>
                                    <div class="projects-one__arrow">
                                        <a href="{{ asset('assets/images/project/projects-1-3.jpg') }}" class="img-popup"><span
                                                class="icon-up-right-arrow-1"></span></a>
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
                                        <h4 class="projects-one__title"><a href="#">Neoclassical Sofa</a></h4>
                                        <p class="projects-one__sub-title">Interior Design</p>
                                    </div>
                                    <div class="projects-one__arrow">
                                        <a href="{{ asset('assets/images/project/projects-1-4.jpg') }}" class="img-popup"><span
                                                class="icon-up-right-arrow-1"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects One End -->

        <!--Team One Start -->
        <section class="team-one">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <h2 class="section-title__title title-animation">Where Inovation Meet <br>
                        Interior Design</h2>
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
                                    <a href="#"><span class="fab fa-vine"></span></a>
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                                <p class="team-one__sub-title">Teka dibe bacchu</p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Jonathan S. Wilcox</a></h3>
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
                                    <a href="#"><span class="fab fa-vine"></span></a>
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                                <p class="team-one__sub-title">Teka dibe bacchu</p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Jessica Brown</a></h3>
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
                                    <a href="#"><span class="fab fa-vine"></span></a>
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                                <p class="team-one__sub-title">Teka dibe bacchu</p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Jonathan Trot</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End -->
                </div>
            </div>
        </section>
        <!--Team One End -->

        <!-- Sliding Text One Start -->
        <section class="sliding-text-one">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <div class="sliding-text-one__wrap">
                <ul class="sliding-text__list list-unstyled marquee_mode">
                    <li>
                        <h2 data-hover="Interior Design" class="sliding-text__title">Interior Design
                            <img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></h2>
                    </li>
                    <li>
                        <h2 data-hover="luxury homes" class="sliding-text__title">luxury homes
                            <img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></h2>
                    </li>
                    <li>
                        <h2 data-hover="construction simulator" class="sliding-text__title">construction simulator
                            <img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></h2>
                    </li>
                    <li>
                        <h2 data-hover="construction simulator" class="sliding-text__title">construction simulator
                            <img src="{{ asset('assets/images/icon/star-icon.png') }}" alt=""></h2>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Sliding Text One End -->

        <!--Testimonial Two Start-->
        <section class="testimonial-two testimonial-three">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <h2 class="section-title__title title-animation">
                        What Our Clients Say
                    </h2>
                </div>
                <div class="testimonial-two__bottom">
                    <div class="testimonial-two__carousel owl-carousel owl-theme thm-owl__carousel">
                        <!--Testimonial Two Single Start-->
                        <div class="item">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-shape-1"
                                    style="background-image: url({{ asset('assets/images/shapes/testimonial-two-single-shape-1.png') }});">
                                </div>
                                <div class="testimonial-two__img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-two__shape-1">
                                    <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}" alt="">
                                </div>
                                <ul class="testimonial-two__ratting list-unstyled">
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                </ul>
                                <h3 class="testimonial-two__name"><a href="{{ route('testimonials') }}">Michael Angenla</a></h3>
                                <p class="testimonial-two__sub-title">Project Manager</p>
                                <p class="testimonial-two__text">Divide carefully fruitsome sixth form beginning
                                    replenis together midst lesser to airs there brought forth him she us one seas can
                                    was void can be awrare were nots multiply image female best project.
                                </p>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                        <!--Testimonial Two Single Start-->
                        <div class="item">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-shape-1"
                                    style="background-image: url({{ asset('assets/images/shapes/testimonial-two-single-shape-1.png') }});">
                                </div>
                                <div class="testimonial-two__img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-two__shape-1">
                                    <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}" alt="">
                                </div>
                                <ul class="testimonial-two__ratting list-unstyled">
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                </ul>
                                <h3 class="testimonial-two__name"><a href="{{ route('testimonials') }}">Brenda Gregory</a></h3>
                                <p class="testimonial-two__sub-title">CEO of Apple</p>
                                <p class="testimonial-two__text">Divide carefully fruitsome sixth form beginning
                                    replenis together midst lesser to airs there brought forth him she us one seas can
                                    was void can be awrare were nots multiply image female best project.
                                </p>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                        <!--Testimonial Two Single Start-->
                        <div class="item">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-shape-1"
                                    style="background-image: url({{ asset('assets/images/shapes/testimonial-two-single-shape-1.png') }});">
                                </div>
                                <div class="testimonial-two__img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-2-3.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-two__shape-1">
                                    <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}" alt="">
                                </div>
                                <ul class="testimonial-two__ratting list-unstyled">
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                </ul>
                                <h3 class="testimonial-two__name"><a href="{{ route('testimonials') }}">Edward Monroe</a></h3>
                                <p class="testimonial-two__sub-title">Senior Designer</p>
                                <p class="testimonial-two__text">Divide carefully fruitsome sixth form beginning
                                    replenis together midst lesser to airs there brought forth him she us one seas can
                                    was void can be awrare were nots multiply image female best project.
                                </p>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                        <!--Testimonial Two Single Start-->
                        <div class="item">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-shape-1"
                                    style="background-image: url({{ asset('assets/images/shapes/testimonial-two-single-shape-1.png') }});">
                                </div>
                                <div class="testimonial-two__img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-2-4.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-two__shape-1">
                                    <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}" alt="">
                                </div>
                                <ul class="testimonial-two__ratting list-unstyled">
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                </ul>
                                <h3 class="testimonial-two__name"><a href="{{ route('testimonials') }}">Alisa Brown</a></h3>
                                <p class="testimonial-two__sub-title">Project Manager</p>
                                <p class="testimonial-two__text">Divide carefully fruitsome sixth form beginning
                                    replenis together midst lesser to airs there brought forth him she us one seas can
                                    was void can be awrare were nots multiply image female best project.
                                </p>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                        <!--Testimonial Two Single Start-->
                        <div class="item">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-shape-1"
                                    style="background-image: url({{ asset('assets/images/shapes/testimonial-two-single-shape-1.png') }});">
                                </div>
                                <div class="testimonial-two__img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-2-5.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-two__shape-1">
                                    <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}" alt="">
                                </div>
                                <ul class="testimonial-two__ratting list-unstyled">
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                </ul>
                                <h3 class="testimonial-two__name"><a href="{{ route('testimonials') }}">Brenda heyden</a></h3>
                                <p class="testimonial-two__sub-title">CEO of Apple</p>
                                <p class="testimonial-two__text">Divide carefully fruitsome sixth form beginning
                                    replenis together midst lesser to airs there brought forth him she us one seas can
                                    was void can be awrare were nots multiply image female best project.
                                </p>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                        <!--Testimonial Two Single Start-->
                        <div class="item">
                            <div class="testimonial-two__single">
                                <div class="testimonial-two__single-shape-1"
                                    style="background-image: url({{ asset('assets/images/shapes/testimonial-two-single-shape-1.png') }});">
                                </div>
                                <div class="testimonial-two__img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-2-6.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-two__shape-1">
                                    <img src="{{ asset('assets/images/shapes/testimonial-two-shape-1.png') }}" alt="">
                                </div>
                                <ul class="testimonial-two__ratting list-unstyled">
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                    <li><span class="icon-pointed-star"></span></li>
                                </ul>
                                <h3 class="testimonial-two__name"><a href="{{ route('testimonials') }}">Kark Edward</a></h3>
                                <p class="testimonial-two__sub-title">Senior Designer</p>
                                <p class="testimonial-two__text">Divide carefully fruitsome sixth form beginning
                                    replenis together midst lesser to airs there brought forth him she us one seas can
                                    was void can be awrare were nots multiply image female best project.
                                </p>
                            </div>
                        </div>
                        <!--Testimonial Two Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Two End-->

        <!--Blog Two Start -->
        <section class="blog-two">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <div class="container">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <h2 class="section-title__title title-animation">Unleash Your Creativity with <br> Interior
                        Inspiration</h2>
                </div>
                <div class="blog-two__carousel owl-theme owl-carousel">
                    <!--Blog Two Single Start -->
                    <div class="item">
                        <div class="blog-two__single">
                            <div class="blog-two__img">
                                <img src="{{ asset('assets/images/blog/blog-2-1.jpg') }}" alt="">
                                <div class="blog-two__date">
                                    <p>17</p>
                                    <h5>Dec</h5>
                                </div>
                                <div class="blog-two__btn-box">
                                    <a href="{{ route('blog-details') }}" class="thm-btn blog-two__btn">More Details <span
                                            class="icon-up-right-arrow"></span> </a>
                                </div>
                            </div>
                            <div class="blog-two__content">
                                <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">Inspiring Designs for Inspired
                                        Where
                                        InnovationMeets</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog Two Single End -->
                    <!--Blog Two Single Start -->
                    <div class="item">
                        <div class="blog-two__single">
                            <div class="blog-two__img">
                                <img src="{{ asset('assets/images/blog/blog-2-2.jpg') }}" alt="">
                                <div class="blog-two__date">
                                    <p>17</p>
                                    <h5>Dec</h5>
                                </div>
                                <div class="blog-two__btn-box">
                                    <a href="{{ route('blog-details') }}" class="thm-btn blog-two__btn">More Details <span
                                            class="icon-up-right-arrow"></span> </a>
                                </div>
                            </div>
                            <div class="blog-two__content">
                                <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">It is a long established fact
                                        that a reader will be distracted</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog Two Single End -->
                    <!--Blog Two Single Start -->
                    <div class="item">
                        <div class="blog-two__single">
                            <div class="blog-two__img">
                                <img src="{{ asset('assets/images/blog/blog-2-3.jpg') }}" alt="">
                                <div class="blog-two__date">
                                    <p>17</p>
                                    <h5>Dec</h5>
                                </div>
                                <div class="blog-two__btn-box">
                                    <a href="{{ route('blog-details') }}" class="thm-btn blog-two__btn">More Details <span
                                            class="icon-up-right-arrow"></span> </a>
                                </div>
                            </div>
                            <div class="blog-two__content">
                                <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">Lorem Ipsum is simply dummy text
                                        of the printing and typesetting</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog Two Single End -->
                    <!--Blog Two Single Start -->
                    <div class="item">
                        <div class="blog-two__single">
                            <div class="blog-two__img">
                                <img src="{{ asset('assets/images/blog/blog-2-1.jpg') }}" alt="">
                                <div class="blog-two__date">
                                    <p>17</p>
                                    <h5>Dec</h5>
                                </div>
                                <div class="blog-two__btn-box">
                                    <a href="{{ route('blog-details') }}" class="thm-btn blog-two__btn">More Details <span
                                            class="icon-up-right-arrow"></span> </a>
                                </div>
                            </div>
                            <div class="blog-two__content">
                                <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">Inspiring Designs for Inspired
                                        Where
                                        InnovationMeets</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog Two Single End -->
                    <!--Blog Two Single Start -->
                    <div class="item">
                        <div class="blog-two__single">
                            <div class="blog-two__img">
                                <img src="{{ asset('assets/images/blog/blog-2-2.jpg') }}" alt="">
                                <div class="blog-two__date">
                                    <p>17</p>
                                    <h5>Dec</h5>
                                </div>
                                <div class="blog-two__btn-box">
                                    <a href="{{ route('blog-details') }}" class="thm-btn blog-two__btn">More Details <span
                                            class="icon-up-right-arrow"></span> </a>
                                </div>
                            </div>
                            <div class="blog-two__content">
                                <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">It is a long established fact
                                        that a reader will be distracted</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog Two Single End -->
                    <!--Blog Two Single Start -->
                    <div class="item">
                        <div class="blog-two__single">
                            <div class="blog-two__img">
                                <img src="{{ asset('assets/images/blog/blog-2-3.jpg') }}" alt="">
                                <div class="blog-two__date">
                                    <p>17</p>
                                    <h5>Dec</h5>
                                </div>
                                <div class="blog-two__btn-box">
                                    <a href="{{ route('blog-details') }}" class="thm-btn blog-two__btn">More Details <span
                                            class="icon-up-right-arrow"></span> </a>
                                </div>
                            </div>
                            <div class="blog-two__content">
                                <h3 class="blog-two__title"><a href="{{ route('blog-details') }}">Lorem Ipsum is simply dummy text
                                        of the printing and typesetting</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog Two Single End -->
                </div>
            </div>
        </section>
        <!--Blog Two End -->

        <!--Site Footer Start-->
        

    <x-footer.footerStyleOne />
@endsection