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
          Existen personas malintencionadas que ofrecen el SOAT con descuentos exorbitantes y exigen que el pago se realice mediante tarjeta de crédito.
          <span class="sombreado">¡No caigas!</span>
        </p>
        <p>
          Adquiere tu SOAT de forma segura y con asesoría de profesionales. <a class="enlace2" href="#">Conoce más.</a>
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