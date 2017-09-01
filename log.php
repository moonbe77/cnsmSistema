<?php
session_start(); 
echo '<a href="index.php">Home</a>'; 
include 'acceso_db.php';  
$sql = "SELECT * FROM tabla_log ORDER BY time_stamp DESC";
$result = mysqli_query($conn, $sql);
echo '<table style="width:100%" >
	<caption>Barcos cargados en el sistema</caption>
	<thead>
		<tr>
			<th>id</th>
			<th>id_mov</th>
			<th>id_us</th>			
			<th>id_barco</th>			
			<th>TS</th>			
			<th>Desc</th>			
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