@extends('layouts.layoutCommon')
@section('title', 'Team Details || tecture || tecture Laravel  Template')
@push('styles') 
    
<link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/page-header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/error-page.css') }}">
 
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <x-page-header title="Team Details" subtitle="Team Details" />


        <!--Page Header End-->

        <!--Team Details Start-->
        <section class="team-details">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="team-details__left">
                            <div class="team-details__img">
                                <img src="{{ asset('assets/images/team/team-details-img-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="team-details__right">
                            <ul class="team-details__progress-box list-unstyled">
                                <li>
                                    <div class="team-details__progress">
                                        <h4 class="team-details__progress-title">Success Rate - 69%</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="69%">
                                                <div class="count-text">69%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-details__progress">
                                        <h4 class="team-details__progress-title">Complete Work - 79%</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="79%">
                                                <div class="count-text">79%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-details__progress">
                                        <h4 class="team-details__progress-title">Satisfied Client - 95%</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="95%">
                                                <div class="count-text">95%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="team-details__address-box">
                                <div class="team-details__client-info">
                                    <ul class="team-details__client-info-list list-unstyled">
                                        <li>
                                            <p>Name</p>
                                            <h3>Archer Graham</h3>
                                        </li>
                                        <li>
                                            <p>Position:</p>
                                            <h3>WordPress Expert</h3>
                                        </li>
                                        <li>
                                            <p>Experience</p>
                                            <h3>37 Years</h3>
                                        </li>
                                    </ul>
                                    <ul
                                        class="team-details__client-info-list team-details__client-info-list-2 list-unstyled">
                                        <li>
                                            <p>Phone:</p>
                                            <h3><a href="tel:5265665665"> 52656 656 65</a></h3>
                                        </li>
                                        <li>
                                            <p>Email:</p>
                                            <h3><a href="mailto:youremail@gmail.com">youremail@gmail.com</a></h3>
                                        </li>
                                        <li>
                                            <p>Address:</p>
                                            <h3>Jones Street New York</h3>
                                        </li>
                                    </ul>
                                </div>
                                <div class="team-details__social">
                                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                    <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team Details End-->



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