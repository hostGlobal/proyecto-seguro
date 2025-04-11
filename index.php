<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguro obligatorio- SOAT</title>
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons//apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicons//apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicons//apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicons//apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicons//apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicons//apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicons//apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicons//apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicons//apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/favicons//android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicons//favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicons//favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicons//favicon-16x16.png">
<link rel="manifest" href="images/favicons//manifest.json">
<link rel="stylesheet" href="general.css">
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="navbar2.css">
<link rel="stylesheet" href="soat-section.css">
<link rel="stylesheet" href="infoBar.css">
<link rel="stylesheet" href="soat-info.css">
<link rel="stylesheet" href="benefits.css">
<link rel="stylesheet" href="evitaFraude.css">
<link rel="stylesheet" href="tenEnCuenta.css"> <!-- Enlaza tu CSS -->
<link rel="stylesheet" href="reclamaciones.css"> <!-- Aquí enlazas el CSS -->
<link rel="stylesheet" href="footerSection.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<body>
<?php 
include 'navbar.php';
renderNavbar(1); // Este es el paso actual (1 = Cotización)
?>
<?php
    // Incluir la barra
    include 'navbar2.php';
    // Renderizar la segunda barra
    // Le pasamos el ítem activo, por ejemplo 'Seguros'
    renderSecondNavbar('Seguros');
?>
<?php include 'soat-section.php'; ?>
<?php
    include 'infoBar.php';
    renderInfoBar();
?>
<?php include 'soat-info.php'; ?>
<?php

    include 'benefits-section.php';
    renderBenefitsSection(); 
  ?>
  <?php
   include 'evitaFraude.php';
   renderEvitaFraude();
   ?>
   <?php
    // Otras secciones (navbar, infoBar, etc.)

    // Incluir y mostrar la sección Reclamaciones
    include 'reclamaciones.php';
    renderReclamaciones();
  ?>
<?php 
    // Incluye navbar, secciones previas, etc.

    // Incluir y mostrar la sección "Ten en cuenta"
    include 'tenEnCuenta.php';
    renderTenEnCuenta();

    // Otras secciones...
  ?>
<!-- Incluir y renderizar el footer -->
<?php
  include 'footerSection.php';
  renderFooterSection();
?>
<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Tus archivos JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js" defer></script>
  <script src="soat-section.js" defer></script>
  <script src="infoBar.js" defer></script>
  <script src="navbar.js" defer></script> 
  <script src="navbar2.js" defer></script>
  
<script>
      
  // Enviar WhatsApp sin placa (mensaje genérico)
function enviarWhatsAppSinPlaca() {
    const telefono = "573507335603"; // Reemplaza con tu número real
    const mensaje = "Hola, estoy interesado en comprar el SOAT. ¿Podrías ayudarme?";
    const url = "https://api.whatsapp.com/send?phone=" + telefono + "&text=" + encodeURIComponent(mensaje);
    window.open(url, "_blank");
}
    </script>
</body>
</html>

