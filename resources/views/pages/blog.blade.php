@extends('layouts.layoutCommon')
@section('title', 'Blog || tecture || tecture Laravel  Template')
@push('styles') 
    
<link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/page-header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/error-page.css') }}">
 
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <x-page-header title="Blog" subtitle="Blog" />


        <!--Page Header End-->

        <!-- Blog One Start -->
        <section class="blog-one">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <div class="container">
                <div class="row">
                    <!-- Blog One Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
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
                                        <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Top 10 Modern Building
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
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
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
                                        <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">It is a long established
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
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms">
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
                                        <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Lorem Ipsum is simply
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
                    <!-- Blog One Single Start -->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="400ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-1-4.jpg') }}" alt="">
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__content-shape-1"
                                    style="background-image: url({{ asset('assets/images/shapes/blog-one-content-shape-1.png') }});">
                                </div>
                                <div class="blog-one__date-and-title-box">
                                    <div class="blog-one__date">
                                        <h3>09</h3>
                                        <p>Sep 2024</p>
                                    </div>
                                    <div class="blog-one__title-box">
                                        <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">It is a long established
                                                fact that a reader</a></h3>
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
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-1-5.jpg') }}" alt="">
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__content-shape-1"
                                    style="background-image: url({{ asset('assets/images/shapes/blog-one-content-shape-1.png') }});">
                                </div>
                                <div class="blog-one__date-and-title-box">
                                    <div class="blog-one__date">
                                        <h3>25</h3>
                                        <p>Sep 2024</p>
                                    </div>
                                    <div class="blog-one__title-box">
                                        <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">A corporate business
                                                entity is an oit organization</a></h3>
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
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="600ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('assets/images/blog/blog-1-6.jpg') }}" alt="">
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__content-shape-1"
                                    style="background-image: url({{ asset('assets/images/shapes/blog-one-content-shape-1.png') }});">
                                </div>
                                <div class="blog-one__date-and-title-box">
                                    <div class="blog-one__date">
                                        <h3>28</h3>
                                        <p>Sep 2024</p>
                                    </div>
                                    <div class="blog-one__title-box">
                                        <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Rapidiously evolve
                                                pandemic experiences</a></h3>
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

        <!--Site Footer Start-->
        

    <x-footer.footerStyleOne />
@endsection