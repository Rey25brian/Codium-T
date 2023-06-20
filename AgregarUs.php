<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SystemDoc</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/indexA.css">

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        
        
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
    
        <link rel="stylesheet" href="css/aos.css">
    
        <link rel="stylesheet" href="css/ionicons.min.css">
        
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/galery.css">
      </head>
<body>
    <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex justify-content-end" >
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">                <p class="mb-0 register-link"><a href="index.html" class="mr-3 text-dark bg-danger">Cerrar sesion</a>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	<!--Aqui inicia el menu-->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="indexAdm.html">SystemDoc</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span>
	      </button>
		  
        <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="indexAdm.html" class="nav-link" ><span>Inicio</span></a></li>
	          <li class="nav-item"><a href="PruebaUsuarios.html" class="nav-link" ><span>Usuarios</span></a></li>
			  <li class="nav-item"><a href="PruebaEspecialidades.html" class="nav-link" ><span>Especialidades</span></a></li>
	          <li class="nav-item"><a href="PruebaHospitales.html" class="nav-link" ><span>Hospitales</span></a></li>
            <li class="nav-item"><a href="listaMedicos.html" class="nav-link" ><span>Médicos</span></a></li>
            <li class="nav-item"><a href="listaComentario.html" class="nav-link" ><span>Comentarios</span></a></li>
	          <li class="nav-item cta mr-md-2">
              <div class="input-group">
                <div class="input-group">
             
              </div>
            </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <!--Aqui termina inicia el menu-->
    <br><br><br><br> <br>

      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 p-4">
            <div class="card">
              <div class="card-body formAd text-center">
                <h3 class="tituloForm">Registrar Usuario</h3>
                <span class="badge ">*Todos los campos son
                  obligatorios.</span>
                <form class="mt-4" action="ctrlUsuario.php" method="post" >
                  <div class="col"><input type="text" name="Nombres" class="form-control form-control-lg" placeholder="Nombre" required/><br> </div>
                  <div class="col"><input type="text" name="Apellidos" class="form-control form-control-lg" placeholder="Apellido" required/><br></div>
                  <div class="col"><input type="text" name="Edad" class="form-control form-control-lg mt-3" placeholder="Edad" required/> <br> </div>
                  <div class="col"><input type="text" name="Telefono" class="form-control form-control-lg" placeholder="Telefono" required/><br></div>
                  <div class="col"><input type="text" name="Domicilio" class="form-control form-control-lg" placeholder="Domicilio" required/><br></div>  
                  <div class="col"><input type="email" name="Correo" class="form-control form-control-lg"placeholder="Correo" required/><br></div>
                  <div class="col"><input type="password" name="Password" class="form-control form-control-lg"placeholder="Contraseña" required/><br></div>
                  <select name="suscripcion" class="form-control form-control-lg">
  <option value="Gratis">Gratis</option>
  <option value="Pro" >Pro</option>
  <option value="Plus">Plus</option>
</select>
                  <div class="mt-3 align-items-center" >
                    <button type="button" onclick="location.href='login.html'" class="btn btn-primary"></a>Volver</button>
                    <input type='hidden' name='opc' value='1'><input class="btn btn-primary" type="submit" name="Registrar">
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
<br><br>
<!--Inicio footer-->
<footer class="ftco-footer ftco-section img" id="imgpie">
    <div class="overlay"></div>
  <div class="container-fluid px-md-5">
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">SystemDoc</h2>
          <p>Facilitando el manejo y consulta de
            información general de hospitales de Nezahualcóyotl.</p>
          <ul class="ftco-footer-social list-unstyled mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      
      
      <div class="col-md">
         <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Acerca</h2>
          <ul class="list-unstyled">
            <li><a href="acerca.html"><span class="icon-long-arrow-right mr-2"></span>Conocenos</a></li> 
            <li><a href="politicas.html"><span class="icon-long-arrow-right mr-2"></span>Politicas de Privacidad</a></li>                 
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Envianos tus dudas y sugerencias</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Colonia reforma #172, 57840 Nezahualcoyotl</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">554200039</span></a></li>
                <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">dudas@systemDoc.com</span></a></li>
              </ul>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
      </div>
    </div>
  </div>
</footer>
<!--Fin de footer-->



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="js/buscadoradmin.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>

<script src="js/main.js"></script>
</body>
</html>