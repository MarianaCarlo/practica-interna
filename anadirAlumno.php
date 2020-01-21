<?php
    
    include('dbconnect.php');
    $codigoNuevoAlum = $_POST['codigoAlum'];
    $valor = $_POST['radioEstDoc'];
    
    //create query for validation estudiantes,docentes,administradores
    $query_estudiantes = "SELECT * FROM estudiantes WHERE codigo_estudiante='$codigoNuevoAlum'";
    $query_docentes = "SELECT * FROM docentes WHERE codigo_docente='$codigoNuevoAlum'";
    $query_administradores = "SELECT * FROM administradores WHERE codigo_admi='$codigoNuevoAlum'";
    
    $result_estudiantes = mysqli_query($conn, $query_estudiantes);
    $result_docentes = mysqli_query($conn, $query_docentes);
    $result_administradores = mysqli_query($conn, $query_administradores);

    $resultCheckEstudiantes = mysqli_num_rows($result_estudiantes);
    $resultCheckDocentes = mysqli_num_rows($result_docentes);
    $resultCheckAdministradores = mysqli_num_rows($result_administradores);

    
    if(isset($_POST['submit_anadir_alumno'])){   
        echo "codigo:"."$codigoNuevoAlum";
        if  ($resultCheckEstudiantes > 0 || $resultCheckDocentes > 0 || $resultCheckAdministradores > 0) {
          echo "ese codigo ya existe en la base de datos, por favor indroduce otro codigo";
          header("Location:mensajes/mensaje5.php");
        } else {
          if ($valor == "si") {
            //echo "es estudiante";
            $query1 = "INSERT INTO estudiantes VALUES('$codigoNuevoAlum',default,default)"; 
            if (mysqli_query($conn, $query1)) {
              echo "si se puedo añadir al estudiante";
              header("Location:mensajes/mensaje2.php");
            } else {
                echo "no se pudo añadir al estudiante porque ya existe en la base de datos";
            }
          } else if ($valor == "no"){
            //echo "es docente";
            $query2 = "INSERT INTO docentes VALUES('$codigoNuevoAlum',default,default)"; 
            if (mysqli_query($conn, $query2)) {
              echo "si se puedo añadir al docente";
              header("Location:mensajes/mensaje3.php");
            } else {
                echo "no se pudo añadir al docente porque ya existe en la base de datos";
            }
          }
        }

    } else {
      echo "no entra";
    }
?>