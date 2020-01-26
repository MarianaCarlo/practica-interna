<?php
    $id = $_GET['id'];
    $campus = $_GET['campus'];
    $ciudad = $_GET['ciudad'];
    include('dbconnect');

    echo "esta bien";
    echo "el codigo es: ".$id."</br>";
    echo "el campus seleccionado es: ".$campus."</br>";
    echo "el pais es: ".$ciudad;
?>