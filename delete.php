<?php
    $bid = $_GET['id'];
    
    include('dbconnect.php');

    //create query
    $query = "DELETE FROM universidades WHERE id_universidad='$bid'";

    if (mysqli_query($conn, $query)) {
        //echo "record delete";
        //redirect to your page index.php
        echo "si se eliminó la universidad";
        header("Location:mensajes/mensaje12.php");
    } else {
        echo "error in your query".mysqli_error($conn);
    }

    mysqli_close($conn);
?>