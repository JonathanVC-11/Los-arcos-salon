<!-- Start sidebar widget content -->
<div class="xs-sidebar-group info-group info-sidebar">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <!-- Logo Section -->
                        <div class="sidebar-logo-section">
                            <div class="logo">
                                <a href="{{ route('index') }}">
                                    <img src="{{ asset('assets/images/resources/logo-1.png') }}" alt="Salón Los Arcos" />
                                </a>
                            </div>
                            <div class="logo-divider"></div>
                        </div>

                        <!-- About Section -->
                        <div class="sidebar-about-section">
                            <div class="section-icon">
                                <i class="fas fa-crown"></i>
                            </div>
                            <h3 class="sidebar-title">SALÓN LOS ARCOS</h3>
                            <h4 class="sidebar-subtitle">El Lugar Perfecto para tus Eventos</h4>
                            <p class="sidebar-description">
                                Con más de 10 años de experiencia, ofrecemos instalaciones de primera clase 
                                con capacidad para 280 personas en un ambiente familiar y acogedor.
                            </p>
                            
                            <!-- Features List -->
                            <div class="sidebar-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>280 personas</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-home"></i>
                                    <span>480 m²</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-car"></i>
                                    <span>Estacionamiento</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-utensils"></i>
                                    <span>Banquetes</span>
                                </div>
                            </div>
                        </div>

                        <!-- Quote Form Section -->
                        <div class="sidebar-form-section">
                            <div class="form-header">
                                <div class="form-icon">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                                <h4 class="form-title">SOLICITA TU COTIZACIÓN</h4>
                                <p class="form-subtitle">¡Hagamos realidad tu evento soñado!</p>
                            </div>
                            
                            <form action="assets/inc/sendemail.php" class="sidebar-contact-form">
                                <div class="form-row">
                                    <div class="form-group">
                                        <div class="input-wrapper">
                                            <i class="fas fa-user"></i>
                                            <input type="text" name="name" placeholder="Tu nombre completo" required="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group">
                                        <div class="input-wrapper">
                                            <i class="fas fa-envelope"></i>
                                            <input type="email" name="email" placeholder="Correo electrónico" required="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group">
                                        <div class="input-wrapper">
                                            <i class="fas fa-phone"></i>
                                            <input type="tel" name="phone" placeholder="Número de teléfono" required="">
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="form-row">
                                    <div class="form-group">
                                        <div class="textarea-wrapper">
                                            <i class="fas fa-comment-dots"></i>
                                            <textarea name="message" placeholder="Detalles del evento: fecha, invitados, servicios..." rows="3" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group">
                                        <button type="submit" class="sidebar-submit-btn">
                                            <i class="fas fa-paper-plane"></i>
                                            <span>Enviar Solicitud</span>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="form-result"></div>
                            </form>
                        </div>

                        <!-- Contact Info Section -->
                        <div class="sidebar-contact-section">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="contact-info">
                                    <span class="contact-label">Teléfono</span>
                                    <a href="tel:713 100 0994" class="contact-value">713 100 0994</a>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-info">
                                    <span class="contact-label">Email</span>
                                    <a href="mailto:alexvara@live.com.mx" class="contact-value">alexvara@live.com.mx</a>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-info">
                                    <span class="contact-label">Horarios</span>
                                    <span class="contact-value">Lun - Dom: 9:00 AM - 11:00 PM</span>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media Section -->
                        <div class="sidebar-social-section">
                            <h5 class="social-title">Síguenos</h5>
                            <div class="social-links">
                                <a href="https://www.facebook.com/profile.php?id=100054229521920" class="social-link facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End sidebar widget content -->

<style>
/* Sidebar Widget Styles */
.xs-sidebar-widget {
    background: linear-gradient(135deg, #2c1810 0%, #4a2c1a 100%);
    width: 420px;
    height: 100vh;
    overflow-y: auto;
    box-shadow: -5px 0 20px rgba(0,0,0,0.3);
}

.sidebar-widget-container {
    padding: 0;
}

.widget-heading {
    position: sticky;
    top: 0;
    background: rgba(44, 24, 16, 0.95);
    backdrop-filter: blur(10px);
    padding: 15px 20px;
    text-align: right;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    z-index: 10;
}

.close-side-widget {
    color: #fff;
    font-size: 18px;
    text-decoration: none;
    width: 35px;
    height: 35px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: rgba(255,255,255,0.1);
    transition: all 0.3s ease;
}

.close-side-widget:hover {
    background: #d4af37;
    transform: rotate(90deg);
}

.content-inner {
    padding: 20px;
}

/* Logo Section */
.sidebar-logo-section {
    text-align: center;
    margin-bottom: 20px;
}

.logo img {
    max-width: 120px;
    height: auto;
}

.logo-divider {
    width: 50px;
    height: 2px;
    background: linear-gradient(90deg, transparent, #d4af37, transparent);
    margin: 15px auto;
}

/* About Section */
.sidebar-about-section {
    margin-bottom: 25px;
    text-align: center;
}

.section-icon {
    font-size: 30px;
    color: #d4af37;
    margin-bottom: 10px;
}

.sidebar-title {
    color: #fff;
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 5px;
    letter-spacing: 0.5px;
}

.sidebar-subtitle {
    color: #d4af37;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 15px;
    font-style: italic;
}

.sidebar-description {
    color: rgba(255,255,255,0.8);
    font-size: 13px;
    line-height: 1.5;
    margin-bottom: 20px;
}

/* Features List */
.sidebar-features {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
    margin-bottom: 20px;
}

.feature-item {
    display: flex;
    align-items: center;
    color: rgba(255,255,255,0.9);
    font-size: 11px;
    background: rgba(255,255,255,0.05);
    padding: 8px;
    border-radius: 6px;
    border: 1px solid rgba(212, 175, 55, 0.2);
}

.feature-item i {
    color: #d4af37;
    margin-right: 6px;
    font-size: 12px;
    width: 14px;
}

/* Form Section */
.sidebar-form-section {
    background: rgba(0,0,0,0.3);
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid rgba(212, 175, 55, 0.2);
}

.form-header {
    text-align: center;
    margin-bottom: 20px;
}

.form-icon {
    font-size: 24px;
    color: #d4af37;
    margin-bottom: 8px;
}

.form-title {
    color: #fff;
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 3px;
    letter-spacing: 0.3px;
}

.form-subtitle {
    color: rgba(255,255,255,0.7);
    font-size: 12px;
    font-style: italic;
}

/* Form Styles */
.sidebar-contact-form .form-row {
    margin-bottom: 15px;
}

.input-wrapper,
.select-wrapper,
.textarea-wrapper {
    position: relative;
    display: flex;
    align-items: center;
}

.input-wrapper i,
.select-wrapper i,
.textarea-wrapper i {
    position: absolute;
    left: 12px;
    color: #d4af37;
    font-size: 12px;
    z-index: 2;
}

.textarea-wrapper i {
    top: 12px;
    align-self: flex-start;
}

.sidebar-contact-form input,
.sidebar-contact-form select,
.sidebar-contact-form textarea {
    width: 100%;
    padding: 12px 12px 12px 35px;
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 6px;
    color: #fff;
    font-size: 13px;
    transition: all 0.3s ease;
}

.sidebar-contact-form input::placeholder,
.sidebar-contact-form textarea::placeholder {
    color: rgba(255,255,255,0.6);
    font-size: 12px;
}

.sidebar-contact-form input:focus,
.sidebar-contact-form select:focus,
.sidebar-contact-form textarea:focus {
    outline: none;
    border-color: #d4af37;
    background: rgba(255,255,255,0.15);
    box-shadow: 0 0 8px rgba(212, 175, 55, 0.3);
}

.sidebar-contact-form select {
    cursor: pointer;
}

.sidebar-contact-form select option {
    background: #2c1810;
    color: #fff;
}

.sidebar-contact-form textarea {
    resize: vertical;
    min-height: 60px;
}

/* Submit Button */
.sidebar-submit-btn {
    width: 100%;
    padding: 12px;
    background: linear-gradient(135deg, #d4af37 0%, #f4d03f 100%);
    border: none;
    border-radius: 6px;
    color: #2c1810;
    font-size: 14px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    text-transform: uppercase;
    letter-spacing: 0.3px;
}

.sidebar-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(212, 175, 55, 0.4);
    background: linear-gradient(135deg, #f4d03f 0%, #d4af37 100%);
}

/* Contact Section */
.sidebar-contact-section {
    margin-bottom: 20px;
}

.contact-item {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
    padding: 12px;
    background: rgba(255,255,255,0.05);
    border-radius: 8px;
    border: 1px solid rgba(255,255,255,0.1);
}

.contact-icon {
    width: 32px;
    height: 32px;
    background: linear-gradient(135deg, #d4af37, #f4d03f);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 12px;
    flex-shrink: 0;
}

.contact-icon i {
    color: #2c1810;
    font-size: 14px;
}

.contact-info {
    flex: 1;
}

.contact-label {
    display: block;
    color: rgba(255,255,255,0.7);
    font-size: 11px;
    margin-bottom: 2px;
}

.contact-value {
    color: #fff;
    font-size: 12px;
    font-weight: 500;
    text-decoration: none;
}

.contact-value:hover {
    color: #d4af37;
}

/* Social Section */
.sidebar-social-section {
    text-align: center;
    padding-top: 15px;
    border-top: 1px solid rgba(255,255,255,0.1);
}

.social-title {
    color: #fff;
    font-size: 14px;
    margin-bottom: 12px;
}

.social-links {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.social-link {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid rgba(255,255,255,0.2);
    font-size: 14px;
}

.social-link.facebook {
    color: #3b5998;
}

.social-link.instagram {
    color: #e4405f;
}

.social-link.whatsapp {
    color: #25d366;
}

.social-link.youtube {
    color: #ff0000;
}

.social-link:hover {
    transform: translateY(-2px);
    border-color: currentColor;
    background: rgba(255,255,255,0.1);
}

/* Scrollbar */
.xs-sidebar-widget::-webkit-scrollbar {
    width: 4px;
}

.xs-sidebar-widget::-webkit-scrollbar-track {
    background: rgba(255,255,255,0.1);
}

.xs-sidebar-widget::-webkit-scrollbar-thumb {
    background: #d4af37;
    border-radius: 2px;
}

.xs-sidebar-widget::-webkit-scrollbar-thumb:hover {
    background: #f4d03f;
}

/* Responsive */
@media (max-width: 768px) {
    .xs-sidebar-widget {
        width: 100vw;
    }
    
    .sidebar-features {
        grid-template-columns: 1fr;
    }
    
    .content-inner {
        padding: 15px;
    }
    
    .sidebar-contact-form input,
    .sidebar-contact-form select,
    .sidebar-contact-form textarea {
        padding: 10px 10px 10px 30px;
    }
}
</style>