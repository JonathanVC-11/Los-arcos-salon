@extends('layouts.layoutOnepageStyleFour')
@section('title', 'Home Three || tecture || tecture Laravel Template')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/before-after.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/how-it-work.css') }}">
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <!-- /.stricky-header -->


    <!-- Main Sllider Four Start -->
    <section id="home" class="main-slider-four">
        <div class="main-slider-four__carousel owl-carousel owl-theme">

            <!-- Single Main Sllider Four Start -->
            <div class="item">
                <div class="main-slider__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/slider-1-1.jpg') }});">
                </div>

                <!-- /.slider-one__bg -->
                <div class="container">
                    <div class="main-slider-four__content">
                        <div class="title">
                            <h2>We Won Best<br>Designer <span>Awards</span></h2>
                        </div>
                        <div class="text">
                            <p>
                                Praising pain was born and we will give you a complete account
                                of the system and expound teachings. Some great pleasure. To take a trivial example,
                                which of us ever undertakes.
                            </p>
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('about') }}" class="thm-btn">More Details <span
                                    class="icon-up-right-arrow"></span> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Main Sllider Four End -->
            <!-- Single Main Sllider Four Start -->
            <div class="item">
                <div class="main-slider__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/slider-1-1.jpg') }});">
                </div>

                <!-- /.slider-one__bg -->
                <div class="container">
                    <div class="main-slider-four__content">
                        <div class="title">
                            <h2>We Won Best<br>Designer <span>Awards</span></h2>
                        </div>
                        <div class="text">
                            <p>
                                Praising pain was born and we will give you a complete account
                                of the system and expound teachings. Some great pleasure. To take a trivial example,
                                which of us ever undertakes.
                            </p>
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('about') }}" class="thm-btn">More Details <span
                                    class="icon-up-right-arrow"></span> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Main Sllider Four End -->
            <!-- Single Main Sllider Four Start -->
            <div class="item">
                <div class="main-slider__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/slider-1-1.jpg') }});">
                </div>

                <!-- /.slider-one__bg -->
                <div class="container">
                    <div class="main-slider-four__content">
                        <div class="title">
                            <h2>We Won Best<br>Designer <span>Awards</span></h2>
                        </div>
                        <div class="text">
                            <p>
                                Praising pain was born and we will give you a complete account
                                of the system and expound teachings. Some great pleasure. To take a trivial example,
                                which of us ever undertakes.
                            </p>
                        </div>
                        <div class="btn-box">
                            <a href="{{ route('about') }}" class="thm-btn">More Details <span
                                    class="icon-up-right-arrow"></span> </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Main Sllider Four End -->

        </div>
    </section>
    <!--Main Sllider Start -->


    <!--Start welcome Style1-->
    <section id="about" class="welcome-style1">
        <div class="container">
            <div class="section-title sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Welcome to Interior</h2>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="welcome-style1__content">
                        <div class="title">
                            <h3> We are the best Interior designer since 1975.</h3>
                        </div>
                        <div class="text">
                            <p>Interior brings 41 years of interior designs experience right to your home or office.
                                Our design professionals are equipped to help you determine the products and design
                                that work best for our customers within the colors and lighting of your surroundings
                                more than your expectation.</p>
                            <p>
                                Since our meetings take place in your home or office, we’ll work with you to help
                                visualize a design solution that aligns with your taste, space, and budget, Also our
                                team will guide you.
                            </p>
                        </div>
                        <div class="bottom-box">
                            <div class="btn-box">
                                <a href="{{ route('about') }}" class="thm-btn">More About Us <span
                                        class="icon-up-right-arrow"></span> </a>
                            </div>
                            <div class="mail-box">
                                <h3>
                                    Request Quote: <br><a href="mailto:freequote@gmail.com">freequote@gmail.com</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="welcome-style1__img">
                        <div class="row">

                            <div class="col-xl-6">
                                <div class="img2">
                                    <img src="{{ asset('assets/images/resources/welcome-1-2.jpg') }}" alt="image">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="img1">
                                    <img src="{{ asset('assets/images/resources/welcome-1-1.jpg') }}" alt="image">
                                    <div class="video-btn">
                                        <a class="video-popup" title="Video Gallery"
                                            href="https://www.youtube.com/watch?v=8bZDBFHsyXw">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End welcome Style1-->


    <!--Start slogan-one-->
    <section class="slogan-one">
        <div class="slogan-one__bg jarallax" data-jarallax data-speed="0.3" data-imgposition="100% 100%"
            style="background-image: url({{ asset('assets/images/backgrounds/slogan-1__bg.jpg') }});">
        </div>
        <div class="container">
            <div class="slogan-one__content text-center">
                <div class="title">
                    <h3>Being the largest in-home decorationg service in newyork city</h3>
                    <h4>15% Discount on your First Work Session!..</h4>
                    <p>Our expert instructors are here to answer you every step of the question!.</p>
                </div>
                <div class="btn-box">
                    <a href="{{ route('contact') }}" class="thm-btn">
                        schedule Now
                        <span class="icon-up-right-arrow"></span> </a>
                </div>
            </div>
        </div>
    </section>
    <!--End slogan-one-->


    <!--Start Service Style4-->
    <section id="services" class="service-style4">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">service we provide</h2>
            </div>

            <div class="service-style4__carousel owl-theme owl-carousel">

                <!--Start Single Service Style4-->
                <div class="item">
                    <div class="single-service-style4">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/services/services-4-1.jpg') }}" alt="Image">
                            <div class="overlay-icon">
                                <a href="{{ route('services') }}">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content-box">
                            <h3><a href="{{ route('services') }}">Commercial Design</a></h3>
                            <p>The best projects and products in the commercial...</p>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style4-->
                <!--Start Single Service Style4-->
                <div class="item">
                    <div class="single-service-style4">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/services/services-4-2.jpg') }}" alt="Image">
                            <div class="overlay-icon">
                                <a href="{{ route('services') }}">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content-box">
                            <h3><a href="{{ route('services') }}">Evolve Space Designs</a></h3>
                            <p>TA corporate business entity is an oit organization...</p>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style4-->
                <!--Start Single Service Style4-->
                <div class="item">
                    <div class="single-service-style4">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/services/services-4-3.jpg') }}" alt="Image">
                            <div class="overlay-icon">
                                <a href="{{ route('services') }}">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content-box">
                            <h3><a href="{{ route('services') }}">Ee Modify Whole System</a></h3>
                            <p>Our associate consultants specialize of business...</p>
                        </div>
                    </div>
                </div>
                <!--End Single Service Style4-->

            </div>

        </div>
    </section>
    <!--End Service Style4-->


    <!--Start Testimonial Three-->
    <section id="testimonial" class="testimonial-three">
        <div class="testimonial-three__bg jarallax" data-jarallax data-speed="0.3" data-imgposition="100% 100%"
            style="background-image: url({{ asset('assets/images/testimonial/testimonial-3__bg.jpg') }});">
        </div>
        <div class="container">
            <div class="section-title sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">Hear From Our Members</h2>
            </div>


            <div class="testimonial-three__carousel owl-theme owl-carousel">

                <!--Start Single Testimonial Three-->
                <div class="item">
                    <div class="single-testimonial-three">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/testimonial/testimonial-2-1.jpg') }}" alt="Image">
                        </div>
                        <div class="single-testimonial-three-inner">
                            <div class="content-box">
                                <ul class="rating-box clearfix">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pointed-star"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pointed-star"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pointed-star"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pointed-star"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pointed-star"></span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="text">
                                    <p>Arrangements are made to transport cargo by sea to meet customers’
                                        international transpor tation needs.</p>
                                </div>
                                <div class="bottom-box">
                                    <div class="client-name">
                                        <h5>Madriya Merin</h5>
                                        <p>Interrio Assistant</p>
                                    </div>
                                    <div class="quote-box">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Testimonial Three-->
                <!--Start Single Testimonial Three-->
                <div class="item">
                    <div class="single-testimonial-three">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/testimonial/testimonial-2-2.jpg') }}" alt="Image">
                        </div>
                        <div class="single-testimonial-three-inner">
                            <div class="content-box">
                                <ul class="rating-box clearfix">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pointed-star"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pointed-star"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pointed-star"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pointed-star"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pointed-star"></span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="text">
                                    <p>Arrangements are made to transport cargo by sea to meet customers’
                                        international transpor tation needs.</p>
                                </div>
                                <div class="bottom-box">
                                    <div class="client-name">
                                        <h5>Mike Hardson</h5>
                                        <p>Spatial Design</p>
                                    </div>
                                    <div class="quote-box">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Testimonial Three-->
                <!--Start Single Testimonial Three-->
                <div class="item">
                    <div class="single-testimonial-three">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/testimonial/testimonial-2-3.jpg') }}" alt="Image">
                        </div>
                        <div class="single-testimonial-three-inner">
                            <div class="content-box">
                                <ul class="rating-box clearfix">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pointed-star"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pointed-star"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pointed-star"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pointed-star"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pointed-star"></span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="text">
                                    <p>Arrangements are made to transport cargo by sea to meet customers’
                                        international transpor tation needs.</p>
                                </div>
                                <div class="bottom-box">
                                    <div class="client-name">
                                        <h5>Marco Jansen</h5>
                                        <p>Web Design</p>
                                    </div>
                                    <div class="quote-box">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Testimonial Three-->

            </div>
        </div>
    </section>
    <!--End Testimonial Three-->

    <!--Start Blog Three-->
    <section id="blog" class="blog-three">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h2 class="section-title__title title-animation">News and Updates From <br>The Blog Post</h2>
            </div>
            <div class="row">

                <!--Start Single Blog Three-->
                <div class="col-xl-4">
                    <div class="single-blog-three">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/blog/blog-3-1.jpg') }}" alt="Image">
                            <div class="date-box">
                                <h6>25 AUG, 2024</h6>
                            </div>
                        </div>
                        <div class="content-box">
                            <ul class="meta-box">
                                <li>
                                    <a href="{{ route('blog-details') }}"><i class="far fa-folder-open"></i> Business</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}"><i class="far fa-comments"></i> 02 Comments</a>
                                </li>
                            </ul>
                            <div class="title-box">
                                <h3>
                                    <a href="#">Top 10 Modern Building Design in Califronia, USA</a>
                                </h3>
                            </div>
                            <div class="post-box">
                                <div class="img">
                                    <img src="{{ asset('assets/images/blog/post-3-1.jpg') }}" alt="Image">
                                </div>
                                <div class="title">
                                    <h6>PostBy</h6>
                                    <h5>brendan Miles</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Blog Three-->
                <!--Start Single Blog Three-->
                <div class="col-xl-4">
                    <div class="single-blog-three">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/blog/blog-3-2.jpg') }}" alt="Image">
                            <div class="date-box">
                                <h6>28 Jun, 2024</h6>
                            </div>
                        </div>
                        <div class="content-box">
                            <ul class="meta-box">
                                <li>
                                    <a href="{{ route('blog-details') }}"><i class="far fa-folder-open"></i> Business</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}"><i class="far fa-comments"></i> 05 Comments</a>
                                </li>
                            </ul>
                            <div class="title-box">
                                <h3>
                                    <a href="#">It is a long established fact that a reader will</a>
                                </h3>
                            </div>
                            <div class="post-box">
                                <div class="img">
                                    <img src="{{ asset('assets/images/blog/post-3-2.jpg') }}" alt="Image">
                                </div>
                                <div class="title">
                                    <h6>PostBy</h6>
                                    <h5>Emmett George</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Blog Three-->
                <!--Start Single Blog Three-->
                <div class="col-xl-4">
                    <div class="single-blog-three">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/blog/blog-3-3.jpg') }}" alt="Image">
                            <div class="date-box">
                                <h6>20 Nov, 2024</h6>
                            </div>
                        </div>
                        <div class="content-box">
                            <ul class="meta-box">
                                <li>
                                    <a href="{{ route('blog-details') }}"><i class="far fa-folder-open"></i> Business</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog-details') }}"><i class="far fa-comments"></i> 10 Comments</a>
                                </li>
                            </ul>
                            <div class="title-box">
                                <h3>
                                    <a href="#">Lorem Ipsum is simply dummy text of the printing</a>
                                </h3>
                            </div>
                            <div class="post-box">
                                <div class="img">
                                    <img src="{{ asset('assets/images/blog/post-3-3.jpg') }}" alt="Image">
                                </div>
                                <div class="title">
                                    <h6>PostBy</h6>
                                    <h5>Oliver Beckett</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Blog Three-->

            </div>
        </div>
    </section>
    <!--End Blog Three-->


    <!--Contact Page Start-->
    <section id="contact" class="contact-page pdtop">
        <div class="section-shape-1"
            style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
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
                            <form class="contact-form-validated contact-page__form" action="assets/inc/mail.php"
                                method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-page__input-box">
                                            <input type="text" name="name" placeholder="Your Nome" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-page__input-box">
                                            <input type="email" name="email" placeholder="Email Address"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-page__input-box">
                                            <input type="text" name="number" placeholder="Phone Number"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-page__input-box">
                                            <input type="text" name="company" placeholder="Your Company Name"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-page__input-box text-message-box">
                                            <textarea name="message" placeholder="Write your question here"></textarea>
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
                            </form>
                            <p class="ajax-response mb-0 error"></p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->

    <x-footer.footerStyleTwo />
@endsection
