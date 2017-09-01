<?php 
    session_start();    
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CNSM Sisema</title> 
	<link rel="stylesheet" href="css/style.css"/>
	<style>
@import url('https://fonts.googleapis.com/css?family=Raleway');
</style>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
</head>
<body>
<section id="top">
	<?php include('menu.html'); ?>
</section>      

<section class="contenedor">
	<?php 
	include 'acceso_db.php';  
	$sql = "SELECT * FROM tabla_barcos";
	$result = mysqli_query($conn, $sql);
	echo '<table style="width:100%">
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
				<th>Titular</th>
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
?>
</section>
	
</body>
</html>
