<?php
$pais = $_GET['pais'];
$nombre_u = $_GET['conv'];
$estudiante = $_GET['user'];
$link = $_GET['link'];
$ciudad = $_GET['ciudad'];
$campus = $_GET['campus'];

include('dbconnect.php');

echo "el usuario es: ".$estudiante."</br>";
echo "el campus es: ".$campus."</br>";
echo "el ciudad es: ".$ciudad."</br>";
echo "el nombre es: ".$nombre_u."</br>";
echo "el pais es: ".$pais."</br>";
echo "el link es: ".$link."</br>";
//header('Location: "$link"');

$query = "INSERT INTO reportesestudiantes(codigo_estudiante,campus,ciudad,nombre_universidad,pais,fecha,hora) VALUES('$estudiante','$campus','$ciudad','$nombre_u', '$pais', curDate(),curTime());";
if (mysqli_query($conn, $query)) {
    echo "se añadio"; 
    header("Location: $link");
} else {
    echo "error";
}


?>