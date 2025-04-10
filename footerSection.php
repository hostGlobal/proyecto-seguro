<?php
function renderFooterSection() {
    echo '
    <footer class="footer-section">
      <div class="container">
        <div class="footer-links">
          <a href="#" class="certificado-link">
            Contamos con el certificado de seguridad
            <img src="images/cr.png" alt="Candado">
          </a>
          <p href="#" class="politicas-link">
            Medios de pago:
          </p>
          <img class="img-pagos" src="images/mediosPagosS.png" alt="Pagos">
        </div>
        
        <hr class="footer-hr">

        <p class="footer-text">
          © 2023. Todos los derechos reservados.
          <br>
          Políticas de uso y seguridad | Política de privacidad y ley de datos personales.
        </p>
      </div>
      <!-- Opción: Agregar un botón flotante o chat en línea -->
      <div class="btn-chat">
        <img src="images/flotante2.png" onclick="enviarWhatsAppSinPlaca()" alt="Chat Soat">
      </div>
    </footer>
    ';
}
?>
