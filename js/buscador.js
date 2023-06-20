const buscadorin=document.getElementById("buscadorin").value;
const sectionServicios=document.getElementById("servicios").value;
const sectionSuscripcion=document.getElementById("pagos").value;


function buscador(){
const buscadorin=document.getElementById("buscadorin").value;
switch (buscadorin) {
    case "servicios":
        document.getElementById("servicios").scrollIntoView({behavior: 'smooth'});
      break;
    case "pagos":
        document.getElementById("pagos").scrollIntoView({behavior: 'smooth'});
       break;
    case "especialidades":
        document.getElementById("especialidades").scrollIntoView({behavior: 'smooth'});
      break;
      case "testimonios":
        document.getElementById("testimonios").scrollIntoView({behavior: 'smooth'});
      break;
      case "acerca":
        window.location.href = 'acerca.html';
      break;
      case "fotos":
        window.location.href = 'galeria.html';
      break;
      case "contacto":
        window.location.href = 'contacto.html';
      break;
      case "login":
        window.location.href = 'login.html';
      break;
    default:
      alert('no se encuentra su busqueda');
  }
}
