<?php
    //add dbconnect
    include ('dbconnect.php');

    $codigo = $_POST['codigo'];
    $campus = $_POST['campus_select'];

    $query_estudiantes = "SELECT * FROM estudiantes WHERE codigo_estudiante='$codigo'";
    $query_docentes = "SELECT * FROM docentes WHERE codigo_docente='$codigo'";
    $query_administradores = "SELECT * FROM administradores WHERE codigo_admi='$codigo'";

    $result_estudiantes = mysqli_query($conn, $query_estudiantes);
    $result_docentes = mysqli_query($conn, $query_docentes);
    $result_administradores = mysqli_query($conn, $query_administradores);

    $resultCheckEstudiantes = mysqli_num_rows($result_estudiantes);
    $resultCheckDocentes = mysqli_num_rows($result_docentes);
    $resultCheckAdministradores = mysqli_num_rows($result_administradores);
    
    $query1 = "SELECT codigo_admi from administradores where codigo_admi='$codigo'";
    $result = mysqli_query($conn, $query1);
    $resultCheck = mysqli_num_rows($result);

    $query3 = "SELECT codigo_estudiante from estudiantes  where codigo_estudiante='$codigo'";
    $result3 = mysqli_query($conn, $query3);
    $resultCheck3 = mysqli_num_rows($result3);

    $query4 = "SELECT codigo_docente from docentes  where codigo_docente='$codigo'";
    $result4 = mysqli_query($conn, $query4);
    $resultCheck4 = mysqli_num_rows($result4);


    if(isset($_POST['submit_index'])){
        if  ($resultCheckEstudiantes > 0  ) {
            echo "eres estudiante";
            if ($campus === 'option1') {
                if  ($resultCheck3 > 0) {
                    $queryEstudiante = "UPDATE estudiantes SET campus='1' WHERE codigo_estudiante='$codigo';";
                    if (mysqli_query($conn, $queryEstudiante)) {
                        echo "estas logueado con La Paz";
                        header("Location:mostrarContenidos.php?id=$codigo");
                    } else {
                        echo "no puedes acceder";
                    }
                    
                }  
            } else if ($campus === 'option2') {
                if  ($resultCheck3 > 0) {
                    $queryEstudiante = "UPDATE estudiantes SET campus='2' WHERE codigo_estudiante='$codigo';";
                    if (mysqli_query($conn, $queryEstudiante)) {
                        echo "estas logueado con Cochabamba";
                        header("Location:mostrarContenidos.php");
                    } else {
                        echo "no puedes acceder";
                    }
                }
            } else {
                if  ($resultCheck3 > 0) {
                    $queryEstudiante = "UPDATE estudiantes SET campus='3' WHERE codigo_estudiante='$codigo';";
                    if (mysqli_query($conn, $queryEstudiante)) {
                        echo "estas logueado con Santa Cruz";
                        header("Location:mostrarContenidos.php");
                    } else {
                        echo "no puedes acceder";
                    }
                }
            }
        } else if($resultCheckDocentes > 0){
            echo "eres docente";
            if ($campus === 'option1') {
                if  ($resultCheck4 > 0) {
                    $queryDocente = "UPDATE docentes SET campus='1' WHERE codigo_docente='$codigo';";
                    if (mysqli_query($conn, $queryDocente)) {
                        echo "estas logueado con La Paz";
                        header("Location:mostrarContenidos.php");
                    } else {
                        echo "no puedes acceder";
                    }
                    
                }  
            } else if ($campus === 'option2') {
                if  ($resultCheck4 > 0) {
                    $queryDocente = "UPDATE docentes SET campus='2' WHERE codigo_docente='$codigo';";
                    if (mysqli_query($conn, $queryDocente)) {
                        echo "estas logueado con Cochabamba";
                        header("Location:mostrarContenidos.php");
                    } else {
                        echo "no puedes acceder";
                    }
                }
            } else {
                if  ($resultCheck4 > 0) {
                    $queryDocente = "UPDATE docentes SET campus='3' WHERE codigo_docente='$codigo';";
                    if (mysqli_query($conn, $queryDocente)) {
                        echo "estas logueado con Santa Cruz";
                        header("Location:mostrarContenidos.php");
                    } else {
                        echo "no puedes acceder";
                    }
                }
            }
        }else if ($resultCheckAdministradores > 0){
            echo "eres administrador";
            if ($campus === 'option1') {
                if  ($resultCheck > 0) {
                    $query2 = "UPDATE administradores SET campus='1' WHERE codigo_admi='$codigo';";
                    if (mysqli_query($conn, $query2)) {
                        echo "estas logueado con La Paz";
                        header("Location:login.php");
                    } else {
                        echo "no puedes acceder";
                    }
                    
                }  
            } else if ($campus === 'option2') {
                if  ($resultCheck > 0) {
                    $query2 = "UPDATE administradores SET campus='2' WHERE codigo_admi='$codigo';";
                    if (mysqli_query($conn, $query2)) {
                        echo "estas logueado con Cochabamba";
                        header("Location:login.php");
                    } else {
                        echo "no puedes acceder";
                    }
                }
            } else {
                if  ($resultCheck > 0) {
                    $query2 = "UPDATE administradores SET campus='3' WHERE codigo_admi='$codigo';";
                    if (mysqli_query($conn, $query2)) {
                        echo "estas logueado con Santa Cruz";
                        header("Location:login.php");
                    } else {
                        echo "no puedes acceder";
                    }
                }
            }
        } else {
            echo "no estas en la base de datos";
            header("Location:mensajes/mensaje8.php");
        }
          
        
    }
 

    mysqli_close($conn);
?>