<?php

        session_start();
        if (!isset($_SESSION['usuario'])){
            echo '
                <script>
                    alert("Se a cerrado sesión correctamente");
                    window.location="index.php";
                </script>
            
            ',
            session_destroy();
            die();
            
            session_destroy();
            die();
        }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Bienvenido a mi mundo</h1>
    <a href="php/cerrar_sesion.php">Cerrar sesión</a>
    
</body>
</html>