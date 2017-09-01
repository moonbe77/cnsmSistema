<?php
session_start(); 
echo '<a href="index.php">Home</a>'; 
include 'acceso_db.php';  
$sql = "SELECT * FROM tabla_operaciones ORDER BY id_operacion DESC";
$result = mysqli_query($conn, $sql);
echo '<table style="width:100%;border-collapse:collapse" border="2px" >
	<caption>Barcos cargados en el sistema</caption>
	<thead>
		<tr>
			<th>id</th>
			<th>id_barco</th>
			<th>id_mov</th>
			<th>zona</th>
			<th>id_usuario</th>
			<th>TS</th>
			<th>Realizado</th>
			<th>FO</th>
			<th>Comentario</th>			
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