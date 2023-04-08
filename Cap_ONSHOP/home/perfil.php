<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Es necesario que inicie sesión");
                window.location = "login.php"
            </script>
        ';
        //header("location: login.php");
        session_destroy();
        die();
        
    }

   
   

  
?>




<!DOCTYPE html>
  <html>
      <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="image/favicon/apple-icon-120x120.png" />
        <title>Perfil</title>
       
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
      
        <link href="css/styles.css" rel="stylesheet" />
      </head>
      <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <img src="image/logo_ponce_pequeño.png" width="100px" height="100px" alt>
            <a class="navbar-brand" href="index.php"><h2>PONCE</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Inicio</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Tienda</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Todos los Productos</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Mas Populares</a></li>
                            <li><a class="dropdown-item" href="#!">Productos Nuevos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Iniciar Sesion</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">Sobre Nosotros</a></li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Carrito
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <header class="titulo_perfil">
    <a href="cerrar_session.php">Cerrar sesión</a>
             <h2  aling="center">Mi Perfil</h2> 
            </header> 
        
<footer>
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; PONCE distribuidora textil 2021, todos los derechos reservados</p>
            <a href="">Contactanos</a><br>
            <a href="privacidad.html">Politica de Privacidad</a><br>
            <a href="about.html">Sobre Nosotros</a><br>
            <a aling="right" href="registro.php">Registrarse</a>
            <div class="logo_footer">
            <img src="image/logo_ponce_pequeño.png" width="100px" height="100px">
        </div>
        </div>
    </footer>
      </body>
  </html>