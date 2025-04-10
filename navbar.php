<?php
function renderNavbar($currentStep = 1) {
    $steps = [
        1 => "Cotización",
        2 => "Datos",
        3 => "Validación",
        4 => "Pago"
    ];
    
    echo '<header class="navbar">';
    
    // Logo y Nombre
    echo '<div class="logo-container">';
    echo '<a href="#" class="logo">Seguroenlinea.com</a>';
    echo '<span class="separator">|</span>';
    echo '<a href="#" class="logo">SOAT</a>';
    echo '<img src="images/logo2.png" alt="Sura Logo" class="logo-img">';
    echo '</div>';
    
  // Pasos de navegación
  echo '<nav class="nav-steps">';
  foreach ($steps as $step => $name) {
      $activeClass = ($step == $currentStep) ? 'active' : '';
      // Llamamos a la función JS con el parámetro $step
      echo '<div class="step ' . $activeClass . '" onclick="stepWhatsApp(' . $step . ')">';
      echo '  <span class="step-number">' . $step . '</span>';
      echo '  <span class="step-text">' . $name . '</span>';
      echo '</div>';
  }
  echo '</nav>';

  echo '</header>';
}
?>