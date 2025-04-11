<!-- Sección SOAT -->
<section class="soat-hero" id="soat-hero">
  <!-- Contenedor izquierdo: imagen e información -->
  <div class="soat-left">
    <!-- Puedes usar una imagen ilustrativa o un div con fondo -->
    <img src="images/imagenSoat.png" alt="SOAT SURA" class="soat-image">

    <div class="soat-info">
      <h2>SOAT</h2>
      <p>Recorre con tranquilidad todas las vías del país</p>
      
      <button class="btn-primary" onclick="enviarWhatsAppSinPlaca()">Así lo compras</button>
      <p class="tip">¡No caigas en fraudes!</p>

      <!-- Puedes poner también bullets o textos adicionales -->
      <ul class="soat-bullets">
        <li>No te demores, adquiere tu SOAT ahora</li>
        <li>Beneficios exclusivos por tu compra</li>
      </ul>
    </div>
  </div>

  <!-- Contenedor derecho: formulario para cotizar -->
  <div class="soat-right">
    <h3>Tu <strong>SOAT</strong> 200% digital</h3>
    <label for="placa" class="sr-only">Ingresa tu placa</label>
    <input type="text" id="placa" class="placa-input" placeholder="Ingresa tu placa">
    <button class="btn-cotizar" onclick="enviarWhatsApp()">Cotizar</button>
  </div>
</section>
