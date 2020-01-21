<?php
    //include('dbconnect.php');
    include('dbconnect.php');
    $id = $_GET['id_universidad'];
    $nombre = $_GET['nombre'];
    $pais = $_GET['pais'];
    $fecha_firma_convenio = $GET['fecha_firma_convenio'];
    $fecha_habilitada = $GET['fecha_habilitada'];
    $fecha_vencimiento = $GET['fecha_vencimiento'];
    $descripcion = $GET['descripcion'];
    $enlace = $_GET['enlace'];

    //create query
    $query = "UPDATE universidades SET nombre='$nombre' , fecha_firma_convenio='$fecha_firma_convenio', fecha_habilitada='$fecha_habilitada', fecha_vencimiento='$fecha_vencimiento', descripcion='$descripcion', enlace_de_interes='$enlace'  WHERE id_universidad='$id'";

    if (mysqli_query($conn, $query)) {
        echo "Nombre: ".$nombre."</br>";
        echo "fecha_firma_convenio: ".$fecha_firma_convenio."</br>";
        echo "fecha_habilitada: ".$fecha_habilitada."</br>";
        echo "fecha_vencimiento: ".$fecha_vencimiento."</br>";
        echo "descripcion: ".$descripcion."</br>";
        echo "enlace: ".$enlace."</br>";
    } else {
        echo "Error in your query";
    }

    mysqli_close($conn);

?>