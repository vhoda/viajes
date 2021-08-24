<?php


session_start();

	if(!isset($_SESSION['Usuario'])):
	//if(!$_SESSION['Usuario']):

?>

<script>
	alert("Acceso denegado ");
	window.location.href="index.php";
</script>

<?php

	endif;
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Viajes</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
 		<link rel="stylesheet" type="text/css" href="./CSS/estilos.css">
</head>
<body>



	
									   
<nav class="navbar navbar-expand-lg navbar-light bg-light mt-4" id="Inicio">

  <div class="container-fluid ">

	<div class="dropdown m-3">
	  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
	    <?php  echo $_SESSION['Usuario']  ?>
	  </button>

	  <ul class="dropdown-menu" >
	    <li class="Reservas" data-bs-toggle="modal" data-bs-target="#Reservas"><a class="dropdown-item" href="#" >Reservas</a></li>
	    <li class="Compras" data-bs-toggle="modal" data-bs-target="#Compras" ><a class="dropdown-item" href="#">Compras</a></li>
	    <li class="Cerrar"  ><a class="dropdown-item" href="logout.php">Cerrar Sesión</a></li>
	   
	  </ul>
	</div>




<!-- Modal Reservas -->
<div class="modal fade " id="Reservas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reservas</h5>
             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
	      <div class="modal-body">     
	      	Salieron las reservas
	      </div>
      </div> 
    </div>
  </div>

<!-- Modal Compras-->
<div class="modal fade " id="Compras" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Compras</h5>
             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
	      <div class="modal-body">     
	      	Salieron las Compras
	      </div>
      </div> 
    </div>
  </div>


  	<i class="fas fa-bus"></i>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="#Inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Destinos">Nuestras Rutas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Contactos">Contactos</a>
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Destino" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>



<!--Contenido o section -->
<div class="p-4" id="Destinos">
  <h1>
  	Destinos mas buscados
  </h1>
</div>


<div class="row row-cols-1 row-cols-md-3 g-4  m-2 ">

<?php

require_once('./Consultas/SelectRutas.php');

?>

 <?php foreach ($rutas as  $ruta): ?>

 <div class="col">
    <div class="card">
      <img src="Imagenes/<?php echo $ruta[ 'Imagen']  ?>" class="card-img-top" alt="<?php echo $ruta[ 'Imagen']  ?>" width="1200px" height="310px">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $ruta[ 'Nombre']  ?> </h5>
        <p class="card-text">
         <?php echo $ruta[ 'Info']  ?>
        </p>
       
      </div>
      <div class="card-footer d-flex justify-content-between"   >
        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Comprar</button>
        <strong calss="pl-2"><?php echo $ruta[ 'Precio']  ?></strong>
        
       <button class="btn btn-warning align-items-start" data-bs-toggle="modal" data-bs-target="#exampleModal">Reservar</button>
      </div>
    </div>
  </div>
  <?php endforeach; ?> 
</div>




<hr id="Contactos">
<!--Footer -->
<div class="row g-4  m-4 pb-3 d-flex justify-content-center">
    <div class="col-sm-4 ">
        <div class="card">
            <div class="card-body">
              
                <h5 class="card-title text-center">Contacto</h5>
          
                <div> 
                <strong>Reservas</strong>
                <p>
                     +56 2 2493 0000 <br>
                  +56 2 2493 6000<br>
                 </p> 
                </div>
                <div>
                <strong>¡Visitenos!</strong>
                <p>
                  Av Los robles 3074
                  <br>
                  Lagunillas, Coronel
                </p>
                </div>
                <div>
                <strong>Horarios</strong>
                <p>
                  Lunes A viernes 06:00 am : 18:00pm
                  <br>
                  Sabados y domingos 08:00am : 16:00pm 

                </p>
              </div>
               
                
            </div>
        </div>
    </div>
    
     <div class="col-sm-4 " >
        <div class="card">
            <div class="card-body align-items-end">
                <h5 class="card-title text-center">Redes Sociales</h5>
                <div class="text-center">
                  <a href="#" title="Whatsapp" >
                    <i class="fab fa-whatsapp-square fa-7x"></i><br> </a>
                  <a href="#" title="Facebook"><i class="fab fa-facebook-square fa-7x"></i><br> </a>
                  <a href="#" title="Instagram"> <i class="fab fa-instagram-square fa-7x"> </i><br> </a>
                  
                  
                </div>
            </div>
        </div>
    </div>
        
</div>

<div class="row  m-4 pb-3" id="contacto" >
    <div class=" pt-4 d-flex justify-content-center" >
        <p> Desarrollado X Javier Navarro</p>
    </div>
    
</div>







	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
 
	<script src="https://kit.fontawesome.com/247d2323bf.js" crossorigin="anonymous"></script>	

</body>
</html>