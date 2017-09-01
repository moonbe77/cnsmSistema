<?php
//https://mimentevuela.wordpress.com/2015/08/09/busqueda-instantanea-con-ajax-php-y-mysql/
//Archivo de conexión a la base de datos
require('acceso_db.php');

//Variable de búsqueda
$consultaBusqueda = $_POST['valorBusqueda'];
//$id_op = @$_POST['id_op'];

//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

//Variable vacía (para evitar los E_NOTICE)
$mensaje = "";
$BTN_a_MSG = 0;

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
		echo 'Resultados para <strong><br>';// Id_barco:'.$consultaBusqueda.'<br>ID_operacion:'.$id_op.'</strong>';

		//La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
		while($resultados = mysqli_fetch_array($consulta)) {
			$nombre = $resultados['nombre_barco'];
			$rey = $resultados['rey_barco'];
			$id_barco = $resultados['id_barco'];
				$mensaje .= '<p>
							<strong>Nombre:</strong> <a href="movimiento.php?id='.$id_barco.'" title="Ver movimientos de  '.$nombre.'">'. $nombre.'</a>						 
							<strong>-   Rey:</strong> ' . $rey . '<br>
	
							<strong>Accion:</strong>
							</p> ';

			//crear el filtro segun la zona en que esta el barco para mostrar los movimientos correctos			           
            //echo por esteban
			/* .-.-.-- Esteban --.-.-.
			Esta SQL tiene 2 partes, la de adentro (interno) busca los movimientos que (segun el excel no realizan actual), 
			es decir, que estan activos o pendientes en la tabla_operaciones.
			la main SQL (exterior) busca en indice_movimiento los movimientos posibles para el barco (solo dentro de los
			movimientos iniciales, 5,8,9,10) que no aparecen en el select (interno) con el "NOT IN"
			*/
		/*
			$sql = mysqli_query($conn, "SELECT * 
			from indice_movimiento 
			WHERE indice_movimiento.id_mov NOT
			 IN 
				( SELECT id_movimiento 
				FROM `tabla_operaciones` 
				WHERE id_barco='$id_barco' AND realizado !='si' AND 
				(id_movimiento=5 OR id_movimiento=6 OR id_movimiento=8 OR id_movimiento=9 OR id_movimiento=10)
			 )
				 and (id_mov='5' OR id_mov='8' or id_mov='9' OR id_mov='10')");
			 //Obtiene la cantidad de filas que hay en la consulta si no hay datos muestra todas las opciones para el barco buscado

				//$datos = mysqli_num_rows($sql);     
		        	
		            		while($res2 = mysqli_fetch_array($sql)) {  
								//print_r($res2);
								$id_mov = $res2['id_mov'];
								//$mensaje .= '			
								//<div class="bt_accion">
								//<a href="accion.php?id_barco='.$id_barco.'&id_movimiento='.$id_mov.'&id_op='.$id_op.'">'.$res2['nombre_mov'].'</a> 
								//</div>';
								
								$mensaje .= '			
								<div class="bt_accion" 
									data-idbarco='.$id_barco.' 
									data-idmovimiento="'.$id_mov.'" 
									data-idop="'.$id_op.'" 
									data-nombre="'.$res2['nombre_mov'].'">'.$res2['nombre_mov'].
									'</div>';
								}
		*/
		//---------------------------------------------------------------------------------
		//nueva creacion de botones para servicios del barco. reemplaza bloque anterior donde se creaban todos con el while
			//VARADERO
			//SQL para determinar si se puede pedir varadero o no... al id_barco en cuestion.
			$sql = mysqli_query($conn, "SELECT * 
			FROM indice_movimiento 
			WHERE indice_movimiento.id_mov 
			IN 
				(SELECT id_movimiento 
				FROM `tabla_operaciones` 
				WHERE id_barco='$id_barco' AND realizado !='si' AND 
				(id_movimiento=5 OR id_movimiento=6 OR id_movimiento=7 OR id_movimiento=15 OR id_movimiento=19)
				)
			AND (id_mov='5' OR id_mov='6' or id_mov='7' OR id_mov='15' OR id_mov='19')				
			");
			
			$BTN_a_MSG =1; //por defecto pongo el boton
			
			while($res2 = mysqli_fetch_array($sql)){
				//print_r($res2['id_mov']."<br>");
					if($res2['id_mov']== '5') $BTN_a_MSG =0;
					if($res2['id_mov']== '6') $BTN_a_MSG =0;
					if($res2['id_mov']== '19') $BTN_a_MSG =0;
			};
			
			if($BTN_a_MSG==1){
				//print("<br>VARADERO=0<br>");
				$sql = mysqli_query($conn, "SELECT * FROM indice_movimiento WHERE indice_movimiento.id_mov=5");
				$res2 = mysqli_fetch_array($sql);
				$id_mov = $res2['id_mov'];

				$mensaje .= '			
				<div class="bt_accion" 
					data-idbarco='.$id_barco.' 
					data-idmovimiento="'.$id_mov.'" 
					data-idop="'.$id_op.'" 
					data-nombre="'.$res2['nombre_mov'].'">'.$res2['nombre_mov'].
					'</div>';
			}
			/*
			else{
				print("<br>VARADERO =0 -- NO HAY BOTON --");
			}
			*/
		
		//PLUMA
		$sql = mysqli_query($conn, "SELECT * 
		FROM indice_movimiento 
		WHERE indice_movimiento.id_mov 
		IN 
			(SELECT id_movimiento 
			FROM `tabla_operaciones` 
			WHERE id_barco='$id_barco' AND realizado !='si' AND 
			(id_movimiento=7 OR id_movimiento=9 OR id_movimiento=14 OR id_movimiento=16)
			)
		AND (id_mov='7' OR id_mov='9' OR id_mov='14' or id_mov='16' )				
		");
		
		$BTN_a_MSG =1; //por defecto pongo el boton
		
		while($res2 = mysqli_fetch_array($sql)){
			//print_r($res2['id_mov']."<br>");				
				if($res2['id_mov']== '9') $BTN_a_MSG =0;
				if($res2['id_mov']== '14') $BTN_a_MSG =0;
				//if($res2['id_mov']== '16') $BTN_a_MSG =0;
		};
		
		if($BTN_a_MSG==1){
			//print("<br>VARADERO=0<br>");
			$sql = mysqli_query($conn, "SELECT * FROM indice_movimiento WHERE indice_movimiento.id_mov=9");
			$res2 = mysqli_fetch_array($sql);
			$id_mov = $res2['id_mov'];

			$mensaje .= '			
			<div class="bt_accion" 
				data-idbarco='.$id_barco.' 
				data-idmovimiento="'.$id_mov.'" 
				data-idop="'.$id_op.'" 
				data-nombre="'.$res2['nombre_mov'].'">'.$res2['nombre_mov'].
				'</div>';
		}
		/*
		else{
			print("<br>PLUMA =0 -- NO HAY BOTON --");
		}
		*/

		// LAVADO FONDO
		$sql = mysqli_query($conn, "SELECT * 
		FROM indice_movimiento 
		WHERE indice_movimiento.id_mov 
		IN 
			(SELECT id_movimiento 
			FROM `tabla_operaciones` 
			WHERE id_barco='$id_barco' AND realizado !='si' AND 
			(id_movimiento=10 OR id_movimiento=12 OR id_movimiento=17)
			)
		AND (id_mov='10' OR id_mov='12' or id_mov='17' )				
		");
		
		$BTN_a_MSG =1; //por defecto pongo el boton		
		while($res2 = mysqli_fetch_array($sql)){
			//print_r($res2['id_mov']."<br>");
				if($res2['id_mov']== '10') $BTN_a_MSG =0;
				//if($res2['id_mov']== '14') $BTN_a_MSG =0;
				//if($res2['id_mov']== '19') $BTN_a_MSG =0;
		};
		
		if($BTN_a_MSG==1){
			//print("<br>VARADERO=0<br>");
			$sql = mysqli_query($conn, "SELECT * FROM indice_movimiento WHERE indice_movimiento.id_mov=10");
			$res2 = mysqli_fetch_array($sql);
			$id_mov = $res2['id_mov'];

			$mensaje .= '			
			<div class="bt_accion" 
				data-idbarco='.$id_barco.' 
				data-idmovimiento="'.$id_mov.'" 
				data-idop="'.$id_op.'" 
				data-nombre="'.$res2['nombre_mov'].'">'.$res2['nombre_mov'].
				'</div>';
		}
		/*
		else{
			print("<br>LAVADO =0 -- NO HAY BOTON --");
		}
		*/


		//PALERA
		$sql = mysqli_query($conn, "SELECT * 
		FROM indice_movimiento 
		WHERE indice_movimiento.id_mov 
		IN 
			(SELECT id_movimiento 
			FROM `tabla_operaciones` 
			WHERE id_barco='$id_barco' AND realizado !='si' AND 
			(id_movimiento=8 OR id_movimiento=11 OR id_movimiento=18)
			)
		AND (id_mov='8' OR id_mov='11' or id_mov='18' )				
		");
		
		$BTN_a_MSG =1; //por defecto pongo el boton
		
		while($res2 = mysqli_fetch_array($sql)){
			//print_r($res2['id_mov']."<br>");
				if($res2['id_mov']== '8') $BTN_a_MSG =0;
				//if($res2['id_mov']== '14') $BTN_a_MSG =0;
				//if($res2['id_mov']== '19') $BTN_a_MSG =0;
		};
		
		if($BTN_a_MSG==1){
			//print("<br>VARADERO=0<br>");
			$sql = mysqli_query($conn, "SELECT * FROM indice_movimiento WHERE indice_movimiento.id_mov=8");
			$res2 = mysqli_fetch_array($sql);
			$id_mov = $res2['id_mov'];

			$mensaje .= '			
			<div class="bt_accion" 
				data-idbarco='.$id_barco.' 
				data-idmovimiento="'.$id_mov.'" 
				data-idop="'.$id_op.'" 
				data-nombre="'.$res2['nombre_mov'].'">'.$res2['nombre_mov'].
				'</div>';
		}
		/*
		else{
			print("<br>PALERA =0 -- NO HAY BOTON --");
		}
		*/
		//---------------------------------------------------------------------------------
		};//Fin while $resultados
	}; //Fin else $filas
};//Fin isset $consultaBusqueda

//Devolvemos el mensaje que tomará jQuery
echo $mensaje;
?>