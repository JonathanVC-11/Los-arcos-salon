@extends('layouts.layoutCommon')
@section('title', 'Blog Details || tecture || tecture Laravel  Template')
@push('styles') 
    
<link rel="stylesheet" href="{{ asset('assets/css/module-css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/page-header.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/module-css/error-page.css') }}">
 
@endpush

@section('content')
    <x-strickyHeaderTwo />
    <x-page-header title="Blog Details" subtitle="Blog Details" />


        <!--Page Header End-->

        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="section-shape-1"
                style="background-image: url({{ asset('assets/images/shapes/blog-details-sec-shape-1.png') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__img">
                                <img src="{{ asset('assets/images/blog/blog-details-img-1.jpg') }}" alt="">
                            </div>
                            <div class="blog-details__content">
                                <div class="blog-details__meta-and-share">
                                    <ul class="blog-details__meta list-unstyled">
                                        <li>
                                            <a href="#"><span class="icon-user"></span>By Admin</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-conversation"></span>{6}Comments</a>
                                        </li>
                                    </ul>
                                    <div class="blog-details__share">
                                        <a href="#"><span class="fas fa-share-alt"></span></a>
                                    </div>
                                </div>
                                <h3 class="blog-details__title-1">Transforming challenges into opportunities with IT.
                                </h3>
                                <p class="blog-details__text-1">Mauris non dignissim purus, ac commodo diam. Donec sit
                                    amet lacinia nulla. Aliquam quis purus in justo
                                    pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi.
                                    Quisque vitae
                                    odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae</p>
                                <p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
                                    amet lacinia nulla. Aliquam quis purus in justo
                                    pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi.
                                    Quisque vitae odio nec lacus
                                    interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
                                    pellentesque
                                    vitae et nunc. Sed vitae leo vitae nisl pellentesque semper euismod justo </p>
                            </div>
                            <div class="blog-details__tag-box">
                                <p class="blog-details__tag-title">Tags :</p>
                                <div class="blog-details__tag-list">
                                    <a href="#">Graphics</a>
                                    <a href="#">Cargo</a>
                                    <a href="#">Blog</a>
                                </div>
                            </div>
                            <div class="blog-details__client-info">
                                <div class="blog-details__client-img">
                                    <img src="{{ asset('assets/images/blog/blog-details-client-img.jpg') }}" alt="">
                                </div>
                                <div class="blog-details__client-content">
                                    <h3>Kevin Martin</h3>
                                    <p>Lacinia amet nisi ullamcorper eu suspendisse. Mattis nisl dignissim
                                        accumsan consectetur suspendisse amet.</p>
                                    <div class="blog-details__client-social">
                                        <div class="blog-details__client-social-title">
                                            <h4>Share :</h4>
                                        </div>
                                        <div class="blog-details__client-social-list">
                                            <a href="#"><span class="fab fa-facebook"></span></a>
                                            <a href="#"><span class="fab fa-instagram"></span></a>
                                            <a href="#"><span class="fab fa-twitter"></span></a>
                                            <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-details__pagenation-box">
                                <ul class="list-unstyled blog-details__pagenation">
                                    <li>
                                        <div class="icon">
                                            <a href="#"><span class="icon-left"></span></a>
                                        </div>
                                        <p>Cargo flow through better
                                            <br> supply in UK</p>
                                    </li>
                                    <li>
                                        <p>Why is supply chain visibility
                                            <br> so important?</p>
                                        <div class="icon">
                                            <a href="#"><span class="icon-right"></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="comment-one">
                                <h3 class="comment-one__title">Recent Comments</h3>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="{{ asset('assets/images/blog/comment-1-1.jpg') }}" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Richard Smith</h3>
                                        <span>September 19, 2025</span>
                                        <p>Perspiciatis unde omnis iste natus error sit voluptatem accusant laudantium,
                                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                            architecto beatae vitae dicta sunt explicabo. Nemo </p>
                                        <div class="comment-one__btn-box">
                                            <a href="{{ route('blog-details') }}" class="comment-one__btn">reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-one__single comment-one__single-2">
                                    <div class="comment-one__image">
                                        <img src="{{ asset('assets/images/blog/comment-1-2.jpg') }}" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Laura Johnson</h3>
                                        <span>September 19, 2025</span>
                                        <p>Perspiciatis unde omnis iste natus error sit voluptatem accusant laudantium,
                                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                            architecto beatae vitae dicta sunt explicabo. Nemo </p>
                                        <div class="comment-one__btn-box">
                                            <a href="{{ route('blog-details') }}" class="comment-one__btn">reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h3 class="comment-form__title">Leave A Comment</h3>
                                <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                    novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Name*" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="E-mail *" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Your Comments*"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checked-box1">
                                                <input type="checkbox" name="skipper1" id="skipper" checked="">
                                                <label for="skipper">
                                                    <span></span>Save my name, email & website in this browser for
                                                    the next time I comment.
                                                </label>
                                            </div>
                                            <div class="button-box">
                                                <button class="thm-btn">
                                                    Send Massage
                                                    <span class="icon-up-right-arrow"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
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