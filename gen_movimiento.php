<?php 
    session_start();   
    if(isset($_SESSION['id_usuario']) && $_SESSION['jerarquia'] <=4 ){ 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Nuevo</title>
  <link rel="stylesheet" href="css/style.css"/> 
  <link rel="stylesheet" href="css/menu.css" type="text/css"> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

</head>
<body>

  <section id="top">
    <?php include('menu.html'); ?>
  </section> 
  <section class="contenedor principal">
    <div class="cont_card">

    <div class="col1">
            <div class="card">
              <div class="card-header">
                 <i class="material-icons">view_headline</i>
                    <div class="card_title">Barcos Activos</div>
              </div>
              <div class="card-main" id="card_activos">
                
                <div class="main-description">
                  <div class="Tzona">VARADERO</div>
                    <?php include('barcos_activos_varadero.php'); ?>
                  <div class="Tzona">PLUMA</div>
                    <?php include('barcos_activos_pluma.php'); ?>
                  <div class="Tzona">PALERA</div>
                    <?php include('barcos_activos_palera.php'); ?>
                  <div class="Tzona">lAVADO FONDO</div>
                    <?php include('barcos_activos_fondo.php'); ?>
                </div>
              </div>
            </div>  
        </div>
        <div class="col2">
         <div class="contBox">      
          <div class="box2">
              <div class="titulo">Buscador</div>
                <form accept-charset="utf-8" method="POST">
                  <input class="form-style-1" type="text" name="busqueda" id="busqueda" value="" placeholder="Buscar minimo 3 letras" maxlength="30" autocomplete="off" onKeyUp="buscarKeyUP();" />          
                  </form><button class="form-style-1" onClick="buscar();">Buscar</button>
              </div>
              <div class="box3">
                <div class="titulo">Accion</div>
                <div id="resultadoBusqueda"></div>
              </div>
            </div>
          
        </div>
      </div>

   
  </section>
  

  <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script src="js/menu.js" type="text/javascript"></script>

  <script>


  function obtenerId(param)
{
/* Obtener la url completa */
url = document.URL;
/* Buscar a partir del signo de interrogación ? */
url = String(url.match(/\?+.+/));
/* limpiar la cadena quitándole el signo ? */
url = url.replace("?", "");
/* Crear un array con parametro=valor */
url = url.split("&");

/* 
Recorrer el array url
obtener el valor y dividirlo en dos partes a través del signo = 
0 = parametro
1 = valor
Si el parámetro existe devolver su valor
*/
x = 0;
while (x < url.length)
{
p = url[x].split("=");
if (p[0] == param)
{
return decodeURIComponent(p[1]);
alert(p);
}
x++;
}
}

  $(document).ready(function() {
      $("#resultadoBusqueda").html('<p>Tiepea en el cuadro para mostrar barcos</p>');
  });

  function buscarKeyUP() {
    var textoBusqueda = $("#busqueda").val();  
    if (textoBusqueda.length > 3) {
        console.log(textoBusqueda);

             if (textoBusqueda != "") {
                $.post("buscar_barco.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
                    $("#resultadoBusqueda").html(mensaje);
                 }); 
             } else { 
                $("#resultadoBusqueda").html('<p>Tiepea en el cuadro para mostrar barcos</p>');
                };
    }
  };

function buscar(id_barco,id_operacion) {

     console.log(id_barco +"/"+ id_operacion);
    var textoBusqueda = id_barco;
   
       if (textoBusqueda != "") {
          $.post("buscar_barco.php", {valorBusqueda: id_barco , id_op:id_operacion}, function(mensaje) {
              $("#resultadoBusqueda").html(mensaje);
              
           }); 
       } else { 
          $("#resultadoBusqueda").html('<p>Tiepea en el cuadro para mostrar barcos</p>');

          };
  };

  $('.btn_barco').click(function(event) {
    var id=$(this).attr('id');
    $('#busqueda').val(id);
  });


//TOMO LA URL Y OBTENGO EL ID para mostrar el barco que viene desde INDEX
jQuery(document).ready(function($) {

   var id_barco = obtenerId("id_barco"); //llamo a la funcion obtenerId
   var id_op = obtenerId("id_op"); //llamo a la funcion obtenerId
    if (id_barco > 1000){//mejorar esta condicion
      console.log("id_barco: "+id_barco);
      console.log("id_op: "+id_op);
        buscar(id_barco,id_op); 
    }
    

});





jQuery(document).ready(function($) {
  $('.menu_movimientos').addClass('active');
  $('.submenu_nuevo').addClass('submenu_active');  
});
  </script>
</body>
</html>
<?php } else {echo 'INICIA SESION <br> <a href="login.php">VOLVER</a>';}?>