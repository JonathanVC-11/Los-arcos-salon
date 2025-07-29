@extends('layouts.layoutCommon')
@section('title', 'Services || tecture || tecture Laravel  Template')
@push('styles') 
    
<link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/page-header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/error-page.css') }}">
 
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <x-page-header title="Services" subtitle="Services" />


        <!--Page Header End-->

        <!-- Services One Start -->
        <section class="services-one">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
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
                                style="background-image: url({{ asset('assets/images/shapes/services-one-shape-1.png') }});"></div>
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
                                style="background-image: url({{ asset('assets/images/shapes/services-one-shape-1.png') }});"></div>
                            <div class="services-one__content-box">
                                <h3 class="services-one__title"><a href="{{ route('eden-home-styling') }}">Eden Home Styling</a>
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
                                style="background-image: url({{ asset('assets/images/shapes/services-one-shape-1.png') }});"></div>
                            <div class="services-one__content-box">
                                <h3 class="services-one__title"><a href="{{ route('harmony-interiors') }}">Harmony Interiors</a>
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

        <!-- Awards One Start -->
        <section class="awards-one">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
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
                        <div class="awards-one__right wow slideInRight" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
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

        <!--Brand One Start-->
        <section class="brand-one">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <div class="container">
                <div class="brand-one__carousel owl-theme owl-carousel">
                    <div class="item">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-3.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-4.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-5.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="brand-one__img">
                            <a href="#"><img src="{{ asset('assets/images/brand/brand-1-6.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

        <!--Site Footer Start-->
        

    <x-footer.footerStyleOne />
@endsection