<?php 
    session_start();    
    if(isset($_SESSION['id_usuario']) && $_SESSION['jerarquia'] <=4 ){
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CNSM Sistema</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css"/>  
<link rel="stylesheet" href="css/menu.css" type="text/css">
<link rel="stylesheet" href="css/jquery-confirm.css"/>  
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</style>
</head>
<body>
<section id="top">
	<?php include('menu.html'); ?>
</section>      

<section class="contenedor principal">
<div class="tituloServicio">barcos cargados en el sistema</div>
		<div class="iconHelp">
		<span id="search"><input class="form-style-1" type="text" name="busqueda" id="busqueda" value="" placeholder="Buscar minimo 3 letras" maxlength="30" autocomplete="off" onKeyUp="buscarKeyUP();" /></span>
		<div>
			<span><i class="material-icons">note_add</i> Ver Barco</span>
			<span><i class="material-icons">import_export</i> Ver Movimientos del Barco</span>
		</div>
		</div>
<div class="box_tabla_barcos">
<div class="spinner">
  <div class="dot1"></div>
  <div class="dot2"></div>
</div>
<table class="tabla_barcos" style="width:100%">		
		<thead>
			<tr>
				<th>Nro</th>
				<th>id</th>
				<th>Nombre</th>
				<th>rey</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>tel</th>
				<th>cel</th>				
				<th>Accción</th>
			</tr>
		</thead>
		<tbody id="show">
		
		</tbody>
</table>
</div>

</section>
<?php include('footer.html');?>
 <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="js/menu.js" type="text/javascript"></script>
  <script src="js/jquery-confirm.js" async defer></script>
  <script src="js/script.js" async defer></script> 
<script>

$(document).ready(function($) {        
  bdBarcos("NoFiltrar");
});

function buscarKeyUP() {  
    var textoBusqueda = $("#busqueda").val();
    	if (textoBusqueda.length > 0) {
         	bdBarcos(textoBusqueda); 

        }else{
        	bdBarcos("NoFiltrar");
        }
      };  

 function cargando(msje) {

 		$.alert({
 			theme: 'dark',
       title: 'Mensaje!',
       content: 'cargando'
          });
 	}

 	 


 function bdBarcos(filtro){
	
$.ajax( "filtrar_barco.php", {
	data:{valorBusqueda: filtro}
})

  .done(function() {
    //alert( "success" );
	//$(".spinner").hide();
  })
  .fail(function(data) {
    alert('error');
  })
  .always(function(data) {
   // alert( "complete" );
    $("#show").html(data);
    console.log(filtro);
	$(".spinner").hide(400);
    console.log('spinner hide');
  });
 }


</script>
</body>
</html>
<?php
}else{ 

  if ( $_SESSION['jerarquia'] >4) {
     header("Location: index.php?text=denegado"); 
  }else{
    header("Location: login.php"); 
echo 'INICIA SESION <br> <a href="login.php">VOLVER</a>';
  }
 

}?>
