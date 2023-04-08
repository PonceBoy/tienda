<?php
require 'config/database.php';
require 'config/config.php';

$db = new Database();
$conection = $db->conectar();

$productos = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;

$lista_carrito = array();

if($productos != null){
    foreach($productos as $clave => $cantidad){
        $sql = $conection->prepare("SELECT id_producto, nombre, precio, descuento, $cantidad AS cantidad FROM productos WHERE id_producto=? AND activo=1");
        $sql->execute([$clave]);
        $lista_carrito[] = $sql->fetch(PDO::FETCH_ASSOC);
 }
}
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
    <link href="css/mystyle.css" rel="stylesheet" />
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
                <a href="../clases/carrito.php" class="btn btn-outline-dark">
                        <i class="bi-cart-fill me-1">ETEREO</i>
                        Carrito<span id="num_cart" class="badge bg-dark text-white ms-1 rounded-pill"><?php echo $num_cart; ?></span>
</a> 
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Sub total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                                <?php if($lista_carrito == null){
                                    echo '<tr><td colspan="5" class="text-center"><b>lista vacia</td></tr>';
                                }else {
                                    $total = 0;
                                    foreach($lista_carrito as $producto){
                                        $_id = $producto['id_producto'];
                                        $nombre = $producto['nombre'];
                                        $precio = $producto['precio'];
                                        $descuento = $producto['descuento'];
                                        $cantidad = $producto['cantidad'];
                                        $precio_desc = $precio - (($precio * $descuento) / 100);
                                        $subtotal = $cantidad * $precio_desc;
                                        $total += $subtotal;
                                        ?>
                        <tr>
                            <td><?php echo $nombre;?> </td>
                            <td><?php echo MONEDA . number_format($precio_desc,2, '.', ',');?> </td>
                            <td><input type="number" min="1" max="10" step="1" value="<?php echo $cantidad ?>"
                            size="5" id="cantidad_<?php echo $id;?>" onchange="">
                         </td>
                            <td>
                            <div id="subtotal_<?php echo $_id;?>" name="subtotal[]"><?php echo MONEDA . number_format($subtotal,2, '.', ',');?></div>
                            </td>
                            <td><a href="#" id="eliminar" class="btn btn-warning btn-sm" data-bs-id="<?php echo $id; ?>" data-bs-toogle="modal" data-bs-target="eliminaModal" >Eliminar</a></td>
                        </tr>
                        <?php } ?>

                        <tr>
                            <td colspan="3"></td>
                            <td colspan="2">
                            <p class="h3" id="total"><?php echo MONEDA . number_format($total, 2, '.', ','); ?></p>
                                    </td>
                        </tr>
                        
                    </tbody>
                    
                    <?php } ?>
                </table>

            </div>
            <div class="row">
                <div class="d-grid gap-3 col-5 mx-auto">
                    <button class="btn btn-primary"><h4>Realizar Pago</h4></button>
                </div>

            </div>
        </div>

     </main><br><br><br>
    
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