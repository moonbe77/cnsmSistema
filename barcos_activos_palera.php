<?php 
        //Variable vacía (para evitar los E_NOTICE)
        $mensaje = "";
            
        require('acceso_db.php');

        //$consulta = mysqli_query($conn, "SELECT * FROM tabla_operaciones WHERE zona != 0 GROUP BY id_barco");
   /*$consulta=mysqli_query($conn, 
            "SELECT * FROM tabla_operaciones AS a
                inner join (
                SELECT max(time_stamp) AS time_stamp, id_barco FROM tabla_operaciones GROUP BY id_barco) AS b ON (a.id_barco=b.id_barco and a.time_stamp=b.time_stamp) WHERE zona != 0");*/

   //consulta para Palera
    $consulta=mysqli_query($conn, 
            "SELECT * FROM tabla_operaciones WHERE realizado != 'si' AND zona = 6");


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

                
                $sql = mysqli_query($conn, "SELECT * FROM tabla_barcos WHERE id_barco=$id_barco");

                    while($res = mysqli_fetch_array($sql)) {           

                        //Output
                      $mensaje .= '
                        <div class="box_activos">
                             <div class="sel_barco">
                                  <a href="movimiento.php?id='.$res['id_barco'].'" title="Ver movimientos de '.$res['nombre_barco'] .'">'. $res['nombre_barco'] .'</a>
                                  <span class="rey"> REY:'.$res['rey_barco'].' </span>

                               </div> 
                               <div class="link_ver_barco"> 
                                  <a href="barcos_activos.php?servicio=palera" class="boton" id="'.$res['id_barco'].'&id_op='.$id_op.'" onClick="buscar('.$res['id_barco'].','.$id_op.');"><i class="material-icons">send</i>
                                  </a>  
                                </div>
                          </div>'; }

                      /* $sql = mysqli_query($conn, 
                          "SELECT * FROM rel_zonas WHERE zona_actual = '$zona'");

                            while($res = mysqli_fetch_array($sql)) {
                                  $id_mov=$res['mov_id'];
                                  //$id_op=$res['id_operacion'];

                                  $sql2 = mysqli_query($conn, "SELECT * FROM indice_movimiento WHERE id_mov='$id_mov' ");

                                while($res2 = mysqli_fetch_array($sql2)) {                      
                            $mensaje .= '     
                            <div class="bt_accion">
                            <a href="accion.php?id_barco='.$id_barco.'&id_movimiento='.$id_mov.'&id_op='.$id_op.'">'.$res2['nombre_mov'].'</a> 
                            </div>';
                            }
                    }*/

                                   

              };//Fin while $resultados

            }; //Fin else $filas
            echo $mensaje;

            
            ?>