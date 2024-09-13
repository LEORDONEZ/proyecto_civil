<?php
    // Iniciar la sesión
    session_start();
    
    // Destruir todas las variables de sesión
    session_unset();
    
    // Destruir la sesión
    session_destroy();
    
    // Redirigir al usuario a la página de bienvenida
    header("Location: ../bienvenido.php");
    
    // Asegurar que el script se detiene
    exit();
?>
