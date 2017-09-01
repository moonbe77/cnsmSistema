<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>busqueda</title>
  <link rel="stylesheet" href="css/style.css"/>  
</head>
<body>

  <section id="top">
    <?php include('menu.html'); ?>
  </section> 
  <section class="contenedor">

  <form accept-charset="utf-8" method="POST">
    <input type="text" name="busqueda" id="busqueda" value="" placeholder="Buscar" maxlength="30" autocomplete="off" onKeyUp="buscar();" />
  </form>

  <div id="resultadoBusqueda"></div>
  </section>
  

  <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script>
  $(document).ready(function() {
      $("#resultadoBusqueda").html('<p>Tiepea en el cuadro para mostrar barcos</p>');
  });

  function buscar() {
      var textoBusqueda = $("input#busqueda").val();
   
       if (textoBusqueda != "") {
          $.post("sel_barco.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
              $("#resultadoBusqueda").html(mensaje);
           }); 
       } else { 
          $("#resultadoBusqueda").html('<p>Tiepea en el cuadro para mostrar barcos</p>');
          };
  };
  </script>
</body>
</html>