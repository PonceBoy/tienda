<?php 

    session_start();
    
    include 'conexion_db.php';

    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $constrasena = hash('sha512', $contrasena);
   

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE
     email='$email' and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $email;
        header("location: perfil.php");
        exit;
    }else{
        echo '
            <script>
                alert("Este usuario no existe, verifique los datos introducidos");
                window.location = "login.php";
            </script>
        ';
        exit;
    }
?>