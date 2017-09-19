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
<title>busqueda</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css"/> 
<link rel="stylesheet" href="css/menu.css" type="text/css">
<link rel="stylesheet" href="css/jquery-confirm.css"/>
<link rel="stylesheet" href="css/datepicker.css"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  

</head>
<body>

  <section id="top">
    <?php include('menu.html'); ?>
  </section> 
  <section class="contenedor principal">
    <div class="cont_card">
         <div class="contBox">      
          <div class="box2">
              <div class="titulo">Buscador</div>
                <form accept-charset="utf-8" method="POST">
                  <input class="form-style-1" type="text" name="busqueda" id="busqueda" value="" placeholder="Buscar minimo 3 letras" maxlength="30" autocomplete="off" onKeyUp="buscarKeyUP();" />          
                  </form>
                  <!--<button class="form-style-1" onClick="buscar();">Buscar</button>-->
              </div>
              <div class="box3">
                <div class="titulo">Accion</div>
                <div id="resultadoBusqueda"></div>
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
  <script src="js/jquery-confirm.js" async defer></script>
  <script src="js/datepicker.min.js" async defer></script>
  <script src="js/script.js" async defer></script>  

  <script>
function redireccionarPagina(){
    window.location = 'index.php';
  }

$(document).ready(function() {
    $("#resultadoBusqueda").html('<p>Tipea en el cuadro para mostrar barcos</p>');
    $( "#busqueda").focus();
  });

$(document).ready(function($) {  
  $(this).on('click', '.bt_accion', function(event) {
    /*event.preventDefault();*/
    /* Act on the event */
    let idbarco=$(this).attr('data-idbarco');
    let idmov=$(this).attr('data-idmovimiento');
    let idop=$(this).attr('data-idop');
    let nombre=$(this).attr('data-nmbre');
    console.log(idbarco + idmov + idop + nombre);     

$.confirm({
	theme: 'dark', // 'material', 'bootstrap'
    title: 'Ingresa la fecha de la solicitud!',
    content: '' +
    '<form action="" class="formName">' +
    '<div class="formPromptMov">' +
    '<label>Fecha de la solicitud!</label>' +
    '<input type="text" placeholder="Your name" class="fecha form-style-1" data-toggle="datepicker" required />' +
    '</div>' +
     '<div class="formPromptMov">' +
    '<label>Comentario de la operacion</label>' +
    '<textarea placeholder="Comentario del movimiento" name="comentario form-style-1" class="comentario" required  row="40"/></textarea>' +
    '</div>' +
    '</form>',
    buttons: {
        formSubmit: {
            text: 'Enviar!',
            btnClass: 'btn-blue',
            action: function () {
              var fecha = this.$content.find('.fecha').val();
				      var comentario = this.$content.find('.comentario').val();
                if(!fecha){
                    $.alert('Ingresa una Fecha');
                    return false;
                }
				        if(!comentario){
                    $.alert('Ingresa un Comentario');
                    return false;
                }
               // $.alert('Fecha es ' + fecha);
				//genero el movimiento
				new_mov(idbarco, idmov, idop, fecha, comentario);
        console.log(fecha)
        
            }
        },
        cancel: function () {
           // $.alert({title: 'cancelado',content:'Estas seguro?'});
        },
    },
    onContentReady: function () {
        // bind to events
        //muestro el date picker al cargar el prompt
         $(function(){
            $('[data-toggle="datepicker"]').datepicker({
              format: 'yyyy-mm-dd',
              zIndex: '999999999999999999',
              language: 'es-ES',
              autoShow: true,
              autoHide: true,
              autoPick: true,
            });
          });

        var jc = this;
        this.$content.find('form').on('submit', function (e) {
            // if the user submits the form by pressing enter in the field.
            e.preventDefault();
            jc.$$formSubmit.trigger('click'); // reference the button and click it
        });
    }
});
});
});

function buscarKeyUP() {  
    var textoBusqueda = $("#busqueda").val();  
    if (textoBusqueda.length > 2) {
        console.log(textoBusqueda);
           $.post("buscar_barco.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
                    $("#resultadoBusqueda").html(mensaje);
                 }); 
        }
      }; 

function new_mov(id_barco, id_mov, id_operacion, fecha, comentario){
 $.post("accion.php", {id_barco: id_barco, id_movimiento:id_mov, id_op:id_operacion, fecha:fecha, coment_op:comentario}, function(mensaje) {
              $("#resultadoBusqueda").html(mensaje);
              //toastr["info"](mensaje, "")
             $.alert({
                   title: 'Mensaje!',
                   content: mensaje,
                    onClose: function () {
                          // before the modal is hidden.
                     setTimeout("redireccionarPagina()", 1200);
                      }
                  });              
           }); 
}


function buscar(id_barco,id_operacion) {

     console.log(id_barco +"/"+ id_operacion);
    var textoBusqueda = id_barco;
   
       if (textoBusqueda != "") {
          $.post("buscar_barco.php", {valorBusqueda: id_barco , id_op:id_operacion}, function(mensaje) {
              $("#resultadoBusqueda").html(mensaje);              
           }); 
       } else { 
          $("#resultadoBusqueda").html('<p>Tiepea en el cuadro para mostrar barcos</p>'); };
  };

  $('.btn_barco').click(function(event) {
    var id=$(this).attr('id');
    $('#busqueda').val(id);
  });


jQuery(document).ready(function($) {
  $('.menu_movimientos').addClass('active');
  $('.submenu_nuevo').addClass('submenu_active');  
});
  </script>
</body>
</html>