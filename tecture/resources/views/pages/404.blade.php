@extends('layouts.layoutCommon')
@section('title', 'Error Page || tecture || tecture Laravel  Template')
@push('styles') 
    
<link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/page-header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/error-page.css') }}">
 
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <x-page-header title="Error Page" subtitle="Error Page" />


        <!--Page Header End-->

        <!--Error Page Start-->
        <section class="error-page">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <div class="container">
                <div class="error-page__inner">
                    <div class="error-page__img">
                        <img src="{{ asset('assets/images/resources/error-page-img-1.png') }}" alt="">
                    </div>
                    <div class="error-page__btn-box">
                        <a href="{{ route('index') }}" class="thm-btn error-page__btn">Back To Home <span
                                class="icon-up-right-arrow"></span> </a>
                    </div>
                </div>
            </div>
        </section>
        <!--Error Page End-->

        <!--Site Footer Start-->
        

    <x-footer.footerStyleOne />
@endsection