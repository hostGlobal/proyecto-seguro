<?php
function renderTenEnCuenta() {
    echo '
    <section class="ten-en-cuenta">
      <div class="container">
        <h2>Ten en cuenta:</h2>
        <ul class="lista-icones">
          <li>
            <img src="images/hospital.png" alt="Ícono 1" class="icono-lista">
            <p>Todo institución prestadora de servicios de salud está obligada a atenderte si eres víctima de un accidente de tránsito.</p>
          </li>
          <li>
            <img src="images/ambulancia.png" alt="Ícono 2" class="icono-lista">
            <p>Por ley debes ser trasladado a la institución más cercana después del accidente.</p>
          </li>
          <li>
            <img src="images/monedas.png" alt="Ícono 3" class="icono-lista">
            <p>Tienes dos años para realizar la reclamación por muerte o incapacidad permanente después de ocurrido el hecho (en caso de muerte, lo hacen tus beneficiarios de ley).</p>
          </li>
          <li>
            <img src="images/hoja.png" alt="Ícono 4" class="icono-lista">
            <p>El SOAT no paga las incapacidades temporales, es decir, aquellas que su duración es por un tiempo determinado (días o meses). Estas deben ser tramitadas por la EPS o ARL a la que te encuentres afiliado. ​​​</p>
          </li>
        </ul>
        <h3>Para mayor información y conocer el estado de tu reclamación puedes comunicarte con:</h3>
       <div class="info-contacto">
  <!-- Cada tema en su propio <p> -->
  <p>
    <strong>En Bogotá, Cali o Medellín:</strong> marca 601 437 7888 desde Bogotá, 
    604 437 7888 desde Medellín o 602 437 7888 desde Cali (digita tu número de 
    identificación y sigue los pasos que te comunique la grabación).
  </p>
  
  <p>
    <strong>Línea Nacional:</strong> 018000 217888.
  </p>
  
  <p>
    <strong>Horario:</strong> de lunes a viernes de 8:00 a.m. a 6:00 p.m. 
    y sábados de 8:00 a.m a 12:00 m.
  </p>
</div>

      </div>
    </section>
    ';
}
?>
