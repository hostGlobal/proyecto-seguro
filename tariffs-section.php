<?php
function renderTariffsSection() {
    echo '
    <section class="tariffs-section">
      <div class="container">
        <h2>Tarifas SOAT</h2>
        <div class="tariffs-grid">
          <!-- Tarifa 1 -->
          <div class="tariff-card">
            <h3>Tarifa Básica</h3>
            <p class="valor">COP 500,000</p>
            <p class="descripcion">Para vehículos particulares</p>
          </div>
          <!-- Tarifa 2 -->
          <div class="tariff-card">
            <h3>Tarifa Intermedia</h3>
            <p class="valor">COP 600,000</p>
            <p class="descripcion">Para vehículos comerciales</p>
          </div>
          <!-- Tarifa 3 -->
          <div class="tariff-card">
            <h3>Tarifa Premium</h3>
            <p class="valor">COP 700,000</p>
            <p class="descripcion">Para vehículos de alta gama</p>
          </div>
          <!-- Tarifa 4 -->
          <div class="tariff-card">
            <h3>Tarifa Especial</h3>
            <p class="valor">COP 550,000</p>
            <p class="descripcion">Para vehículos antiguos</p>
          </div>
        </div>
      </div>
    </section>
    ';
}
?>
