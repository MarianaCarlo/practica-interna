<?php
  
  include('dbconnect.php');
  $nombre = $_POST['nombreAdmin'];
  $pass1 = $_POST['actContrasenaAdmin'];
  $pass2 = $_POST['confirActContrasenaAdmin'];
  $codigoAdmin = $_POST['codigoAdminist'];
  
  //create query
  

  if(isset($_POST['submit_perfil'])){    
          if ($pass1 == $pass2) {
            $pass2 = base64_encode($_POST[confirActContrasenaAdmin]);
            $query123 = "UPDATE administradores SET nombre='$nombre', contrasena='$pass2' WHERE codigo_admi='$codigoAdmin';";  
            if (mysqli_query($conn, $query123)) {   
              header("Location:index.php");
            } else {
              echo "no se puede actualizar";
            }
          }  else {
            echo "Las contraseñas no coinciden";
            header("Location:mensajes/mensaje4.php");
          }

  } else {
    echo "no entra";
  }
  
  //$query = "UPDATE administradores SET nombre='$nombre' , contrasena='$contrasena1' WHERE book_id='$id'";

?>

