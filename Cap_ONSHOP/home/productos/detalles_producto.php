<?php
require '../config/database.php';
require '../config/config.php';
$db = new Database();
$conection = $db->conectar();

$sql = $conection->prepare("SELECT id_producto, nombre, precio FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

$id = isset($_GET['id_producto']) ? $_GET['id_producto'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';
if($id == '' || $token == ''){
    echo 'Error al procesar la peticion';
    exit;
}else {
    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);
    if($token == $token_tmp){
        $sql = $conection->prepare("SELECT count(id_producto) FROM productos WHERE id_producto=? AND activo=1");
        $sql->execute([$id]);
        if($sql->fetchColumn() > 0){
            $sql = $conection->prepare("SELECT nombre, descripion, precio, descuento FROM productos WHERE id_producto=? AND activo=1
            LIMIT 1");
            $sql->execute([$id]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $nombre = $row['nombre'];
            $descripcion = $row['descripion'];
            $precio = $row['precio'];
            $descuento = $row['descuento'];
            $precio_descuento = $precio - (($precio * $descuento) / 100);
            $dir_images = 'assets/images/'.$id.'/'; 

            $ruta_imagen = $dir_images . 'principal.PNG';

            if(!file_exists($ruta_imagen)){
                $ruta_imagen = 'assets/images/no_photo.PNG';
            }
            $images = array();
            if(file_exists($dir_images))
            {
            $dir = dir($dir_images);

            while(($archivo = $dir->read()) != false){
                if($archivo != 'principal.PNG' && (strpos($archivo, 'PNG') ||(strpos($archivo, 'png') ))){
                    $imagenes[] = $dir_images . $archivo;
            }
        }
        $dir->close();
      }  
    }else {
        echo 'Error al procesar la peticion';
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ETÉREO</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="icon" type="image/x-icon" href="image/favicon/apple-icon-120x120.png" />
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/ystyle.css" rel="stylesheet" />
</head>

<body>
    <!-- Navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <img src="../image/etereo_logo.png" width="100px" height="100px" alt>
            <a class="navbar-brand" href="../index.php"><h2>ETÉREO</h2><h6>FEEL THE LIFE</h6></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link " href="../login.php">Iniciar Sesion</a></li>
                    <li class="nav-item"><a class="nav-link " href="../about.html">Sobre Nosotros</a></li>
                </ul>
                     <a href="../checkout.php" class="btn btn-outline-dark">
                        <i class="bi-cart-fill me-1">ETEREO</i>
                        Carrito<span id="num_cart" class="badge bg-dark text-white ms-1 rounded-pill"><?php echo $num_cart; ?></span>
</a> 
            </div>
        </div>
    </nav>
   
    
    
    <div id="div-cookies" style="display: none;">
    Este sitio web necesita utilizar cookies, si continua navegando acepta su uso, puede conocer nuestro aviso de privacidad en
    <a hreflang="es" href="privacidad.html">Política de Privacidad</a>.
    <button type="button" class="btn btn-sm btn-primary" onclick="acceptCookies()">
        Acepto el uso de cookies
    </button>
</div>
<style>
#div-cookies {
    position: fixed;
    bottom: 0px;
    left: 0px;
    width: 100%;
    background-color: white;
    box-shadow: 0px -5px 15px gray;
    padding: 7px;
    text-align: center;
    z-index: 99;
}
</style>
<script>
function checkAcceptCookies() {
    if (localStorage.acceptCookies == 'true') {
    } else {
        $('#div-cookies').show();
    }
}
function acceptCookies() {
    localStorage.acceptCookies = 'true';
    $('#div-cookies').hide();
}
$(document).ready(function() {
    checkAcceptCookies();
});
</script>


    <!-- Seccion productos-->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1">
                <div id="carouselImages" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo $ruta_imagen; ?>" class="d-block w-100" alt="">
    </div>
    <?php foreach($imagenes as $img)?>
    <div class="carousel-item">
    <img src="<?php echo $img; ?>" class="d-block w-100" alt="">

    </div>
    <?php } ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
               
                </div>
                <div class="col-md-6 order-md-2">
                    <h2><?php echo $nombre; ?></h2>

                    <?php if($descuento >  0) { ?>
                        <p><?php echo MONEDA . number_format($precio, 2, '.', ','); ?></del></p>
                        <h2><?php echo MONEDA . number_format($precio_descuento, 2, '.', ','); ?>
                        <small class="text-success"><?php echo $descuento; ?>% descuento</small>
                    </del></h2>
                    <?php } else{ ?>
                    
                    <h2><?php echo MONEDA . number_format($precio, 2, '.', ','); ?></h2>
                    <?php } ?>


                    <p class="lead"><?php echo $descripcion; ?>
                    </p>

                    <div class="d-grid gap-3 col-10 mx-auto">
                        <button class="btn btn-primary" type="button">Comprar Ahora</button>
                        <button class="btn btn-outline-primary" type="button" onclick="addProducto(<?php echo $id; ?> , '<?php echo $token_tmp; ?>')">
                        Agregar al Carrito</button>

                    </div>
                </div>
            </div>

        </div>        
                

     </main>

    
    <footer>
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; ETÉREO distribuidora textil 2022, todos los derechos reservados.</p>
            <a href="">Contactanos</a><br>
            <a href="privacidad.html">Politica de Privacidad</a><br>
            <a href="about.html">Sobre Nosotros</a><br>
            <a aling="right" href="registro.php">Registrarse</a>
            <div class="../logo_footer">
            <img src="../image/etereo_logo.png" width="100px" height="100px" alt>
        </div>
        </div>
    </footer>

    <script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
   
    <script src="js/scripts.js"></script>
    <script>
        function addProducto(id, token){
            let url = '../clases/carrito.php'
            let formData = new FormData()
            formData.append('id_producto', id)
            formData.append('token', token)

            fetch(url, {
                method: 'POST',
                body: formData,
                mode: 'cors'
            }).then(response => response.json())
            .then(data =>{
                if(data.ok){
                    let elemento = document.getElementById("num_cart")
                    elemento.innerHTML = data.numero
                }   
            })
        }
        </script>
</body>
</html>