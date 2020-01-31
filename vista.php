<?php
include('dbconnect.php');
if(!empty($_GET['id'])){
    //Extraer imagen de la BD mediante GET
    $query = "SELECT imagenes FROM universidades WHERE id = {$_GET['id']}";
    $result = mysqli_query($conn, $query);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        $imgDatos = mysqli_fetch_assoc($result);
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['imagenes']; 
    }else{
        echo 'Imagen no existe...';
    }
} else {
    echo "errrrror";
}
/*if(!empty($_GET['id'])){
    //Extraer imagen de la BD mediante GET
    $query = "SELECT imagenes FROM prueba4 WHERE id = {$_GET['id']}";
    $result = mysqli_query($conn, $query);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        $imgDatos = mysqli_fetch_assoc($result);
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['imagenes']; 
    }else{
        echo 'Imagen no existe...';
    }
} else {
    echo "errrrror";
}*/
?>