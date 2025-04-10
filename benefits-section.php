<?php
function renderBenefitsSection() {
?>
    <section class="soat-benefits" id="beneficios-soat">
      <div class="container">
        <h2>Beneficios del SOAT</h2>
        <p class="section-description">
        En caso de tener un accidente de tránsito en territorio colombiano, este documento obligatorio cubre las lesiones
        o fallecimiento de conductores, pasajeros, o peatones <span class="sombreado">(no cubre los daños a vehiculos de terceros ni a sus propiedades).</span>
        </p>

        <div class="benefits-grid">
          <!-- Tarjeta 1 -->
          <div class="benefit-item">
            <img src="images/ico-aten-med.png" alt="Icono 1" class="benefit-icon">
            <h3>Gastos de atención médica</h3>
            <p>
            Hasta <span class="sombreado">701.68 UVT (unidades de valor tributario)*</span> para la atención médica de las personas involucradas en el accidente (seas tú como conductor, los pasajeros o peatones).
          Para los vehículos que son parte del rango diferencial, según el <a href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma.php?i=200084" target="_blank" class="enlace"> Decreto 2497 de 2022</a>, será hasta <span class="sombreado">263.13 UVT.</span>
            </p>
          </div>

          <!-- Tarjeta 2 -->
          <div class="benefit-item">
            <img src="images/ico-rep-fall.png" alt="Icono 2" class="benefit-icon">
            <h3>Reparación por fallecimiento</h3>
            <p>
            <span class="sombreado">750 salarios mínimos diarios legales vigentes</span> para los beneficiarios de la persona que fallezca como producto del accidente.
            </p>
          </div>

          <!-- Tarjeta 3 -->
          <div class="benefit-item">
            <img src="images/ico-res-inc.png" alt="Icono 3" class="benefit-icon">
            <h3>Respago por incapacidad permanente</h3>
            <p>
            Hasta <span class="sombreado">180 salarios mínimos diarios legales vigentes</span> para ti si quedas con alguna incapacidad permanente como producto del accidente.
            </p>
          </div>

          <!-- Tarjeta 4 -->
          <div class="benefit-item">
            <img src="images/ico-gas-trans.png" alt="Icono 4" class="benefit-icon">
            <h3>Gastos de transporte</h3>
            <p>
            Hasta <span class="sombreado">8.77 UVT (unidades de valor tributario)</span> para 
            transportarte desde el sitio del accidente hasta un centro médico.
            </p>
          </div>
        </div>

        <a href="pdf/condiciones.pdf" class="soat-conditions" target="_blank">Ver condiciones de tu SOAT</a>
      </div>
    </section>
<?php
}
?>
