<?php
session_start(); 
echo '<a href="index.php">Home</a>'; 
include 'acceso_db.php';  
$id_barco= $_REQUEST['ID'];
$sql = "SELECT * FROM tabla_operaciones ORDER BY id_operacion DESC";
/*-----------------------------------------------------------------------*/
$sql = "SELECT 
`tabla_operaciones`.`id_operacion`,
`tabla_barcos`.`nombre_barco`,
`indice_movimiento`.`nombre_mov`,
`usuarios`.`nombre`,
`usuarios`.`apellido`,
/*`nom_zona`.`id_zona`,
`tabla_operaciones`.`id_operacion`,
`usuarios`.`nombre`,
`usuarios`.`apellido`,
`indice_movimiento`.`nombre_mov`,
`tabla_barcos`.`nombre_barco`,*/
`tabla_barcos`.`rey_barco`,
`tabla_operaciones`.`fecha_operacion`,
`tabla_operaciones`.`coment_operacion`/*,*/
/*`nom_zona`.`nom_zona`*/
FROM tabla_barcos
LEFT JOIN `u865215954_cnsm`.`tabla_operaciones` ON `tabla_barcos`.`id_barco` = `tabla_operaciones`.`id_barco` 
LEFT JOIN `u865215954_cnsm`.`indice_movimiento` ON `tabla_operaciones`.`id_movimiento` = `indice_movimiento`.`id_mov` 
LEFT JOIN `u865215954_cnsm`.`usuarios` ON `tabla_operaciones`.`id_usuario` = `usuarios`.`id_usuario` 
LEFT JOIN `u865215954_cnsm`.`nom_zona` ON `tabla_operaciones`.`zona` = `nom_zona`.`id_zona` 
WHERE `tabla_operaciones`.`id_barco`='$id_barco' AND `tabla_operaciones`.`realizado`!='si'
ORDER BY `tabla_operaciones`.`id_operacion` ASC";

/*----------------------------------------------------------------------*/
$result = mysqli_query($conn, $sql);

echo '<table style="width:100%;border-collapse:collapse;background-color: lightsteelblue;" border="2px" >
	<caption>Barcos cargados en el sistema</caption>
	<thead>
		<tr>
			<th>id oper</th>
			<th>nombre barco</th>
			<th>nombre movimiento</th>
			<th>USR nombre</th>
			<th>USR Apellido</th>
			<th>REY barco</th>
			<th>Fecha OPER</th>
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