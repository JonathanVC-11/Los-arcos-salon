@extends('layouts.layoutCommon')
@section('title', 'Contacto || Los Arcos || Salón de Fiestas')
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
    <x-page-header title="Contacto" subtitle="Los Arcos" />
    
    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="section-shape-1" style="background-image: url({{ asset('assets/images/shapes/section-shape-1.png') }});"></div>
        <div class="container">
            <div class="contact-page__inner">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="contact-page__left">
                            <div class="contact-page__information">
                                <h3 class="contact-page__information-title">Información de Contacto</h3>
                                <ul class="contact-page__information-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-pin"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Dirección</h3>
                                            <p>Cda. Hidalgo Manzana 006, Tianguistenco de Galeana, 52600 Guadalupe Yancuictlalpan, Méx.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-trading"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Teléfono de Contacto</h3>
                                            <p><a href="tel:7131000994">713 100 0994</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-envelope-1"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Correo Electrónico</h3>
                                            <p><a href="mailto:alexvara@live.com.mx">alexvara@live.com.mx</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="contact-page__right">
                            <h3 class="contact-page__contact-title">Solicita tu Cotización</h3>
                            <form id="contact-form" class="contact-page__form contact-form-validated"
                                action="assets/inc/sendemail.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-page__input-box">
                                            <input type="text" name="name" placeholder="Tu nombre" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-page__input-box">
                                            <input type="email" name="email" placeholder="Tu Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-page__input-box">
                                            <input type="number" placeholder="Móvil" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-page__input-box">
                                            <input type="text" placeholder="Tipo de evento" name="subject" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-page__input-box text-message-box">
                                            <textarea name="message" placeholder="Mensaje" required></textarea>
                                        </div>
                                        <div class="contact-page__btn-box">
                                            <button type="submit" class="thm-btn contact-page__btn"
                                                data-loading-text="Por favor espere...">
                                                Solicitar Cotización
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
                            <i class="icon-pin"></i>
                        </div>
                        <div class="single-contact-info-section__content">
                            <div class="text">
                                <h3>Ubicación</h3>
                                <p>Visítanos y conoce nuestras instalaciones.</p>
                                <p>Salón Los Arcos</p>
                            </div>
                            <div class="btn-box">
                                <a href="https://maps.app.goo.gl/wqCN8HnsHdzkjxmi7" target="_blank">
                                    Ver en Mapa
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
                                <h3>Teléfono</h3>
                                <p>Alex Vara Contreras</p>
                                <p><a href="tel:7131000994">713 100 0994</a></p>
                            </div>
                            <div class="btn-box">
                                <a href="tel:7131000994">
                                    Llamar Ahora
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
                                <h3>Correo</h3>
                                <p>Envíanos tu consulta</p>
                                <p><a href="mailto:alexvara@live.com.mx">alexvara@live.com.mx</a></p>
                            </div>
                            <div class="btn-box">
                                <a href="mailto:alexvara@live.com.mx">
                                    Enviar Email
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
                                <h3>Horarios</h3>
                                <p>Lunes-Sábado: 9.00 am a 7.30 pm</p>
                                <p>Disponible para eventos todos los días.</p>
                            </div>
                            <div class="btn-box">
                                <a href="tel:7131000994">
                                    Consultar Disponibilidad
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15072.810676465011!2d-99.45480287075041!3d19.186348379048447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdf17767099183%3A0xfb14e4ec75da87e9!2sSal%C3%B3n%20de%20Fiestas%20Los%20Arcos!5e0!3m2!1ses!2smx!4v1753834378597!5m2!1ses!2smx" class="google-map__one" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!--Google Map End-->
    
    <!--Site Footer Start-->
    <x-footer.footerStyleOne />
@endsection