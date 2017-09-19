<?php 
    session_start();    
    if(isset($_SESSION['id_usuario'])){   
      include ('verificar_login.php');
      if ($ver){
		//echo "log ok";
		$jer = $_SESSION['jerarquia'];
		echo '<script>
				var jerUsuario ='.$jer.' 
		</script>';
      }else{header("Location: login.php?codigo=2");}
    }else{
      header("Location: login.php?codigo=1"); 
      echo 'INICIA SESION <br> <a href="login.php">VOLVER</a>';
	  } 
      /*
        codigo
        1 - sesion no iniciada
        2 - el id no corresponde con el de la BD, posiblemnte hay otro usuario logeado
	  */
	  
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Barcos Activos</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css"/> 
<link rel="stylesheet" href="css/menu.css" type="text/css">
<link rel="stylesheet" href="css/jquery-confirm.css"/>    
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>

	<section id="top">
		<?php include('menu.html');?>
	</section> 
	<section class="contenedor principal">
		<div class="tituloServicio"></div>

	
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

	case 'lavado':
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

		//Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
		if ($filas === 0) {
			$mensaje = "<p>NO HAY BARCOS ACTIVOS</p>";
		} else {
			//Si existe alguna fila entonces mostramos el siguiente mensaje
			//La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los  datos y los mostramos en un bucle

			while($resultados = mysqli_fetch_array($consulta)) {
				$id_barco =$resultados['id_barco'];
				$id_op = $resultados['id_operacion'];
				$zona = $resultados['zona'];
				$fechaOp = $resultados['fecha_operacion'];        
			 
				$sql = mysqli_query($conn, "SELECT * FROM tabla_barcos WHERE id_barco=$id_barco");

						while($res = mysqli_fetch_array($sql)) { 
							$nombre_barco=$res['nombre_barco'];
								//Output 
							$mensaje .='<div class="cajaBarcoActivo">';
								$mensaje .= '<div class="box_activos">
										<div class="sel_barco">
								<a href="movimiento.php?id='.$res['id_barco'].'" title="Ver movimientos del barco '.$res['nombre_barco'] .'">'. $res['nombre_barco'] .'</a>
									<div class="rey"> REY:'.$res['rey_barco'].' </div>
									<div class="fechaOp" title="Fecha solicitada"> Fecha:'.$fechaOp.'</div>
									</div> 
									<!-- <div class="boton" id="'.$res['id_barco'].'&id_op='.$id_op.'" onClick="buscar('.$res['id_barco'].','.$id_op.');">
										<i class="material-icons">send</i></div>
											<div class="link_ver_barco">  
										 </div>-->
									 </div>';
				
				$sql = mysqli_query($conn,"SELECT * FROM rel_zonas WHERE zona_actual = '$zona' ");
			while($res = mysqli_fetch_array($sql)) {
				$id_mov=$res['mov_id'];
				//$id_op=$res['id_operacion'];
					$sql2 = mysqli_query($conn, "SELECT * FROM indice_movimiento WHERE id_mov='$id_mov' ");

					while($res2 = mysqli_fetch_array($sql2)) {                      
						/*$mensaje .= '     
						<div class="bt_accion">
						<a href="accion.php?id_barco='.$id_barco.'&id_movimiento='.$id_mov.'&id_op='.$id_op.'">'.$res2['nombre_mov'].'</a> 
						</div>';*/
						$mensaje .= '     
								<div class="bt_accion" data-nombre-barco="'.$nombre_barco.'" data-idbarco='.$id_barco.' data-idmovimiento="'.$id_mov.'" data-idop="'.$id_op.'" data-nombre-mov="'.$res2['nombre_mov'].'">'.$res2['nombre_mov'].'</div>';
					}
				}
				$mensaje .= "</div>";
				}
			};//Fin while $resultados
		}; //Fin else $filas
		echo $mensaje;    
		?>   
	</section>
<?php include('footer.html');?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="js/menu.js" type="text/javascript"></script>
<script src="js/jquery-confirm.js" ></script>
  <script src="js/script.js" ></script>  


<script>
let servicio="";


jQuery(document).ready(function() {
	$('.menu_movimientos').addClass('active');
	//$('.submenu_varadero').addClass('submenu_active');  
});

$(document).ready(function() {
   servicio = obtenerURL("servicio"); //llamo a la funcion obtenerURL en script.js
       
       switch (servicio) {
       	case "varadero":
       		$('.tituloServicio').text("Barcos en "+servicio);
       		break;
       		case "lavado":
       		$('.tituloServicio').text("Barcos en "+servicio+" de fondo");
       		break;
       		case "palera":
       		$('.tituloServicio').text("Barcos en "+servicio);
       		break;
       		case "pluma":
       		$('.tituloServicio').text("Barcos en "+servicio);
       		break;
       	default:
       		// statements_def
       		break;
       }
      //console.log(servicio);
});


$(document).ready(function($) {  
	$(this).on('click', '.bt_accion', function(event) {
		/*event.preventDefault();*/

		let idbarco=$(this).attr('data-idbarco');
		let idmov=$(this).attr('data-idmovimiento');
		let idop=$(this).attr('data-idop');
		let nombreMov=$(this).attr('data-nombre-mov');
		let nombreBarco=$(this).attr('data-nombre-barco');
			console.log(idmov);
		
			//*** verificar que la jerarqui permita hacer el movimiento** 6 7 11 12 14*/
		if (jerUsuario == 2 && (idmov != "6" || idmov != "7" || idmov != "11" || idmov != "12" || idmov != "14" )){
			//alert('no puedes hacer esto')
			$.alert({
				title: 'No puedes realizar esa acción',
				content: "Tu usuario no permite este movimiento",
				onAction: function (btnName) {
						// when a button is clicked, with the button name
						//alert('onAction: ' + btnName);
						//window.location = document.URL;
				}
			});  
		}else{	
			$.confirm({
				theme: 'dark', // 'material', 'bootstrap'
				title: 'Confirmar !',
				content: 'Confirma',
				buttons: {
						Aceptar: {
							text: 'Aceptar', // Some Non-Alphanumeric characters
							action: function () {  
								//genero el movimiento
								new_mov(idbarco, idmov, idop);
								console.log('ok');
								//agregar un time aut a este paso para que de tiempo a mysql a procesar la peticion
								//o crear un call back con jqeryconfirm				
								console.log(document.URL)
							}
						},
							Cancelar: function(){// here the key 'something' will be used as the text.
									//$.alert('cancelando');
							}      
						},
						onContentReady: function(){
					//var jc = this;
				//this.setTitle("TEST TEST"),
				this.setContent('<div class="confirmacion">Estas seguro que quieres : <strong>'+nombreMov+'</strong> para el barco: <strong>'+nombreBarco+'</strong></div>')
				},
				onAction: function (btnName) {
					// when a button is clicked, with the button name
					//alert('onAction: ' + btnName);
					//window.location = document.URL;
				},
					});
				}
				});				
			});

function new_mov(id_barco, id_mov, id_operacion, fecha, comentario){
 	$.post("accion.php", {id_barco: id_barco, id_movimiento:id_mov, id_op:id_operacion, fecha:fecha, coment_op:comentario}, function(mensaje) {
		$("#resultadoBusqueda").html(mensaje);
		$.alert({
			title: 'Mensaje!',
			content: mensaje,
			onAction: function (btnName) {
			        // when a button is clicked, with the button name
			        //alert('onAction: ' + btnName);
			        window.location = document.URL;
    					}
			});              
	 }); 
}

</script>
</body>
</html>