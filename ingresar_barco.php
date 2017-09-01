<?php 
    session_start();    
    if(isset($_SESSION['id_usuario'])){ 
        if ($_SESSION['jerarquia'] >4){
            $mensaje ="No tienes permiso para ver esta pagina";
            $url=$_SERVER['REQUEST_URI'];
            header("Location: error_login.php?msje=".$mensaje.$url); 
            //echo 'INICIA SESION <br> <a href="login.php">VOLVER</a>';
        }
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