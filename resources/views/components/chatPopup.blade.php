<div class="chat-icon">
    <button type="button" class="chat-toggler">
        <i class="fas fa-comments"></i>
        <span class="chat-pulse"></span>
    </button>
</div>

<!--Chat Popup-->
<div id="chat-popup" class="chat-popup">
    <div class="popup-inner">
        <!-- Header -->
        <div class="chat-header">
            <div class="chat-header-info">
                <div class="chat-avatar">
                    <i class="fas fa-crown"></i>
                </div>
                <div class="chat-details">
                    <h4>Salón Los Arcos</h4>
                    <span class="chat-status">En línea</span>
                </div>
            </div>
            <button class="close-chat" type="button">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <!-- Body -->
        <div class="chat-body">
            <!-- Welcome Message -->
            <div class="chat-welcome">
                <div class="welcome-message">
                    <div class="message-avatar">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="message-content">
                        <p>¡Hola! 👋 Bienvenido a Salón Los Arcos</p>
                        <p>¿En qué podemos ayudarte con tu evento?</p>
                        <span class="message-time">Ahora</span>
                    </div>
                </div>
            </div>
            
            <!-- Form -->
            <div class="chat-form">
                <form action="assets/inc/sendemail.php" method="POST" class="contact-form-validated">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Tu nombre completo" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Tu correo electrónico" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="Tu teléfono">
                    </div>
                    
                    <div class="form-group">
                        <select name="event_type">
                            <option value="">Tipo de evento</option>
                            <option value="boda">💒 Boda</option>
                            <option value="xv_anos">👑 XV Años</option>
                            <option value="familiar">👨‍👩‍👧‍👦 Evento Familiar</option>
                            <option value="corporativo">🏢 Evento Corporativo</option>
                            <option value="otro">🎉 Otro</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <textarea name="message" placeholder="Cuéntanos sobre tu evento..." rows="3"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="chat-submit-btn">
                            <i class="fas fa-paper-plane"></i>
                            <span>Enviar Mensaje</span>
                        </button>
                    </div>
                    
                    <div class="result"></div>
                </form>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="chat-footer">
            <div class="quick-actions">
                <button type="button" class="quick-btn" onclick="fillQuickMessage('Quiero información sobre bodas')">
                    💒 Bodas
                </button>
                <button type="button" class="quick-btn" onclick="fillQuickMessage('Necesito cotización para XV años')">
                    👑 XV Años
                </button>
                <button type="button" class="quick-btn" onclick="fillQuickMessage('Información sobre precios')">
                    💰 Precios
                </button>
            </div>
        </div>
    </div>
</div>

<style>
/* Reset básico */
.chat-popup * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* Chat Icon - Botón flotante */
.chat-icon {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 10001;
}

.chat-toggler {
    position: relative;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, #d4af37 0%, #f4d03f 100%);
    border: none;
    color: #2c1810;
    font-size: 24px;
    cursor: pointer;
    box-shadow: 0 4px 20px rgba(212, 175, 55, 0.4);
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.chat-toggler:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 25px rgba(212, 175, 55, 0.6);
}

.chat-pulse {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: rgba(212, 175, 55, 0.4);
    animation: pulse 2s infinite;
    pointer-events: none;
}

@keyframes pulse {
    0% {
        transform: scale(1);
        opacity: 1;
    }
    100% {
        transform: scale(1.4);
        opacity: 0;
    }
}

/* Chat Popup - Contenedor principal */
.chat-popup {
    position: fixed;
    bottom: 90px;
    right: 20px;
    width: 350px;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
    z-index: 10000;
    display: none;
    overflow: hidden;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
}

.popup-inner {
    display: flex;
    flex-direction: column;
    height: auto;
    max-height: 550px;
}

/* Header del chat */
.chat-header {
    background: linear-gradient(135deg, #2c1810 0%, #4a2c1a 100%);
    padding: 15px 18px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: white;
    flex-shrink: 0;
    min-height: 70px;
}

.chat-header-info {
    display: flex;
    align-items: center;
    flex: 1;
    min-width: 0;
}

.chat-avatar {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #d4af37, #f4d03f);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 12px;
    color: #2c1810;
    font-size: 16px;
    flex-shrink: 0;
}

.chat-details {
    flex: 1;
    min-width: 0;
}

.chat-details h4 {
    font-size: 16px;
    font-weight: 600;
    line-height: 1.2;
    margin-bottom: 3px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.chat-status {
    font-size: 12px;
    color: #4ade80;
    display: flex;
    align-items: center;
    line-height: 1;
}

.chat-status::before {
    content: '';
    width: 6px;
    height: 6px;
    background: #4ade80;
    border-radius: 50%;
    margin-right: 5px;
    flex-shrink: 0;
}

.close-chat {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    border: none;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 14px;
    flex-shrink: 0;
}

.close-chat:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: rotate(90deg);
}

/* Body del chat */
.chat-body {
    flex: 1;
    padding: 18px;
    background: #f8f9fa;
    overflow-y: auto;
    max-height: 400px;
}

/* Mensaje de bienvenida */
.chat-welcome {
    margin-bottom: 18px;
}

.welcome-message {
    display: flex;
    align-items: flex-start;
    gap: 10px;
}

.message-avatar {
    width: 32px;
    height: 32px;
    background: linear-gradient(135deg, #d4af37, #f4d03f);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #2c1810;
    font-size: 12px;
    flex-shrink: 0;
    margin-top: 2px;
}

.message-content {
    background: white;
    padding: 12px 15px;
    border-radius: 15px 15px 15px 5px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    flex: 1;
    min-width: 0;
}

.message-content p {
    font-size: 13px;
    line-height: 1.4;
    color: #333;
    margin-bottom: 4px;
    word-wrap: break-word;
}

.message-content p:last-of-type {
    margin-bottom: 8px;
}

.message-time {
    font-size: 10px;
    color: #666;
    display: block;
}

/* Formulario */
.chat-form {
    margin-top: 0;
}

.chat-form .form-group {
    margin-bottom: 12px;
}

.chat-form .form-group:last-child {
    margin-bottom: 0;
}

.chat-form input,
.chat-form select,
.chat-form textarea {
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #e1e5e9;
    border-radius: 8px;
    font-size: 14px;
    font-family: inherit;
    transition: all 0.3s ease;
    background: white;
    outline: none;
    line-height: 1.4;
}

.chat-form input:focus,
.chat-form select:focus,
.chat-form textarea:focus {
    border-color: #d4af37;
    box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.1);
}

.chat-form input::placeholder,
.chat-form textarea::placeholder {
    color: #9ca3af;
    font-size: 14px;
}

.chat-form textarea {
    resize: vertical;
    min-height: 70px;
    max-height: 120px;
    font-family: inherit;
}

.chat-form select {
    cursor: pointer;
    appearance: none;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
    background-position: right 12px center;
    background-repeat: no-repeat;
    background-size: 16px;
    padding-right: 40px;
}

.chat-submit-btn {
    width: 100%;
    padding: 12px 16px;
    background: linear-gradient(135deg, #d4af37 0%, #f4d03f 100%);
    border: none;
    border-radius: 8px;
    color: #2c1810;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-height: 44px;
}

.chat-submit-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
}

/* Footer del chat */
.chat-footer {
    padding: 15px 18px;
    background: white;
    border-top: 1px solid #e5e7eb;
    flex-shrink: 0;
}

.quick-actions {
    display: flex;
    gap: 6px;
    flex-wrap: wrap;
    justify-content: center;
}

.quick-btn {
    padding: 8px 12px;
    background: #f3f4f6;
    border: 1px solid #d1d5db;
    border-radius: 16px;
    font-size: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    color: #374151;
    white-space: nowrap;
    flex: 0 0 auto;
}

.quick-btn:hover {
    background: #d4af37;
    color: white;
    border-color: #d4af37;
}

/* Scrollbar */
.chat-body::-webkit-scrollbar {
    width: 4px;
}

.chat-body::-webkit-scrollbar-track {
    background: transparent;
}

.chat-body::-webkit-scrollbar-thumb {
    background: #d4af37;
    border-radius: 2px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .chat-icon {
        bottom: 15px;
        right: 15px;
    }
    
    .chat-toggler {
        width: 55px;
        height: 55px;
        font-size: 22px;
    }
    
    .chat-popup {
        bottom: 80px;
        right: 15px;
        left: 15px;
        width: auto;
        max-width: none;
    }
    
    .popup-inner {
        max-height: calc(100vh - 100px);
    }
    
    .chat-body {
        padding: 15px;
        max-height: calc(100vh - 200px);
    }
    
    .chat-header {
        padding: 12px 15px;
        min-height: 60px;
    }
    
    .chat-footer {
        padding: 12px 15px;
    }
    
    .quick-btn {
        font-size: 11px;
        padding: 6px 10px;
    }
}

@media (max-width: 480px) {
    .chat-popup {
        bottom: 75px;
        right: 10px;
        left: 10px;
    }
    
    .chat-body {
        padding: 12px;
    }
    
    .chat-header {
        padding: 10px 12px;
    }
    
    .chat-footer {
        padding: 10px 12px;
    }
    
    .chat-form input,
    .chat-form select,
    .chat-form textarea {
        padding: 10px 12px;
        font-size: 13px;
    }
    
    .chat-submit-btn {
        padding: 10px 14px;
        font-size: 13px;
        min-height: 40px;
    }
    
    .quick-actions {
        gap: 4px;
    }
    
    .quick-btn {
        font-size: 10px;
        padding: 5px 8px;
    }
}

/* Altura máxima para pantallas muy pequeñas */
@media (max-height: 600px) {
    .popup-inner {
        max-height: calc(100vh - 80px);
    }
    
    .chat-body {
        max-height: calc(100vh - 180px);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatToggler = document.querySelector('.chat-toggler');
    const chatPopup = document.getElementById('chat-popup');
    const closeChat = document.querySelector('.close-chat');
    
    if (!chatToggler || !chatPopup || !closeChat) return;
    
    // Toggle chat
    chatToggler.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        if (chatPopup.style.display === 'block') {
            chatPopup.style.display = 'none';
        } else {
            chatPopup.style.display = 'block';
        }
    });
    
    // Close chat
    closeChat.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        chatPopup.style.display = 'none';
    });
    
    // Close when clicking outside
    document.addEventListener('click', function(e) {
        if (!chatPopup.contains(e.target) && !chatToggler.contains(e.target)) {
            chatPopup.style.display = 'none';
        }
    });
    
    // Prevent closing when clicking inside popup
    chatPopup.addEventListener('click', function(e) {
        e.stopPropagation();
    });
});

// Fill quick message function
function fillQuickMessage(message) {
    const textarea = document.querySelector('.chat-form textarea[name="message"]');
    if (textarea) {
        textarea.value = message;
        textarea.focus();
    }
}
</script>