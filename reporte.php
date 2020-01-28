<?php
include('dbconnect.php');

$fecha1 = $_POST['fecha1'];
$fecha2 = $_POST['fecha2']; 


if(isset($_POST['generar_reporte'])){  
    
    //NOMBRE DEL ARCHIVO
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition: attachment; filename="Reporte_fechas.csv"');
    //SALIDA DEL ARCHIVO
    $salida = fopen('php://output', 'w');
    //ENCABEZADOS
    $header = array(
        "ID Alumno", 
        "Nombre", 
        "Carrera", 
        "Fecha de Ingreso"
    );
    $header = array_map("utf8_decode", $header);
    fputcsv($salida,$header,';');
    
    //fputcsv($salida,$tmp,';');
    /*fputcsv($salida, array("ID Alumno", "Nombre", "Carrera", "Fecha de Ingreso"));*/
    //QUERY PARA CREAR EL REPORTE
    $query = "SELECT * FROM prueba3 WHERE fecha_ingreso BETWEEN '$fecha1' and '$fecha2'";
    
    $reporteCSV = mysqli_query($conn, $query);

    if ($reporteCSV) {
        while($filaR =  mysqli_fetch_assoc($reporteCSV)){
            $tmp = array(
                $filaR['id_alumno'],
                $filaR['nombre'],
                $filaR['carrera'],
                $filaR['fecha_ingreso'],
            );
            fputcsv($salida,$tmp,';');
        }
    } else {
        echo "error xd";
    }
    

} else {
    echo "error";
}
?>