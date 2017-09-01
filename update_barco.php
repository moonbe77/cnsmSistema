<?php 
session_start();   
include 'acceso_db.php';
if(isset($_SESSION['id_usuario']) && $_SESSION['jerarquia'] <=4 ){

		$id_usuario = $_SESSION['id_usuario'];
		$id_barco = $_REQUEST['id_barco'];		
		$nombre_barco = $_REQUEST['nombre_barco'];
		$clase_barco = $_REQUEST['clase_barco'];
		$rey = $_REQUEST['rey'];
		$tipo = $_REQUEST['tipo'];
		$eslora = $_REQUEST['eslora'];
		$manga = $_REQUEST['manga'];
		$desplazamiento = $_REQUEST['desplazamiento'];
		$ton_total = $_REQUEST['ton_total'];
		$ton_neto = $_REQUEST['ton_neto'];
		$m2_barco = $_REQUEST['m2_barco'];
		$compania_seguro = $_REQUEST['compania_seguro'];
		$num_poliza = $_REQUEST['num_poliza'];
		$vence_poliza = $_REQUEST['vence_poliza'];
		$nombre_dueno = $_REQUEST['nombre_dueno'];
		$apellido_dueno = $_REQUEST['apellido_dueno'];
		$dni = $_REQUEST['dni'];
		$direccion = $_REQUEST['direccion'];
		$tel = $_REQUEST['tel'];
		$cel = $_REQUEST['cel'];
		$email = $_REQUEST['email'];
		$club = $_REQUEST['club'];
		$nota = $_REQUEST['nota'];

		//msotrar los valores Debuging
		if($_POST)
			{
			foreach ($_POST as $clave=>$valor)
		   		{
		   		echo "El valor de $clave es: $valor <br>";
		   		}
			}


		$sql= "UPDATE tabla_barcos SET 
		nombre_barco='$nombre_barco', 
		clase_barco='$clase_barco', 
		rey_barco='$rey',
		tipo_barco='$tipo', 
		eslora_barco='$eslora', 
		manga_barco='$manga', 
		desplazamiento_barco='$desplazamiento', 
		ton_total_barco='$ton_total', 
		ton_neto_barco='$ton_neto', 
		m2_barco='$m2_barco', 
		comp_seguro_barco='$compania_seguro', 
		num_poliza_barco='$num_poliza', 
		venc_poliza='$vence_poliza', 
		due_nombre_barco='$nombre_dueno', 
		due_apellido_barco='$apellido_dueno', 
		due_dni_barco='$dni', 
		due_direccion_barco='$direccion', 
		due_tel_barco='$tel', 
		due_cel_barco='$cel', 
		due_email_barco='$email', 
		due_club_barco='$club', 
		nota='$nota' WHERE id_barco= '$id_barco'";


		/*$sql= "INSERT INTO tabla_barcos(nombre_barco) VALUES ('$nombre_barco')";*/

		if (mysqli_query($conn, $sql)) {
			    echo "barco modificado <br>";
			    $rs = mysqli_query($conn, "SELECT MAX(id_barco) AS id FROM tabla_barcos");
					if ($row = mysqli_fetch_row($rs)) {
					$id_mod = trim($row[0]);

							}
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}


		   //Registro de la operación
		   //el indice 11 es la modificacion de barco
		       $sql= "INSERT INTO tabla_log(id_barco, id_movimiento, id_usuario, coment_operacion) 
		                  VALUES ('$id_barco',11, '$id_usuario', 'Modificacion barco en el sistema')";
		                  //el valor 3 representa el indice de movimiento carga de barco
		                    if (mysqli_query($conn, $sql)) {
		                        echo "operacion registrada";
		                        echo "Id Usuario: ".$id_usuario;
		                        echo "Id Barco: ".$id_mod;
		                    } else {
		                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		                    }




		mysqli_close($conn);

 header("Location: mod_barco.php?id=".$id_barco); 
}else{
		echo "No hay sesion iniciada o tu usuario no admite esta operacion, debes tener jerarqui 4 o menor";
	}
?>