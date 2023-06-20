const buscadorin=document.getElementById("buscadorin").value;
const sectionServicios=document.getElementById("servicios").value;
const sectionSuscripcion=document.getElementById("pagos").value;


function buscador(){
const buscadorin=document.getElementById("buscadorin").value;
switch (buscadorin) {
    case "noticias":
        window.location.href = 'noticias.html';
      break;
    case "especialidades":
        window.location.href = 'especialidades.html';
       break;
    case "hospital":
        window.location.href = 'especialidades.html';
      break;
      case "hospitales":
        window.location.href = 'especialidades.html';
      break;
      case "citas":
        window.location.href = 'citas.html';
      break;
    default:
      alert('no se encuentra su busqueda');
  }
}
