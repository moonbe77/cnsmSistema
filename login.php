<?php  
  session_start();
  session_unset();
  session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>CNSM Sistema</title>
  <link rel="stylesheet" href="css/style.css"/>  
  <link rel="stylesheet" href="css/menu.css" type="text/css">
  <link rel="stylesheet" href="css/jquery-confirm.css"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
<style>
.col12{
	text-align:center;
}
</style>
</head>
<body>

  <section id="top">
  <header id="header"> <!-- header -->
        <figure class="logotipo"> <!-- logotipo -->
          <img src="img/cnsm_logo.png" height="60" alt="Sistema CNSM"/>
        </figure>			
      </header>    
  </section> 

  <section class="contenedor principal">
    <div class="cont_card">
        <div class="col12">
			 <div>Inicia Sesión</div>
				<form action="comprobar_login.php" method="post"> 

				  <div class="form-group">
				  <input type="text" class="form-style-1" name="usuario_nick"  placeholder="Usuario" id="nick">  
				  </div>

				  <div class="form-group">
				  <input type="password" class="form-style-1 " name="usuario_clave"  placeholder="Password" id="pass">  
				  </div>

				  <button id="enviar" class="form-style-1" type="submit" name="enviar" value="Ingresar" />Ingresar</button> 
				</form>
        </div>    
    </div>
  </section>
  

  <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script src="js/jquery-confirm.js" async defer></script>
  <script src="js/script.js" async defer></script>  

  <script>
function redireccionarPagina(){
    window.location = 'index.php';
  }

$(document).ready(function($) {
  $('#enviar').click(function(event) {
    event.preventDefault();
    let nick =$('#nick').val();
    let pass =$('#pass').val();
    console.log(nick);
     $.post('comprobar_login.php', {usuario_nick: nick, usuario_clave:pass}, function(data, textStatus, xhr) {
    console.log(data);
         d=data.trim();    
    console.log(d);
      if(d == "logOK"){                 
          setTimeout("redireccionarPagina()", 1500);
          $.alert({
                    title: nick,
                    content: 'Ingresando al Sistema ...',
                     backgroundDismiss: function(){
                      redireccionarPagina()
                      return false; // modal wont close.
    },
                });          
        }else{          
          $.alert({
                    title: 'Atención!!',
                    content: data,    
                     backgroundDismiss: true,                                    
                });
        }
     });
  });
});

 
   let codigo = obtenerURL("codigo"); //llamo a la funcion obtenerURL
    if (codigo==1){//mejorar esta condicion
      console.log(codigo); 
      alert('debes iniciar sesion')
    }
    if (codigo==2){//mejorar esta condicion
      console.log(codigo); 
      alert('debes iniciar de nuevo, alguien inicio el sistema en otro navegador')
    }




  </script>
</body>
</html>

	