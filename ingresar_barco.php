<?php 
    session_start();    
    if(isset($_SESSION['id_usuario'])){   
      include ('verificar_login.php');
      if ($ver){
        //echo "log ok";
      }else{header("Location: login.php?codigo=2");}
    }else{
      header("Location: login.php?codigo=1"); 
      echo 'INICIA SESION <br> <a href="login.php">VOLVER</a>';
      } 
      /*
        codigo
        1 - sesion no iniciada
        2 - el id no corresponde con el de la BD, posiblemnte hay otro usuario logeado
      */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CNSM Sisetma</title> 
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
<link rel="stylesheet" href="css/style.css"/> 
<link rel="stylesheet" href="css/menu.css" type="text/css">
<link rel="stylesheet" href="css/jquery-confirm.css"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
</head>
<body>
<section id="top">
	<?php include('menu.html'); ?>
</section>      

<section class="contenedor principal">
	<?php include('form_barcos.html'); ?>
</section>
<script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script src="js/menu.js" type="text/javascript"></script>
  <script src="js/jquery-confirm.js" async defer></script>
  <script src="js/script.js" async defer></script>  
	<script>
	jQuery(document).ready(function($) {
  $('.menu_movimientos').addClass('active');
  $('.submenu_varadero').addClass('submenu_active');  
});
		
	</script>
</body>
</html>
<?php
}else{ 
    header("Location: login.php"); 
}
?>