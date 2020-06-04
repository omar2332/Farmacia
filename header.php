
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Inicio</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
    <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>
<body>

      <!-- Start your project here-->  
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top expandir">
      <div class="container">
        <a class="navbar-brand" href="index.php">FARMACIA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Inicio
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Nosotros.php">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="productos.php">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacto.php">Contacto</a>
            </li>
  
            <li>
              <?php
                session_start();  
                if(isset($_SESSION["id_usuario"])){
                  echo '<a class="nav-link text-dark bg-light" href="cerrarSesion.php">Cerrar Sesion</a>';
                }else{
                  echo '<a class="nav-link far fa-user fa-2x sesion" href="InicioSesion.php"></a>';
                }
              
              ?>
             
  
            </li>

            <li>
                <?php session_start();  
                if(isset($_SESSION["id_usuario"])){
                  echo '<a class="nav-link fas fa-cart-plus fa-2x sesion" href="cart.php"></a>';
                }
                
                ?>
                

            </li>

            <li>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Buscar">
            </li>

            <li>
              <a class="nav-link fab fa-sistrix fa-2x sesion"href="#"></a>
            </li>
          </ul>
        </div>
      