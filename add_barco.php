<?php 
session_start();   
include 'acceso_db.php';
if(isset($_SESSION['id_usuario']) && $_SESSION['jerarquia'] <=4 ){

		$id_usuario = $_SESSION['id_usuario'];
		
		$sql2 = mysqli_query($conn, " SELECT * FROM tabla_barcos ");


	            while($res2 = mysqli_fetch_array($sql2)) { 

	            	//print_r($res2);

	            	$id=$res2['id_barco'];
	            	echo $id;

	$sql= "INSERT INTO tabla_operaciones(id_barco, id_movimiento, zona , id_usuario, coment_operacion) 
		                  VALUES ('$id',3,'0,1, 'accion add barco a op')";
		                  //el valor 3 representa el indice de movimiento carga de barco
		                    if (mysqli_query($conn, $sql)) {
		                        echo "<br>operacion registrada";
		                        echo "Id Usuario: ".$id_usuario;
		                        echo "Id Barco: ".$id_movimiento;
		                    } else {
		                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		                    }


					}


				}



?>
