@extends('layouts.layoutCommon')
@section('title', 'Blog Details || tecture || tecture Laravel  Template')
@push('styles') 
    
<link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/page-header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/error-page.css') }}">
 
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <x-page-header title="Blog standard" subtitle="Blog Details" />


        <!--Page Header End-->

        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="section-shape-1"
                style="background-image: url({{ asset('assets/images/shapes/blog-details-sec-shape-1.png') }});"></div>
            <div class="auto-container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-page-content">

                            <div class="blog-two-single">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/blog/blog-page-2-1.jpg') }}" alt="Image">
                                </div>
                                <div class="content-box">
                                    <div class="meta-box">
                                        <div class="date-box">
                                            <h3>23</h3>
                                            <p>Sep 2024</p>
                                        </div>
                                        <ul class="meta-info list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <span class="icon-user"></span>
                                                    David Wood
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="icon-conversation"></span>
                                                    (1k) Comment
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="title-box">
                                        <h3>
                                            <a href="{{ route('blog-details') }}">
                                                Top 10 Modern Building Design in Califronia, USA
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="text-box">
                                        <p>Architecture is one of the most multidisciplinary fields out there,
                                            integrating landscape design, interior design, urban planning, history and
                                            philosophy, to name just a few.</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{ route('blog-details') }}" class="thm-btn">
                                            More Details
                                            <span class="icon-up-right-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-two-single">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/blog/blog-page-2-2.jpg') }}" alt="Image">
                                </div>
                                <div class="content-box">
                                    <div class="meta-box">
                                        <div class="date-box">
                                            <h3>13</h3>
                                            <p>Sep 2024</p>
                                        </div>
                                        <ul class="meta-info list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <span class="icon-user"></span>
                                                    David Wood
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="icon-conversation"></span>
                                                    (10k) Comment
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="title-box">
                                        <h3>
                                            <a href="{{ route('blog-details') }}">
                                                It is a long established fact that a reader will
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="text-box">
                                        <p>Architecture is one of the most multidisciplinary fields out there,
                                            integrating landscape design, interior design, urban planning, history and
                                            philosophy, to name just a few..</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{ route('blog-details') }}" class="thm-btn">
                                            More Details
                                            <span class="icon-up-right-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-two-single">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/blog/blog-page-2-3.jpg') }}" alt="Image">
                                </div>
                                <div class="content-box">
                                    <div class="meta-box">
                                        <div class="date-box">
                                            <h3>20</h3>
                                            <p>Nov 2024</p>
                                        </div>
                                        <ul class="meta-info list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <span class="icon-user"></span>
                                                    David Wood
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="icon-conversation"></span>
                                                    (5k) Comment
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="title-box">
                                        <h3>
                                            <a href="{{ route('blog-details') }}">
                                                Inspiring Designs for Inspired Where InnovationMeet
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="text-box">
                                        <p>Architecture is one of the most multidisciplinary fields out there,
                                            integrating landscape design, interior design, urban planning, history and
                                            philosophy, to name just a few.</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{ route('blog-details') }}" class="thm-btn">
                                            More Details
                                            <span class="icon-up-right-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-two-single">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/blog/blog-page-2-4.jpg') }}" alt="Image">
                                </div>
                                <div class="content-box">
                                    <div class="meta-box">
                                        <div class="date-box">
                                            <h3>24</h3>
                                            <p>Jun 2024</p>
                                        </div>
                                        <ul class="meta-info list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <span class="icon-user"></span>
                                                    David Wood
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="icon-conversation"></span>
                                                    (15k) Comment
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="title-box">
                                        <h3>
                                            <a href="{{ route('blog-details') }}">
                                                The best drawings make amazing structures
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="text-box">
                                        <p>Architecture is one of the most multidisciplinary fields out there,
                                            integrating landscape design, interior design, urban planning, history and
                                            philosophy, to name just a few.</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{ route('blog-details') }}" class="thm-btn">
                                            More Details
                                            <span class="icon-up-right-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-two-single">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/blog/blog-page-2-5.jpg') }}" alt="Image">
                                </div>
                                <div class="content-box">
                                    <div class="meta-box">
                                        <div class="date-box">
                                            <h3>10</h3>
                                            <p>April 2024</p>
                                        </div>
                                        <ul class="meta-info list-unstyled">
                                            <li>
                                                <a href="#">
                                                    <span class="icon-user"></span>
                                                    David Wood
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="icon-conversation"></span>
                                                    (1b) Comment
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="title-box">
                                        <h3>
                                            <a href="{{ route('blog-details') }}">
                                                Highly-trained architects ready to serve
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="text-box">
                                        <p>Architecture is one of the most multidisciplinary fields out there,
                                            integrating landscape design, interior design, urban planning, history and
                                            philosophy, to name just a few.</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{ route('blog-details') }}" class="thm-btn">
                                            More Details
                                            <span class="icon-up-right-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="blog-page__pagination">
                                <ul class="pg-pagination list-unstyled">
                                    <li class="prev">
                                        <a href="{{ route('blog-details') }}" aria-label="Prev">
                                            <i class="icon-left-arrow"></i>
                                        </a>
                                    </li>
                                    <li class="count active"><a href="{{ route('blog-details') }}">1</a></li>
                                    <li class="count"><a href="{{ route('blog-details') }}">2</a></li>
                                    <li class="count"><a href="{{ route('blog-details') }}">3</a></li>
                                    <li class="next">
                                        <a href="{{ route('blog-details') }}" aria-label="Next">
                                            <i class="icon-right-arrow"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search Keyword">
                                    <button type="submit"><i class="icon-search-interface-symbol"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest Post</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('assets/images/blog/lp-1-1.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <p class="sidebar__post-date"><span class="icon-calendar"></span>July 24,
                                                2024</p>
                                            <h3>
                                                <a href="{{ route('blog-details') }}">Top crypto exchange
                                                    influencers</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('assets/images/blog/lp-1-2.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <p class="sidebar__post-date"><span class="icon-calendar"></span>July 24,
                                                2024</p>
                                            <h3>
                                                <a href="{{ route('blog-details') }}">Mauris non dignissim commodo
                                                    Instralation</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('assets/images/blog/lp-1-3.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <p class="sidebar__post-date"><span class="icon-calendar"></span>July 24,
                                                2024</p>
                                            <h3>
                                                <a href="{{ route('blog-details') }}">Donec sit amet lacinia Instralation
                                                    nulla.</a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__all-category">
                                <h3 class="sidebar__title">Categories</h3>
                                <ul class="sidebar__all-category-list list-unstyled">
                                    <li>
                                        <a href="#">New Technologies<span>(07)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Construction Introductions<span>(05)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Instralation Accecories<span>(03)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Business Advice<span>(07)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Payment Processing<span>(08)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Corporate Standup<span>(04)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single have-any-query">
                                <h3 class="have-any-query__title">Have Any
                                    Query?</h3>
                                <p class="have-any-query__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod</p>
                                <div class="have-any-query__btn-box">
                                    <a href="{{ route('about') }}" class="thm-btn have-any-query__btn">Send Massage</a>
                                </div>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-list">
                                    <a href="#">All Project</a>
                                    <a href="#">Interiour</a>
                                    <a href="#">Business</a>
                                    <a href="#">Graphics</a>
                                    <a href="#">Cargo</a>
                                    <a href="#">Maintenance</a>
                                    <a href="#">Consulting</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Details End-->



        <!--Site Footer Start-->
        

    <x-footer.footerStyleOne />
@endsection