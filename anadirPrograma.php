<?php
    
    include('dbconnect.php');
    $programa = $_POST['nombrePrograma'];
    
    //create query for validation estudiantes,docentes,administradores
    $query = "INSERT INTO programas(nombre_programa) VALUES('$programa')";

    
    if(isset($_POST['submit_anadir_programa'])){   
        echo "programa:"."$programa";
        if (mysqli_query($conn, $query)) {
            echo "se añadio el programa";  
            header("Location:mensajes/mensaje6.php");       
        } else {
            echo "no se puedo añadir el programa";
        }
        

    } else {
      echo "no entra";
    }
?>