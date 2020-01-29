<?php
include('dbconnect.php');


if(isset($_POST['generar_reporte_universidades'])){  
    
    //NOMBRE DEL ARCHIVO
    header('Content-Type:text/csv; charset=latin1');
    header('Content-Disposition: attachment; filename="Reporte_Universidades.csv"');
    //SALIDA DEL ARCHIVO
    $salida = fopen('php://output', 'w');
    //ENCABEZADOS
    $header = array(
        "País", 
        "Nombre de Universidad o Instituto",
        "Fecha de firma de convenio", 
        "Fecha habilitada",
        "Fecha vencimiento",
        "Descripción"
    );
    $header = array_map("utf8_decode", $header);
    fputcsv($salida,$header,';');
    
    //fputcsv($salida,$tmp,';');
    /*fputcsv($salida, array("ID Alumno", "Nombre", "Carrera", "Fecha de Ingreso"));*/
    //QUERY PARA CREAR EL REPORTE
    $query = "SELECT * FROM universidades ORDER BY pais";
    
    $reporteCSV = mysqli_query($conn, $query);

    if ($reporteCSV) {
        while($filaR =  mysqli_fetch_assoc($reporteCSV)){
            $tmp = array(
                utf8_decode($filaR['pais']),
                utf8_decode($filaR['nombre']),
                $filaR['fecha_firma_convenio'],
                $filaR['fecha_habilitada'],
                $filaR['fecha_vencimiento'],
                utf8_decode($filaR['descripcion'])
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