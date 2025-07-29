@extends('layouts.layoutCommon')
@section('title', 'Team || tecture || tecture Laravel  Template')
@push('styles') 
    
<link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/page-header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/error-page.css') }}">
 
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <x-page-header title="Expert Team" subtitle="Expert Team" />


        <!--Page Header End-->

        <!--Team One Start -->
        <section class="team-one">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <div class="container">
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
                    <!--Team One Single Start -->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="900ms">
                        <div class="team-one__sinlge">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-4.jpg') }}" alt="">
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__social">
                                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#"><span class="fab fa-vine"></span></a>
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                                <p class="team-one__sub-title">Teka dibe bacchu</p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Ryan Bennet</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End -->
                    <!--Team One Single Start -->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="team-one__sinlge">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-5.jpg') }}" alt="">
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__social">
                                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#"><span class="fab fa-vine"></span></a>
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                                <p class="team-one__sub-title">Teka dibe bacchu</p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Alister Cook</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End -->
                    <!--Team One Single Start -->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="1500ms">
                        <div class="team-one__sinlge">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-6.jpg') }}" alt="">
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__social">
                                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#"><span class="fab fa-vine"></span></a>
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                                <p class="team-one__sub-title">Teka dibe bacchu</p>
                                <h3 class="team-one__title"><a href="{{ route('team-details') }}">Jonathan Campbel</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End -->
                </div>
            </div>
        </section>
        <!--Team One End -->

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