<?php
require 'config/database.php';
require 'config/config.php';

$db = new Database();
$conection = $db->conectar();

$sql = $conection->prepare("SELECT id_producto, nombre, precio FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
//session_destroy();

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!-- Navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <img src="image/etereo_logo.png" width="100px" height="100px" alt>
            <a class="navbar-brand" href="index.php"><h2>ETÉREO</h2><h6>FEEL THE LIFE</h6></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link " href="login.php">Iniciar Sesion</a></li>
                    <li class="nav-item"><a class="nav-link " href="about.html">Sobre Nosotros</a></li>
                </ul>
                <a href="checkout.php" class="btn btn-outline-dark">
                        <i class="bi-cart-fill me-1">ETEREO</i>
                        Carrito<span id="num_cart" class="badge bg-dark text-white ms-1 rounded-pill"><?php echo $num_cart; ?></span>
</a> 
            </div>
        </div>
    </nav>
    <!-- banner -->
    <header>
        <div class="portada">
            <h1>Mujeres Productos Destacados</h1>
            <img src="image/girl_portada-1.gif" width="300px" height="300px">
            <img src="image/toma_portada_1.gif" width="250px" height="300px">
            <img src="image/girl_portada-2.gif" width="300px" height="300px">
        </div>
    </header> 
    
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
        <div class="container " aling="left">     
            <div class="mx-auto my-auto row row-cols-1 row-cols-sm-2 row-cols-md-4 g-2">
            <?php foreach($resultado as $row){  ?>
            <div class="col">
                    <div class="card shadow-sm">
                        <!-- Producto imagen-->
                        <?php
                        $id_producto = $row['id_producto'];
                        $imagen = "productos/assets/images/" . $id_producto . "/principal.PNG";
                        if(!file_exists($imagen)){
                            $imagen = "productos/assets/images/no_photo.PNG";
                        }
                        ?>
                        <!-- Producto nombre-->
                        <img src="<?php echo $imagen; ?>">
                        <div class="card-body">
                        <div class="text-center">
                            <div class="card-title">
                             <h5 class="fw-bolder"><?php echo $row['nombre'];?></h5>
                             </div>
                                <!-- Producto precio-->
                               <p class="card-text"> <?php echo number_format($row['precio'], 2, '.', ',');?></p>
                            </div>
                        </div>
                      
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent  ">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="productos/detalles_producto.php?id_producto=<?php
                            echo $row['id_producto']; ?>&token=<?php echo hash_hmac('sha1',$row['id_producto'], KEY_TOKEN );?>">Detalles</a></div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent  ">
                            <div class="text-center">
                        <button class="btn btn-outline-primary" type="button" onclick="addProducto( <?php echo $row['id_producto']; ?> , '<?php echo hash_hmac('sha1',$row['id_producto'], KEY_TOKEN ); ?>')">
                        Agregar</button>

                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                
                

     </main>
    <header>
        <div class="portada">
            <h1>Hombres Productos Destacados</h1>
            <img src="image/men_portada_2.gif" width="250px" height="300px">
            <img src="image/men_portada_1.gif" width="250px" height="300px">
            <img src="image/men_portada_3.gif" width="250px" height="300px">
        </div>
    </header>
    
   
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                     
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Pocas existencias
                        </div>
                     
                        <img class="card-img-top" src="image/gorro_cafe.PNG" alt=""  height="325px" />
                     
                        <div class="card-body p-4">
                            <div class="text-center">
                            
                                <h5 class="fw-bolder">Gorro Cafe Arena</h5>
                           

                                $350.00
                            </div>
                        </div>
                        
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Detalles</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                  
                        <img class="card-img-top" src="image/gorro_grey.PNG" alt="" height="325px"  />
                      
                        <div class="card-body p-4">
                            <div class="text-center">
                              
                                <h5 class="fw-bolder">Beanie gris</h5>
                              
                                $200.00
                            </div>
                        </div>
                       
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Detalles</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                      
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta
                        </div>
                        <!-- Producto imagen-->
                        <img class="card-img-top" src="image/gorra_poter.PNG" alt="" height="325px"  />
                        
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Producto nombre-->
                                <h5 class="fw-bolder">Gorra Anteojos</h5>
                              
                                <div class="d-flex justify-content-center small text-warning mb-2">

                                </div>
                                <!-- Producto precio-->
                                <span class="text-muted text-decoration-line-through">$350.00</span>
                                $300.00
                            </div>
                        </div>
                        
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Detalles</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Producto imagen-->
                        <img class="card-img-top" src="image/gorra_naza.PNG" alt="" height="325px"  />
                      
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product nombre-->
                                <h5 class="fw-bolder">Gorra nasa</h5>
                                
                                <div class="d-flex justify-content-center small text-warning mb-2">

                                </div>
                                
                                $300.00
                            </div>
             
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Detalles</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <footer>
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; ETÉREO distribuidora textil 2022, todos los derechos reservados.</p>
            <a href="">Contactanos</a><br>
            <a href="privacidad.html">Politica de Privacidad</a><br>
            <a href="about.html">Sobre Nosotros</a><br>
            <a aling="right" href="registro.php">Registrarse</a>
            <div class="logo_footer">
            <img src="image/etereo_logo.png" width="100px" height="100px" alt>
        </div>
        </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
