<?php
    //include('dbconnect.php');
    include('dbconnect.php');
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $pais = $_GET['pais'];
    $fecha_firma_convenio = $_GET['fecha_firma_convenio'];
    $fecha_habilitada = $_GET['fecha_habilitada'];
    $fecha_vencimiento = $_GET['fecha_vencimiento'];
    $enlace = $_GET['enlace'];
    $descripciones = $_GET['desc'];

    //create query
    $query = "UPDATE universidades SET nombre='$nombre' , fecha_firma_convenio='$fecha_firma_convenio', fecha_habilitada='$fecha_habilitada', fecha_vencimiento='$fecha_vencimiento', descripcion='$descripciones', enlace_de_interes='$enlace'  WHERE id_universidad='$id'";

    if (mysqli_query($conn, $query)) {
        if(isset($_GET['submit_update_uni'])){ 
            /*echo "id: ".$id."</br>"; 
            echo "Nombre: ".$nombre."</br>";
            echo "Pais: ".$pais."</br>";
            echo "fecha_firma_convenio: ".$fecha_firma_convenio."</br>";
            echo "fecha_habilitada: ".$fecha_habilitada."</br>";
            echo "fecha_vencimiento: ".$fecha_vencimiento."</br>";
            echo "enlace: ".$enlace."</br>";
            echo "descr: ".$descripciones."</br>";*/
            echo "si se pudo actulizar ";
            header("Location:mensajes/mensaje10.php");      
        } else {
            echo "no se pudo actualizar el convenio";
            header("Location:mensajes/mensaje11.php");      
        }
    } else {
        echo "Error in your query";
    }

    mysqli_close($conn);

?>