@extends('layouts.layoutCommon')
@section('title', 'Projects || tecture || tecture Laravel  Template')
@push('styles') 
    
<link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/page-header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/error-page.css') }}">
 
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <x-page-header title="Projects" subtitle="Projects" />


        <!--Page Header End-->

        <!--Projects Page Start-->
        <section class="projects-page">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img src="{{ asset('assets/images/project/projects-2-1.jpg') }}" alt="">
                            </div>
                            <div class="project-two__content">
                                <h3 class="project-two__title"><a href="{{ route('project-details') }}">Industrial Chic
                                        Restaurant</a></h3>
                                <div class="project-two__arrow">
                                    <a href="{{ asset('assets/images/project/projects-2-1.jpg') }}" class="img-popup"><span
                                            class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img src="{{ asset('assets/images/project/projects-2-2.jpg') }}" alt="">
                            </div>
                            <div class="project-two__content">
                                <h3 class="project-two__title"><a href="{{ route('project-details') }}">Amman Rotane Hotel</a>
                                </h3>
                                <div class="project-two__arrow">
                                    <a href="{{ asset('assets/images/project/projects-2-2.jpg') }}" class="img-popup"><span
                                            class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img src="{{ asset('assets/images/project/projects-2-3.jpg') }}" alt="">
                            </div>
                            <div class="project-two__content">
                                <h3 class="project-two__title"><a href="{{ route('project-details') }}">Harmony Interiors</a>
                                </h3>
                                <div class="project-two__arrow">
                                    <a href="{{ asset('assets/images/project/projects-2-3.jpg') }}" class="img-popup"><span
                                            class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img src="{{ asset('assets/images/project/projects-2-4.jpg') }}" alt="">
                            </div>
                            <div class="project-two__content">
                                <h3 class="project-two__title"><a href="{{ route('project-details') }}">Harmony Interiors</a></h3>
                                <div class="project-two__arrow">
                                    <a href="{{ asset('assets/images/project/projects-2-4.jpg') }}" class="img-popup"><span
                                            class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img src="{{ asset('assets/images/project/projects-2-5.jpg') }}" alt="">
                            </div>
                            <div class="project-two__content">
                                <h3 class="project-two__title"><a href="{{ route('project-details') }}">Amman Rotane Hotel</a>
                                </h3>
                                <div class="project-two__arrow">
                                    <a href="{{ asset('assets/images/project/projects-2-5.jpg') }}" class="img-popup"><span
                                            class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="project-two__single">
                            <div class="project-two__img">
                                <img src="{{ asset('assets/images/project/projects-2-6.jpg') }}" alt="">
                            </div>
                            <div class="project-two__content">
                                <h3 class="project-two__title"><a href="{{ route('project-details') }}">Industrial Chic
                                        Restaurant</a>
                                </h3>
                                <div class="project-two__arrow">
                                    <a href="{{ asset('assets/images/project/projects-2-6.jpg') }}" class="img-popup"><span
                                            class="icon-up-right-arrow-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Projects Page End-->

        <!--Site Footer Start-->
        

    <x-footer.footerStyleOne />
@endsection