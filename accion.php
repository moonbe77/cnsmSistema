<?php 
session_start();   
include 'acceso_db.php';
$mensaje = ""; 
if(isset($_SESSION['id_usuario']) && $_SESSION['jerarquia'] <=4 ){

		$id_usuario = $_SESSION['id_usuario'];
		$id_barco = $_REQUEST['id_barco'];	
		//$zona = $_REQUEST['zona'];
		$id_movimiento = $_REQUEST['id_movimiento'];
		$id_operacion = $_REQUEST['id_op'];
		$fecha_op = @$_REQUEST['fecha'];
		$coment_op = @$_REQUEST['coment_op'];
		if ($fecha_op=="") {
			//$fecha_op=format(date_timestamp_get($fecha);
				//$date = new DateTime();
				// "-2209078800"
				//$date->format("U");
				// false
				$fecha_op=date("Y-m-d");// $date->getTimestamp();
				$mensaje.= $fecha_op;
		}

		$consulta=mysqli_query($conn, 
            "SELECT * FROM indice_movimiento WHERE id_mov='$id_movimiento'");

            while($resultados = mysqli_fetch_array($consulta)) {
                $mov_nombre = $resultados['nombre_mov'];
                $asigna_zona = $resultados['asigna_zona'];
                $realiza = $resultados['realiza'];            
                $realiza_actual = $resultados['realiza_actual'];
            }			

		//msotrar los valores Debuging
		/*if($_POST)
			{
			foreach ($_POST as $clave=>$valor)
		   		{
		   		echo "El valor de $clave es: $valor <br>";
		   		}
			}*/

			//update
			$sql= "UPDATE tabla_operaciones SET
				realizado = '$realiza' WHERE id_operacion= '$id_operacion'";

		if (mysqli_query($conn, $sql)) {
			    //echo "barco modificado <br>";
			    //echo "Operacion Actualizada: ".$id_operacion;
			    $rs = mysqli_query($conn, "SELECT MAX(id_barco) AS id FROM tabla_barcos");
					if ($row = mysqli_fetch_row($rs)) {
					$id_mod = trim($row[0]);
							}
				} else {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}				

		   //Registro de la operación		   
		       $sql= "INSERT INTO tabla_operaciones(id_barco, id_movimiento, zona, id_usuario, realizado, fecha_operacion, coment_operacion) 
		                 VALUES ('$id_barco','$id_movimiento','$asigna_zona','$id_usuario', '$realiza_actual','$fecha_op','$coment_op')";
		                    if (mysqli_query($conn, $sql)) {
		                        //echo "<br>operacion registrada";
		                        //echo "Id Usuario: ".$id_usuario."<br>";
		                        //echo "Movimiento: ".$id_movimiento."<br>";
								$mensaje .="Operacion Registrada con exito";
		                        
		                    } else {
		                        $mensaje .= "Error: " . $sql . "<br>" . mysqli_error($conn);
		                    }
		mysqli_close($conn);

 			//header("Location: gen_movimiento.php?msje=".$msje); 
			$mensaje .="<br>Movimiento generado";
		}else{
		$mensaje= "No hay sesion iniciada o tu usuario no admite esta operacion, debes tener jerarqui 4 o menor";
	}
	echo $mensaje;
?>