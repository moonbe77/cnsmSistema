<?php
//https://mimentevuela.wordpress.com/2015/08/09/busqueda-instantanea-con-ajax-php-y-mysql/
//Archivo de conexión a la base de datos
require('acceso_db.php');

//Variable de búsqueda
$consultaBusqueda = $_POST['valorBusqueda'];
$id_op = @$_POST['id_op'];

//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

//Variable vacía (para evitar los E_NOTICE)
$mensaje = "";


//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)) {

	//Selecciona todo de la tabla barcos
	//donde el nombre_barco sea igual a $consultaBusqueda, 
	//o el rey sea igual a $consultaBusqueda, 
	//o $consultaBusqueda sea igual a due_nombre_barco
	//Se quitan los barcos que tienen enabled 0
	$consulta = mysqli_query($conn, "SELECT * FROM tabla_barcos
	WHERE enabled_barco != 0 AND ( nombre_barco LIKE '%$consultaBusqueda%' 
	OR rey_barco LIKE '%$consultaBusqueda%'
	OR due_nombre_barco LIKE '%$consultaBusqueda%' OR id_barco LIKE '%$consultaBusqueda%' ) ");

	//Obtiene la cantidad de filas que hay en la consulta
	$filas = mysqli_num_rows($consulta);

	//Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
	if ($filas === 0) {
		$mensaje = "<p>No se encuentra barco, prueba con el numero de rey o nombre del dueño</p>";
	} else {
		//Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
		echo 'Resultados para <strong><br> Id_barco:'.$consultaBusqueda.'<br>ID_operacion:'.$id_op.'</strong>';

		//La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
		while($resultados = mysqli_fetch_array($consulta)) {
			$nombre = $resultados['nombre_barco'];
			$rey = $resultados['rey_barco'];
			$id_barco = $resultados['id_barco'];
				$mensaje .= '<p>
							<strong>Nombre:</strong> ' . $nombre . '<br>
							<strong>Rey:</strong> ' . $rey . '<br>
							
							<strong>Accion:</strong>
							</p> ';

			//crear el filtro segun la zona en que esta el barco para mostrar los movimientos correctos

			 /*$sql = mysqli_query($conn, 
            "SELECT * FROM rel_zonas WHERE zona_actual=( SELECT zona FROM tabla_operaciones WHERE id_barco='$id_barco' ORDER BY id_operacion DESC LIMIT 1)");*/

            
            //echo por esteban
			 $sql = mysqli_query($conn, 
			 	"SELECT DISTINCT zona_actual, mov_id FROM rel_zonas WHERE zona_actual IN( SELECT zona FROM tabla_operaciones WHERE id_barco='$id_barco' and realizado !='si')");

			 //Obtiene la cantidad de filas que hay en la consulta si no hay datos muestra todas las opciones para el barco buscado
				$datos = mysqli_num_rows($sql);

	            if ($datos==0) {
	            	$sql = mysqli_query($conn, 
	            "SELECT * FROM rel_zonas WHERE zona_actual = 0");

		        		while($res = mysqli_fetch_array($sql)) {
		                	$id_mov=$res['mov_id'];
		                	//$id_op=$res['id_operacion'];

		                	$sql2 = mysqli_query($conn, "SELECT * FROM indice_movimiento WHERE id_mov='$id_mov' ");

		            		while($res2 = mysqli_fetch_array($sql2)) {                    	
								$mensaje .= '			
								<div class="bt_accion">
								<a href="accion.php?id_barco='.$id_barco.'&id_movimiento='.$id_mov.'&id_op='.$id_op.'">'.$res2['nombre_mov'].'</a> 
								</div>';
								}
			            	}
			            }

                while($res = mysqli_fetch_array($sql)) {
                    	$id_mov=$res['mov_id'];
                    	//$id_op=$res['id_operacion'];

                    	$sql2 = mysqli_query($conn, "SELECT * FROM indice_movimiento WHERE id_mov='$id_mov' ");

	            		while($res2 = mysqli_fetch_array($sql2)) {                    	
							$mensaje .= '			
							<div class="bt_accion">
							<a href="accion.php?id_barco='.$id_barco.'&id_movimiento='.$id_mov.'&id_op='.$id_op.'">'.$res2['nombre_mov'].'</a> 
							</div>';
					}

            }

			
		};//Fin while $resultados

	}; //Fin else $filas

};//Fin isset $consultaBusqueda

//Devolvemos el mensaje que tomará jQuery
echo $mensaje;
?>