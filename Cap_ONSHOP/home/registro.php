<DOCTYPE html>
    <html long="es">

    <head>
        <title></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Complatible" content="IR-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style2.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="image/favicon/apple-icon-120x120.png" />
        <title>Registro</title>
    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <img src="image/etereo_logo.png" width="100px" height="100px" alt>
            <a class="navbar-brand" href="index.php"><h2>ETÉREO</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Inicio</a></li>
                    <li class="nav-item dropdown">
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



    <div class="login-page">
         <div class="form">
             <form action="registro_conexion.php" method="POST" >
             <h2>Registrarse</h2>
             <input type="text" placeholder="Nombre Completo" name="nombre">
             <input type="text" placeholder="Nombre para Usuario" name="usuario">
             <input type="email" placeholder="Correo Electronico" name="email">
             <input type="password" placeholder="Contraseña" name="contrasena">
             <button>Registrarse</button>
             <p class="message">Ya tienes cuenta <a href="login.php">iniciar sesión</a></p>
            </form>
         </div>
    </div>

    <footer>
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; ETÉREO distribuidora textil 2021, todos los derechos reservados</p>
            <a href="">Contactanos</a><br>
            <a href="privacidad.html">Politica de Privacidad</a><br>
            <a href="about.html">Sobre Nosotros</a><br>
            <a aling="right" href="registro.php">Registrarse</a>
            <div class="logo_footer">
            <img src="image/etereo_logo.png" width="100px" height="100px">
        </div>
        </div>
    </footer>
     
   </body>

</html>