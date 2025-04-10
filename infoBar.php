<?php
function renderInfoBar() {
    echo '
    <div class="info-bar">
      <!-- Botón toggle (solo visible en móvil) -->
      <button class="menu-toggle" onclick="toggleInfoMenu()">Razones para comprar aquí</button>

      <!-- Menú de enlaces -->
      <ul class="info-links">
        <li><a onclick="enviarWhatsAppSinPlaca()">Reserva para comprar aquí</a></li>
        <li><a href="#beneficios-soat" >Beneficios del SOAT</a></li>
        <li><a href="#evita-fraude">Evita el fraude</a></li>
        <li><a href="#reclamaciones">¿Cómo reclamas?</a></li>
      </ul>
    </div>
    ';
}
?>