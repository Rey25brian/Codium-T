const buscadorin=document.getElementById("buscadorin").value;
const sectionServicios=document.getElementById("servicios").value;
const sectionSuscripcion=document.getElementById("pagos").value;


function buscador(){
const buscadorin=document.getElementById("buscadorin").value;
switch (buscadorin) {
    case "usuarios":
        window.location.href = 'PruebaUsuarios.html';
      break;
    case "especialidades":
        window.location.href = 'Especialidades.html';
       break;
    case "hospital":
        window.location.href = 'PruebaHospitales.html';
      break;
      case "hospitales":
        window.location.href = 'PruebaHospitales.html';
      break;
    default:
      alert('no se encuentra su busqueda');
  }
}
