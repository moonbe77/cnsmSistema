<?php 
    session_start();   
    if(isset($_SESSION['id_usuario']) && $_SESSION['jerarquia'] <=4 ){ 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>busqueda</title>
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
<?php  
		$id_barco = $_GET['id'];
		include 'acceso_db.php';  
		$sql = "SELECT `tabla_operaciones`.`id_barco`, `tabla_barcos`.`nombre_barco`, `tabla_operaciones`.`id_operacion`, `tabla_operaciones`.`id_movimiento`, `indice_movimiento`.`nombre_mov`, `tabla_operaciones`.`zona`, `tabla_barcos`.`due_nombre_barco`, `tabla_barcos`.`due_email_barco` FROM tabla_operaciones LEFT JOIN `u865215954_cnsm`.`tabla_barcos` ON `tabla_operaciones`.`id_barco` = `tabla_barcos`.`id_barco` LEFT JOIN `u865215954_cnsm`.`indice_movimiento` ON `tabla_operaciones`.`id_movimiento` = `indice_movimiento`.`id_mov` where tabla_barcos.id_barco = $id_barco ORDER BY tabla_operaciones.id_operacion DESC";
		$result = mysqli_query($conn, $sql);
		echo '
      <div class="box_tabla_barcos">
    <table class="tabla_barcos" style="width:100%">
			<caption>Movimientos</caption>
			<thead>
				<tr>
					<th>id_barco</th>
					<th>Barco</th>
					<th>id op</th>
					<th>id mov</th>
					<th>Tipo</th>
					<th>Zona</th>
					<th>Due</th>
					<th>Mail</th>
				</tr>
			</thead>
			<tbody>';
		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {        
		        //mostrar los valores Debuging
		        echo "<tr>";		
					foreach ($row as $clave=>$valor){		
						echo "<td>$valor</td>";
					}
		        echo "</tr>";
		    }
			} else {
		    echo "0 results";
		}

		mysqli_close($conn);
			echo "</tbody></table></div>";
		?>



  </section>
  

    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script src="js/jquery-confirm.js" async defer></script>  
  <script src="js/menu.js" type="text/javascript"></script>
  <script src="js/script.js" async defer></script> 

  <script>
  $(document).ready(function() {
      $("#resultadoBusqueda").html('<p>Tiepea en el cuadro para mostrar barcos</p>');
  });

  function buscarKeyUP() {
    var textoBusqueda = $("#busqueda").val();   
     console.log(textoBusqueda);

       if (textoBusqueda != "") {
          $.post("sel_barco.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
              $("#resultadoBusqueda").html(mensaje);
           }); 
       } else { 
          $("#resultadoBusqueda").html('<p>Tiepea en el cuadro para mostrar barcos</p>');
          };
  };
  function buscar(id) {

     console.log(id);
    var textoBusqueda = id
   
       if (textoBusqueda != "") {
          $.post("sel_barco.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
              $("#resultadoBusqueda").html(mensaje);
           }); 
       } else { 
          $("#resultadoBusqueda").html('<p>Tiepea en el cuadro para mostrar barcos</p>');
          };
  };

  $('.btn_barco').click(function(event) {
    var id=$(this).attr('id');
    $('#busqueda').val(id);
  });
  </script>
</body>
</html>
<?php } else {header("Location: login.php");  echo 'INICIA SESION <br> <a href="login.php">VOLVER</a>';}?>
