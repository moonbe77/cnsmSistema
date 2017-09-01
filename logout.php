<?php 
    session_start(); 
  
    // comprobamos que se haya iniciado la sesión 
    if(isset($_SESSION['usuario_nick'])) { 
        session_destroy(); 
        header("Location: index.php"); 
    }else { 
        echo "Operación incorrecta."; 
    } 
?>