<?php 
    
    include 'conexion_db.php';

    
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    
    //encriptar contraseña
    $contrasena = hash('sha512', $contrasena);


    $query = "INSERT INTO usuarios(nombre, usuario, email, contrasena) 
              VALUES('$nombre', '$usuario', '$email', '$contrasena')";

     //verificacion de usuario 
     $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

     if(mysqli_num_rows($verificar_usuario) > 0){
         echo '
             <script>
                 alert("Este usuario ya esta registrado, prueba con otro");
                 window.location = "registro.php";
             </script>
         ';
         exit();
     }


    // verificacion de correo
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado, verifica tu correo o prueba con otro");
                window.location = "registro.php";
            </script>
        ';
        exit();
    }

   

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("El usuario se ha registrado exitosamente");
                window.location = "login.php";
            </script>
        ';
    }else{
        echo '
        <script>
            alert("Error en registro, Intentelo nuevamente");
            window.location = "regisro.php";
        </script>
        ';
    }
    mysqli_close($conexion);
?>