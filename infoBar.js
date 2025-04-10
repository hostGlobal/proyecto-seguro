

// Función para abrir el PDF de tarifas
function verTarifas() {
  const pdfUrl = "https://www.fasecolda.com/cms/wp-content/uploads/2024/12/Tarifas-SOAT-2025-referencia-Fasecolda.pdf";
  window.open(pdfUrl, "_blank");
}



// Función para alternar la visibilidad del menú en la info bar (para móvil)
function toggleInfoMenu() {
  const menu = document.querySelector('.info-bar .info-links');
  menu.classList.toggle('active');
}
