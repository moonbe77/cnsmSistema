<?php 
    session_start(); 
    include 'acceso_db.php';   
    //echo $_POST['usuario_nick'].$_POST['usuario_clave'];

   $mensaje="";

   // if (isset($_POST['enviar'])) {
     // comprobamos que se hayan enviado los datos del formulario 
        // comprobamos que los campos usuarios_nombre y usuario_clave no estén vacíos 
        if (empty($_POST['usuario_nick']) || empty($_POST['usuario_clave'])) { 
            $mensaje = "El usuario o la contraseña no han sido ingresados";
            }else { 

            //comprobamos en la bd el usuario y la pass            
        $sql = "SELECT id_usuario, nick, jerarquia FROM usuarios WHERE nick='$_POST[usuario_nick]' AND pass='$_POST[usuario_clave]'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $id_usuario=$row["id_usuario"];
                    $usuario=$row["nick"];
                    $jerarquia=$row["jerarquia"];
                   
                    // creamos la sesion "usuario_nombre" y le asignamos como valor el campo usuario_nombre 
                     $_SESSION['usuario_nick'] = $usuario;
                    $_SESSION['id_usuario'] = $id_usuario;
                    $_SESSION['jerarquia'] = $jerarquia;
                    $mensaje ="logOK" ;
                //Registro de la operación
                  $sql= "INSERT INTO tabla_log(id_movimiento, id_usuario, coment_operacion) 
                  VALUES (1, '$id_usuario', 'login')";

                    if (mysqli_query($conn, $sql)) {
                        //echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
                    // header("Location: index.php");
                     
                } else {
                   $mensaje.= "Usuario o Clave Erroneos";
            }
          }
       // }else{$mensaje="Campos vacios";}
 mysqli_close($conn);
 echo $mensaje;
?> 