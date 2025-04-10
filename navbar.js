function stepWhatsApp(stepNumber) {
    // El teléfono al que enviarás el mensaje
    const telefono = "573508225956";
    
    // Variable para el mensaje
    let mensaje = "";
  
    // Decides qué mensaje enviar según el número de paso
    switch (stepNumber) {
      case 1: // Cotización
        mensaje = "Hola, estoy interesado en la Cotización del SOAT. ¿Podrías ayudarme?";
        break;
      case 2: // Datos
        mensaje = "Hola, estoy en la parte de Datos del SOAT y tengo algunas dudas. ¿Podrías ayudarme?";
        break;
      case 3: // Validación
        mensaje = "Hola, necesito Validar información sobre mi SOAT. ¿Podrías orientarme?";
        break;
      case 4: // Pago
        mensaje = "Hola, estoy listo para realizar el Pago del SOAT. ¿Cómo procedo?";
        break;
      default:
        mensaje = "Hola, me interesa más información sobre el SOAT. ¿Podrías ayudarme?";
        break;
    }
  
    // Construimos la URL de WhatsApp
    const url = "https://api.whatsapp.com/send?phone=" + telefono + "&text=" + encodeURIComponent(mensaje);
  
    // Abrimos en una nueva pestaña
    window.open(url, "_blank");
  }