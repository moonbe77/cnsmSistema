<?php
include 'acceso_db.php';
$ses_id= session_id();
    $sql = "SELECT s_id FROM usuarios WHERE id_usuario='$_SESSION[id_usuario]'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);      
    if ($row['s_id']==$ses_id) {
      print "id_session_equal";
      $ver = true;   
   }else{            
     echo 'id_session_not_equal';
     $ver = false;        
        } 
?>