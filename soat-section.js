// soat-section.js

// Función para validar que la placa tenga 5 o 6 caracteres alfanuméricos en mayúsculas
function validarPlaca(placa) {
    const regex = /^(?=.*[A-Z])(?=.*\d.*\d)[A-Z0-9]{5,6}$/;
    return regex.test(placa);
  }
  
  function enviarWhatsApp() {
    // 1. Obtenemos la placa y la convertimos a mayúsculas
    var placa = document.getElementById("placa").value.trim().toUpperCase();
  
    // 2. Validamos que la placa no esté vacía
    if (!placa) {
      Swal.fire({
        icon: 'warning',
        text: 'Por favor, ingresa tu placa.',
        showConfirmButton: true,
        confirmButtonText: 'Aceptar'
      });
      return;
    }
  
    // 3. Validamos que la placa tenga 5 o 6 caracteres alfanuméricos
    if (!validarPlaca(placa)) {
      Swal.fire({
        icon: 'error',
        title: 'Placa inválida'
      });
      return;
    }
  
    // 4. Definimos el número de WhatsApp (con código de país)
    var telefono = "573003642841"; // Ajusta con tu número real
  
    // 5. Construimos el mensaje
    var mensaje = "Hola, quiero cotizar el SOAT para la placa: " + placa;
  
    // 6. Codificamos el mensaje y armamos la URL de WhatsApp
    var url = "https://api.whatsapp.com/send?phone=" + telefono + "&text=" + encodeURIComponent(mensaje);
  
    // 7. Abrimos la URL en otra pestaña
    window.open(url, "_blank");

    
  }
  