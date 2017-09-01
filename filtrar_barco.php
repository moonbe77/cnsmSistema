<?php
//https://mimentevuela.wordpress.com/2015/08/09/busqueda-instantanea-con-ajax-php-y-mysql/
//Archivo de conexión a la base de datos
require('acceso_db.php');

//Variable de búsqueda
$consultaBusqueda = $_REQUEST['valorBusqueda'];
$id_op = @$_REQUEST['id_op'];

//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

//Variable vacía (para evitar los E_NOTICE)
$qty = "";
$mensaje = "";




//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)) {
	if ($consultaBusqueda == "NoFiltrar") {

		$consulta = mysqli_query($conn, "SELECT id_barco, nombre_barco, rey_barco, due_nombre_barco, due_apellido_barco, due_tel_barco, due_cel_barco FROM tabla_barcos ORDER BY nombre_barco ASC ");
		echo("Error message:".mysqli_error($conn));
	 
	}else{
		//Selecciona todo de la tabla barcos
	//donde el nombre_barco sea igual a $consultaBusqueda, 
	//o el rey sea igual a $consultaBusqueda, 
	//o $consultaBusqueda sea igual a due_nombre_barco
	//Se quitan los barcos que tienen enabled 0

	$consulta = mysqli_query($conn, "SELECT id_barco, nombre_barco, rey_barco, due_nombre_barco, due_apellido_barco, due_tel_barco, due_cel_barco FROM tabla_barcos
	WHERE (nombre_barco LIKE '%$consultaBusqueda%' OR rey_barco LIKE '%$consultaBusqueda%'	OR due_nombre_barco LIKE '%$consultaBusqueda%' OR id_barco LIKE '%$consultaBusqueda%') ORDER BY nombre_barco ASC ");
	
    echo("Error message:".mysqli_error($conn));
	
	}

	//Obtiene la cantidad de filas que hay en la consulta
	$filas = mysqli_num_rows($consulta);

	//Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
	if ($filas === 0) {
		$mensaje = "<p>No se encuentra barco, prueba con el numero de rey o nombre del dueño</p>";
		echo mysqli_error($conn);
		} else {
		//Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
		//echo 'Resultados para <strong><br> Id_barco:'.$consultaBusqueda.'<br>ID_operacion:'.$id_op.'</strong>';

		//La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
		    while($row = mysqli_fetch_assoc($consulta)) {        
	        				//mostrar los valores Debuging
	        		$mensaje.= "<tr>";
	        		$mensaje.= '<td>'.$qty.'</td>';		
				foreach ($row as $clave=>$valor){		
					$mensaje.= "<td>$valor</td>";
				}	       		 
	       		 $mensaje.= '<td><a class="iconoAccion" href="mod_barco.php?id='.$row['id_barco'].'" title="Ver Barco"><i class="material-icons">note_add</i></a>
	       		 	<a class="iconoAccion" href="movimiento.php?id='.$row['id_barco'].'" title="Ver movieminetos del barco"><i class="material-icons">import_export</i></a></td>';
	       		 $mensaje.= "</tr>";
	       		 $qty++;

	    	}
		            			            		          			
		};//Fin while $resultados
};//Fin isset $consultaBusqueda


/* Cierra la conexión */
mysqli_close($conn);
//Devolvemos el mensaje que tomará jQuery
echo $mensaje;
?>


