<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!--ALL-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js" data-semver="3.0.0" data-require="jquery"></script>
    <link rel="stylesheet" href="css/bootstrap-multiselect/bootstrap-multiselect.css" type="text/css">
    
    <!--FONT AWESOME ICONS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CSS-->
    <link href="css_mensajes/mensaje1.css" rel="stylesheet" >
    <!--JS-->
    <title>contenido de convenios</title>
  </head>
  <body>

<?php
    include('dbconnect.php');
    $nombreNuevoAdmi = $_POST['admnistradorNuevo'];
    $password1 = $_POST['nuevoPassAdmin'];
    $password2 = $_POST['confNuevoPassAdmin'];
    $codigoNuevoAdmin = $_POST['codigoAdminNuevo'];
    
    //create query
    //create query for validation estudiantes,docentes,administradores
    $query_estudiantes = "SELECT * FROM estudiantes WHERE codigo_estudiante='$codigoNuevoAdmin'";
    $query_docentes = "SELECT * FROM docentes WHERE codigo_docente='$codigoNuevoAdmin'";
    $query_administradores = "SELECT * FROM administradores WHERE codigo_admi='$codigoNuevoAdmin'";
    
    $result_estudiantes = mysqli_query($conn, $query_estudiantes);
    $result_docentes = mysqli_query($conn, $query_docentes);
    $result_administradores = mysqli_query($conn, $query_administradores);

    $resultCheckEstudiantes = mysqli_num_rows($result_estudiantes);
    $resultCheckDocentes = mysqli_num_rows($result_docentes);
    $resultCheckAdministradores = mysqli_num_rows($result_administradores);
    
    if(isset($_POST['submit_anadir_admi'])){ 
      if  ($resultCheckEstudiantes > 0 || $resultCheckDocentes > 0 || $resultCheckAdministradores > 0) {
        echo "ese codigo ya existe en la base de datos, por favor indroduce otro codigo";
        header("Location:mensajes/mensaje5.php");
      } else {   
            if ($password1 == $password2) {
              $password2 = base64_encode($_POST['confNuevoPassAdmin']);
              $query = "INSERT administradores VALUES('$codigoNuevoAdmin','$nombreNuevoAdmi','$password2','1')";  
  
                if (mysqli_query($conn, $query)) {
                  header("Location:mensajes/mensaje1.php");
                  
                } else {
                    echo "no se pudo añadir porque ese codigo ya existe en la base de datos";
                    header("Location:mensajes/mensaje5.php");
                }
            }  else {
              echo "Las contraseñas no coinciden";
              header("Location:mensajes/mensaje4.php");
            }
          }
    } else {
      echo "no entra";
    }
?>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>