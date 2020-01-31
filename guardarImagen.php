<?php
include('dbconnect.php');

$nombre = $_POST['nombre'];
$carrera = $_POST['carrera'];
$fecha = $_POST['fecha'];

if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        $query = "INSERT into prueba4 (nombre,carrera,fecha,imagenes) VALUES ('$nombre','$carrera','$fecha','$imgContenido')";
        if (mysqli_query($conn, $query)) {
            if($query){
                echo "Archivo Subido Correctamente.";
            }else{
                echo "Ha fallado la subida, reintente nuevamente.";
            } 
        }else {
            echo "mal";
            //echo "ddd: "."$query";
        }
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}
?>