<?php
function renderEvitaFraude() {
    echo '
    <section class="evita-fraude" id="evita-fraude">
      <!-- Columna Izquierda: Imagen -->
      <div class="fraude-left">
        <img src="images/city.png" alt="Evita el fraude" class="fraude-img">
      </div>
      
      <!-- Columna Derecha: Texto y botones -->
      <div class="fraude-right">
        <h2>Evita el fraude</h2>
        <p>
          Hay personas malintencionadas que ofrecen el SOAT con descuento por WhatsApp, SMS o redes sociales. Asimismo, 
          solicitan que el pago sea mediante tarjetas de crédito. <span class="sombreado">Todo esto es fraude. ¡No caigas!</span>
        </p>
        <p>
          Compra tu SOAT por Suraenlinea.com con total asesoría. <a class="enlace2" href="#">Conoce más.</a>
        </p>
        <div class="botones-fraude">
          <button class="btn-fraude" onclick="verTarifas()">Ver tarifas</button>
          <a href="#soat-hero" class="btn-fraude">Consultar tu SOAT</a>
        </div>
      </div>
    </section>
    ';
}
?>