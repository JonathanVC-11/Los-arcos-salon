@extends('layouts.layoutCommon')
@section('title', 'Testimonials || tecture || tecture Laravel  Template')
@push('styles') 
    
<link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/page-header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/error-page.css') }}">
 
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <x-page-header title="Testimonials" subtitle="Testimonials" />


        <!--Page Header End-->

        <!--Testimonial Page Start-->
        <section class="testimonial-page">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <div class="container">
                <div class="row">
                    <!-- Testimonial One Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-one-client-1-1.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-one__client-content">
                                    <h5 class="testimonial-one__client-name"><a href="{{ route('testimonials') }}">Madriya
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
                                    <img src="{{ asset('assets/images/testimonial/testimonial-one-client-1-2.jpg') }}" alt="">
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
                                    <img src="{{ asset('assets/images/testimonial/testimonial-one-client-1-3.jpg') }}" alt="">
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
                    <!-- Testimonial One Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="600ms">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-one-client-1-4.jpg') }}" alt="">
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
                                    <img src="{{ asset('assets/images/testimonial/testimonial-one-client-1-5.jpg') }}" alt="">
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
                    <!-- Testimonial One Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="1000ms">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="{{ asset('assets/images/testimonial/testimonial-one-client-1-6.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-one__client-content">
                                    <h5 class="testimonial-one__client-name"><a href="{{ route('testimonials') }}">Alisha
                                            Martin</a></h5>
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
        </section>
        <!--Testimonial Page End-->

        <!--Site Footer Start-->
        

    <x-footer.footerStyleOne />
@endsection