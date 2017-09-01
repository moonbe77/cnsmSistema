<?php 
  $servicio = $_REQUEST['servicio'];
				//Variable vacía (para evitar los E_NOTICE)
				$mensaje = "";            
				

				require('acceso_db.php');


switch ($servicio) {
	case 'varadero':
		$consulta=mysqli_query($conn, 
			"SELECT * FROM tabla_operaciones WHERE (realizado !='si' AND zona = 2 ) 
								OR (realizado !='si' AND (zona = 3 OR zona = 8) ) ORDER BY fecha_operacion asc");
		$titulo="Servicio Varadero";
		break;

	case 'pluma':
		//consulta para Pluma
		$consulta=mysqli_query($conn, 
			"SELECT * FROM tabla_operaciones WHERE realizado != 'si'  AND  zona = 4 OR realizado != 'si' AND  zona = 1");
		$titulo="Servicio Pluma";

		break;

	case 'palera':
		//consulta para Palera
		$consulta=mysqli_query($conn, 
			"SELECT * FROM tabla_operaciones WHERE realizado != 'si' AND zona = 6");
		$titulo="Servicio Palera";
		break;

	case 'fondo':
		//consulta para Lavado de Fondo
		$consulta=mysqli_query($conn, 
			"SELECT * FROM tabla_operaciones WHERE realizado != 'si' and zona = 7");
		$titulo="Servicio Fondo";    
		break;      
	
	default:
		$mensaje = " ERROR  - Debes elegir un servicio"; 
		break;
}

 //Obtiene la cantidad de filas que hay en la consulta
		$filas = mysqli_num_rows($consulta);

		$mensaje .= $filas;

		echo $mensaje;
?>