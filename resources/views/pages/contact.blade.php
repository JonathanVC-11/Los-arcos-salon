@extends('layouts.layoutCommon')
@section('title', 'Contact || tecture || tecture Laravel  Template')
@push('styles') 
    
<link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/page-header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/error-page.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/google-map.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/united-kingdom.css') }}">
 
@endpush
@push('scripts') 
   
<script src="{{ asset('assets/js/ajax-form.js') }}"></script>
 
@endpush
@section('content')
    <x-strickyHeaderTwo />
    <x-page-header title="Contact" subtitle="Contact" />

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
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
                                <form id="contact-form" class="contact-page__form contact-form-validated"
                                    action="assets/inc/sendemail.php" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="contact-page__input-box">
                                                <input type="text" name="name" placeholder="Your name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="contact-page__input-box">
                                                <input type="email" name="email" placeholder="Your Email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="contact-page__input-box">
                                                <input type="number" placeholder="Mobile" name="phone" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Subject" name="subject" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-page__input-box text-message-box">
                                                <textarea name="message" placeholder="Messege" required></textarea>
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
                                    <div class="result mt-2"></div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Contact Info Start-->
        <section class="contact-info-section">
            <div class="container">

                <div class="row">
                    <div class="col-xl-3">
                        <div class="single-contact-info-section">
                            <div class="icon">
                                <i class=" icon-pin"></i>
                            </div>
                            <div class="single-contact-info-section__content">
                                <div class="text">
                                    <h3>Location</h3>
                                    <p>Discover innovation doorstep.</p>
                                    <p>14 Tottenham Road, United Kingdom</p>
                                </div>
                                <div class="btn-box">
                                    <a href="#">
                                        View On Map
                                        <span class="icon-up-right-arrow"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="single-contact-info-section">
                            <div class="icon">
                                <i class="icon-telephone"></i>
                            </div>
                            <div class="single-contact-info-section__content">
                                <div class="text">
                                    <h3>Telephone</h3>
                                    <p>Your bridge to hassle-free service.</p>
                                    <p><a href="tal:12122263126"> 1 212-226-3126</a></p>
                                </div>
                                <div class="btn-box">
                                    <a href="#">
                                        Get Call Back
                                        <span class="icon-up-right-arrow"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="single-contact-info-section">
                            <div class="icon">
                                <i class="icon-envelope-2"></i>
                            </div>
                            <div class="single-contact-info-section__content">
                                <div class="text">
                                    <h3>Your Email</h3>
                                    <p>Your bridge to hassle-free service.</p>
                                    <p><a href="mailto:head@transcargo.com">head@transcargo.com</a></p>
                                </div>
                                <div class="btn-box">
                                    <a href="#">
                                        Inter Email
                                        <span class="icon-up-right-arrow"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="single-contact-info-section">
                            <div class="icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="single-contact-info-section__content">
                                <div class="text">
                                    <h3>Off.Hrs</h3>
                                    <p>Monday-Satday: 9.00 am to 7.30 pm</p>
                                    <p>Hotline is available 24/7.</p>
                                </div>
                                <div class="btn-box">
                                    <a href="#">
                                        Get Call Back
                                        <span class="icon-up-right-arrow"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!--Contact Info End-->

        <!--Google Map Start-->
        <section class="google-map-one">
            <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619:0xba03efb7998eef6d!2sCostco Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__one" allowfullscreen></iframe>

        </section>
        <!--Google Map End-->

        <!--Site Footer Start-->
        

    <x-footer.footerStyleOne />
@endsection