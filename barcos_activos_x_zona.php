<?php 
        //Variable vacía (para evitar los E_NOTICE)
        $mensaje = "";
            
        require('acceso_db.php');

        //$consulta = mysqli_query($conn, "SELECT * FROM tabla_operaciones WHERE zona != 0 GROUP BY id_barco");
   /*$consulta=mysqli_query($conn, 
            "SELECT * FROM tabla_operaciones AS a
                inner join (
                SELECT max(time_stamp) AS time_stamp, id_barco FROM tabla_operaciones GROUP BY id_barco) AS b ON (a.id_barco=b.id_barco and a.time_stamp=b.time_stamp) WHERE zona != 0");*/

      $consulta = mysqli_query($conn, "SELECT * FROM tabla_operaciones WHERE realizado = 'no' and zona = 3");


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

                $sql = mysqli_query($conn, "SELECT * FROM tabla_barcos WHERE id_barco=$id_barco");

                    while($res = mysqli_fetch_array($sql)) {           

                        //Output
                        $mensaje .= '<div class="box_activos">
                                        <div class="sel_barco">
                                        <a href="movimiento.php?id='.$res['id_barco'].'" title="Ver movimientos de '.$res['nombre_barco'] .'">'. $res['nombre_barco'] .'</a><span class="rey"> REY:'.$res['rey_barco'].' </span></div> 
                                        <div class="boton" id="'.$res['id_barco'].'" onClick="buscar('.$res['id_barco'].');">
                                        <i class="material-icons">send</i></div>
                                        <div class="link_ver_barco">  
                                       </div>
                                     </div>';

                                   }

              };//Fin while $resultados

            }; //Fin else $filas
            echo $mensaje;

            
            ?>