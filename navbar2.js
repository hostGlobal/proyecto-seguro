function navItemWhatsApp(itemKey) {
    // Teléfono
    const telefono = "573014200329"; // Ajusta a tu número
    
    // El mensaje que vas a enviar
    let mensaje = "";
  
    switch (itemKey) {
      case 'Seguros':
        mensaje = "Hola, estoy interesado en más información sobre SEGUROS. ¿Podrías ayudarme?";
        break;
      case 'Inicio':
        mensaje = "Hola, estoy revisando la sección 'Inicio'. Quiero más detalles...";
        break;
      case 'Seguro para personas':
        mensaje = "Hola, ¿Podrías orientarme?";
        break;
      case 'Reclamaciones':
        mensaje = "Hola, necesito hacer una reclamación. ¿Podrías asesorarme?";
        break;
      case 'Ayuda':
        mensaje = "Hola, ¿Podrías ayudarme?";
        break;
      default:
        mensaje = "Hola, me interesa más información sobre el SOAT. ¿Podrías ayudarme?";
        break;
    }
  
    const url = "https://api.whatsapp.com/send?phone=" + telefono + 
                "&text=" + encodeURIComponent(mensaje);
  
    window.open(url, "_blank");
  }