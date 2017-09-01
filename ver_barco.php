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
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
<style>
  .fechaOp{    display: inline-block;
    font-size: 0.8em;}
</style>
</head>
<body>
<section id="top">
	<?php include('menu.html'); ?>
</section>      

<section class="contenedor principal">
    <?php  
		$id_barco = @$_GET['id'];
		if ($id_barco=="") {
	?>
				    <div class="cont_card">
         <div class="contBox">      
          <div class="box2">
              <div class="titulo">Buscador de Barcos en el Sistema</div>
                <p>Buscar usando el ID, o nombre (definir que mas)</p>
                <form accept-charset="utf-8" method="POST">
                  <input class="form-style-1" type="text" name="busqueda" id="busqueda" value="" placeholder="Buscar minimo 3 letras" maxlength="30" autocomplete="off" onKeyUp="buscarKeyUP();" />          
                  </form>
                  <!--<button class="form-style-1" onClick="buscar();">Buscar</button>-->
              </div>              
                <div id="resultadoBusqueda">Buscar..</div>
              
            </div>
      </div>
	<?php
		}else{
		include 'acceso_db.php';  
		$sql = "SELECT * FROM tabla_barcos WHERE id_barco='$id_barco' LIMIT 1";
		$result = mysqli_query($conn, $sql);
		echo '<table style="width:100%" border="1px">
			<caption>Barcos cargados en el sistema</caption>
			<thead>
				<tr>
					<th>id</th>
					<th>enabled</th>
					<th>TS</th>
					<th>Nombre</th>
					<th>clase</th>
					<th>rey</th>
					<th>tipo</th>
					<th>eslora</th>
					<th>manga</th>
					<th>desp.</th>
					<th>peso T</th>
					<th>peso N</th>
					<th>m2</th>
					<th>comp. Seg.</th>
					<th>n Poliza</th>
					<th>Venc</th>
					<th>Nombre</th>
					<th>Aellido</th>
					<th>dni</th>
					<th>Dir</th>
					<th>tel</th>
					<th>cel</th>
					<th>email</th>
					<th>club</th>
					<th>nota</th>
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
			echo "</tbody></table>";
		}?>
</section>
<?php include('footer.html');?>
	  <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script src="js/menu.js" type="text/javascript"></script>
  <script src="js/jquery-confirm.js" async defer></script>
  <script src="js/script.js" async defer></script> 
<script>
	
 function buscarKeyUP() {  
    var textoBusqueda = $("#busqueda").val();  
    if (textoBusqueda.length > 2) {
        console.log(textoBusqueda);
           $.post("mod_barco_ajax.php", {id: textoBusqueda}, function(mensaje) {
                    $("#resultadoBusqueda").html(mensaje);
                 }); 
        }
      };  
</script>
</body>
</html>
<?php
}else{ 
 header("Location: login.php"); 
echo 'INICIA SESION <br> <a href="login.php">VOLVER</a>';

}?>
