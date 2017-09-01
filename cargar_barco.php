<?php 
session_start();   
include 'acceso_db.php';
if(isset($_SESSION['id_usuario']) && $_SESSION['jerarquia'] <=4 ){

		$id_usuario = $_SESSION['id_usuario'];
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


		$sql= "INSERT INTO tabla_barcos(nombre_barco, clase_barco, rey_barco, tipo_barco, eslora_barco, 
		manga_barco, desplazamiento_barco, ton_total_barco, ton_neto_barco, m2_barco, 
		comp_seguro_barco, num_poliza_barco, venc_poliza, due_nombre_barco, due_dni_barco, 
		due_direccion_barco, due_tel_barco, due_cel_barco, due_email_barco, due_club_barco, nota) 
		VALUES ('$nombre_barco','$clase_barco','$rey','$tipo','$eslora','$manga','$desplazamiento',	'$ton_total','$ton_neto','$m2_barco','$compania_seguro','$num_poliza','$vence_poliza','$nombre_dueno','$dni','$direccion','$tel',
			'$cel','$email','$club','$nota')";


		/*$sql= "INSERT INTO tabla_barcos(nombre_barco) VALUES ('$nombre_barco')";*/

		if (mysqli_query($conn, $sql)) {
			    echo "barco cargado <br>";
			    $rs = mysqli_query($conn, "SELECT MAX(id_barco) AS id FROM tabla_barcos");
					if ($row = mysqli_fetch_row($rs)) {
					$id_barco = trim($row[0]);
							}
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}


		   //Registro de la operación
		       $sql= "INSERT INTO tabla_log(id_barco, id_movimiento, id_usuario, coment_operacion) 
		                  VALUES ('$id_barco',3, '$id_usuario', 'Cargado barco al sistema')";
		                  //el valor 3 representa el indice de movimiento carga de barco
		                    if (mysqli_query($conn, $sql)) {
		                        echo "operacion registrada <br>";
		                        echo "Id Usuario: ".$id_usuario;
		                        echo "Id Barco: ".$id_barco;
		                    } else {
		                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		                    }


		/*
		$sql = "SELECT * FROM tabla_barcos";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {        
		        //mostrar los valores Debuging
				if($row){
					foreach ($row as $clave=>$valor){
				   		echo "El valor de $clave es: $valor <br>";
				   		}}
		    }
			} else {
		    echo "0 results";
		}*/

		mysqli_close($conn);
}else{
		echo "No hay sesion iniciada o tu usuario no admite esta operacion, debes tener jerarqui 4 o menor";
	}



?>