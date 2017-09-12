<?php 
    session_start();    
    if(isset($_SESSION['id_usuario'])){   
      include ('verificar_login.php');
      if ($ver){ //$ver hace referencia a la verificacion de las claves de sesion
        //echo "log ok";
      }else{header("Location: login.php?codigo=2");}
    }else{
      header("Location: login.php"); 
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
<title>CNSM Sistema - GITHUB VERS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css"/>  
<link rel="stylesheet" href="css/menu.css" type="text/css">
<link rel="stylesheet" href="css/jquery-confirm.css"/>  
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
<style>
  .fechaOp{    display: inline-block;
    font-size: 0.8em;}
</style>
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
                    <div class="card_title">VARADERO</div>
              </div>
              <div class="card-main" id="card_activos">                
                <div class="main-description">
                    <?php include('barcos_activos_varadero.php'); ?>                  
                </div>
              </div>
            </div>
              <div class="card">
              <div class="card-header">
                    <div class="card_title">PLUMA</div>
              </div>
              <div class="card-main" id="card_activos">                
                <div class="main-description">
                    <?php include('barcos_activos_pluma.php'); ?>
                 
                </div>
              </div>
            </div> 
        </div>


        <div class="col2">
            <div class="card">
              <div class="card-header">
                    <div class="card_title">PALERA</div>
              </div>
              <div class="card-main" id="card_activos">                
                <div class="main-description">
                    <?php include('barcos_activos_palera.php'); ?>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                    <div class="card_title">Lavado de Fondo</div>
              </div>
              <div class="card-main" id="card_activos">                
                <div class="main-description">
                    <?php include('barcos_activos_fondo.php'); ?>
                </div>
              </div>
            </div>     
        </div>
    </div>
  </section>
<?php include('footer.html');?>
  

  <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script src="js/menu.js" type="text/javascript"></script>
  <script src="js/jquery-confirm.js" ></script>
  <script src="js/script.js" ></script>  

<script> 
  /*function buscar(id_barco,id_op) {
        document.location.href = "gen_movimiento.php?id_barco="+id_barco+"&id_op="+id_op;
     console.log(id_barco);
  };*/
 /*$(document).ready(function () { 
$.ajax({
  type: "post",
  url: "verificar_login.php",
  data: "data",
  success: function (response) {
    var val = response.trim();
    alert( val.length)
    if (val == "id_session_equal"){
      $('#msjeUsuario').text('Login OK')
      alert("true")
    }else{alert("false")}
  }
});
});*/

  $('.btn_barco').click(function(event) {
    var id=$(this).attr('id');
    $('#busqueda').val(id);
  });



jQuery(document).ready(function($) {
  $('.menu_home').addClass('active');
 // $('.submenu_nuevo').addClass('submenu_active');  
});

  </script>
</body>
</html>