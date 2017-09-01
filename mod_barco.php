<?php 
session_start();    
    if(isset($_SESSION['id_usuario']) && $_SESSION['jerarquia'] <=4 ){
$id_consulta = $_REQUEST['id'];
include 'acceso_db.php';  
$sql = "SELECT * FROM tabla_barcos WHERE id_barco='$id_consulta'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);	     
//echo "Mostrando Barco:".$id_consulta;
mysqli_close($conn);

    
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
</head>
<body>
	<section id="top">
	<?php include('menu.html'); ?>
      </section>
<section class="contenedor principal">
					<div class="mod_datos"><h3>Modificando Barco : <?php echo $row['nombre_barco'];?> <a href="movimiento.php?id=<?php echo $row['id_barco'];?>">movimientos</a></h3></div>
	<form id="form_barcos" action="update_barco.php" method="post">
	<fieldset class="field1">	
	 <h3>Info del Barco</h3>
		 <div class="bloque_input">	
		 		<div class="input form-style-1" style="display: none;">	
				<label class="form-style-1" for="id_barco">Id_barco</label class="form-style-1">
				<input class="form-style-1" type="text" name="id_barco" id="id_barco" value="<?php echo $row['id_barco'];?>">
			</div>
			<div class="input form-style-1">	
				<label class="form-style-1" for="nombre_barco">Nombre</label class="form-style-1">
				<input class="form-style-1" type="text" name="nombre_barco" id="nombre_barco" value="<?php echo $row['nombre_barco'];?>">
			</div>
			<div class="input form-style-1">					
				<label class="form-style-1" for="clase_barco">Clase</label class="form-style-1">
				<input class="form-style-1" type="text" name="clase_barco" id="clase_barco" value="<?= $row["clase_barco"] ?>">
			</div>
			<div class="input form-style-1">
				<label class="form-style-1" for="rey">Rey</label class="form-style-1">
				<input class="form-style-1" type="text" name="rey" id="rey" value="<?php echo $row['rey_barco'];?>">
			</div>
			<div class="input form-style-1">
				<label class="form-style-1" for="tipo">Tipo</label class="form-style-1">
				<input class="form-style-1" type="text" name="tipo" id="tipo" value="<?php echo $row['tipo_barco'];?>">
			</div>		 
		 	<div class="input form-style-1">	
				<label class="form-style-1" for="eslora">Eslora</label class="form-style-1">
				<input class="form-style-1" type="text" name="eslora" id="eslora" value="<?php echo $row['eslora_barco'];?>">
			</div>
			<div class="input form-style-1">
				<label class="form-style-1" for="manga">Manga</label class="form-style-1">
				<input class="form-style-1" type="text" name="manga" id="manga" value="<?php echo $row['manga_barco'];?>">
			</div>
			<div class="input form-style-1">
				<label class="form-style-1" for="desplazamiento">Desplazamiento</label class="form-style-1">
				<input class="form-style-1" type="text" name="desplazamiento" id="desplazamiento" value="<?php echo $row['desplazamiento_barco'];?>">
			</div>
			<div class="input form-style-1">
				<label class="form-style-1" for="ton_total">Peso Total</label class="form-style-1">
				<input class="form-style-1" type="text" name="ton_total" id="ton_total" value="<?php echo $row['ton_total_barco'];?>">
		 	</div>
			<div class="input form-style-1">	
				<label class="form-style-1" for="ton_neto">Peso Neto</label class="form-style-1">
				<input class="form-style-1" type="text" name="ton_neto" id="ton_neto" value="<?php echo $row['ton_neto_barco'];?>">
			</div>
			<div class="input form-style-1">
				<label class="form-style-1" for="m2_barco">Mts2</label class="form-style-1">
				<input class="form-style-1" type="text" name="m2_barco" id="m2_barco" value="<?php echo $row['m2_barco'];?>">
			</div>
		</div>

	</fieldset>
	<fieldset class="field2">
		<h3>Datos Seguro</h3>
		<div class="bloque_input">	
			<div class="input form-style-1">
				<label class="form-style-1" for="compania_seguro">Compania</label class="form-style-1">
				<input class="form-style-1" type="text" name="compania_seguro" id="compania_seguro" value="<?php echo $row['comp_seguro_barco'];?>">
			</div>
			<div class="input form-style-1">	
			<label class="form-style-1" for="num_poliza">Poliza Nro</label class="form-style-1">
			<input class="form-style-1" type="text" name="num_poliza" id="num_poliza" value="<?php echo $row['num_poliza_barco'];?>">
			</div>
			<div class="input form-style-1">	
			<label class="form-style-1" for="vence_poliza">Vencimiento</label class="form-style-1">
			<input class="form-style-1" type="text" name="vence_poliza" id="vence_poliza" value="<?php echo $row['venc_poliza'];?>">
			</div>
		</div>
	</fieldset>
	<fieldset class="field3">	
		<h3>Datos Dueño</h3>
		<div class="bloque_input">
			<div class="input form-style-1">	
			<label class="form-style-1" for="nombre_dueno">Nombre</label class="form-style-1">
			<input class="form-style-1" type="text" name="nombre_dueno" id="nombre_dueno" value="<?php echo $row['due_nombre_barco'];?>">
			</div>
			<div class="input form-style-1">	
			<label class="form-style-1" for="apellido_dueno">Apellido</label class="form-style-1">
			<input class="form-style-1" type="text" name="apellido_dueno" id="apellido_dueno" value="<?php echo $row['due_apellido_barco'];?>">
			</div>
			<div class="input form-style-1">	
			<label class="form-style-1" for="dni">DNI</label class="form-style-1">
			<input class="form-style-1" type="text" name="dni" id="dni" value="<?php echo $row['due_dni_barco'];?>">
			</div>
			<div class="input form-style-1">	
			<label class="form-style-1" for="direccion">Dirección</label class="form-style-1">
			<input class="form-style-1" type="text" name="direccion" id="direccion" value="<?php echo $row['due_direccion_barco'];?>">
			</div>
			<div class="input form-style-1">	
			<label class="form-style-1" for="tel">Telefono</label class="form-style-1">
			<input class="form-style-1" type="text" name="tel" id="tel" value="<?php echo $row['due_tel_barco'];?>">
			</div>
			<div class="input form-style-1">	
			<label class="form-style-1" for="cel">Celular</label class="form-style-1">
			<input class="form-style-1" type="text" name="cel" id="cel" value="<?php echo $row['due_cel_barco'];?>">
			</div>
			<div class="input form-style-1">	
			<label class="form-style-1" for="email">Email</label class="form-style-1">
			<input class="form-style-1" type="text" name="email" id="email" value="<?php echo $row['due_email_barco'];?>">
			</div>
			<div class="input form-style-1">	
			<label class="form-style-1" for="club">Club de amarre</label class="form-style-1">
			<input class="form-style-1" type="text" name="club" id="club" value="<?php echo $row['due_club_barco'];?>">
			</div>
			<div class="input form-style-1">	
			<label class="form-style-1" for="nota">Nota</label class="form-style-1">
			<textarea name="nota" id="nota" cols="25" rows="10" value="<?php echo $row['nota'];?>"></textarea> 
			</div>
		</div>
	</fieldset>

	<div class="enviar">	
		<input class="form-style-1" class="btn" type="submit" >
		<input class="form-style-1" class="btn" type="reset" value="reset">
	</div>
</form>
	
</section>
<?php include('footer.html');?>
	  <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script src="js/menu.js" type="text/javascript"></script>
  <script src="js/jquery-confirm.js" async defer></script>
  <script src="js/script.js" async defer></script>  
</body>
</html>
<?php 
}else{ 
 header("Location: login.php"); 
echo 'INICIA SESION <br> <a href="login.php">VOLVER</a>';

}?>
