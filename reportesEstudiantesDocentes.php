<?php
include('dbconnect.php');

$fecha1 = $_POST['fecha1'];
$fecha2 = $_POST['fecha2']; 
$valor = $_POST['reportesEstuDoce'];

if(isset($_POST['generar_reporte'])){  
    /*--------------------------------REPORTE ESTUDIANTES-------------------------------------------*/
    if ($valor=="reporteEst") {
        //NOMBRE DEL ARCHIVO
        header('Content-Type:text/csv; charset=latin1');
        header('Content-Disposition: attachment; filename="Reporte_Estudiantes.csv"');
        //SALIDA DEL ARCHIVO
        $salida = fopen('php://output', 'w');
        //ENCABEZADOS
        $header = array(
            "Estudiante", 
            "Campus",
            "Ciudad", 
            "Nombre de Universidad o Instituto", 
            "Pais", 
            "Fecha de ingreso",
            "Hora"
        );
        $header = array_map("utf8_decode", $header);
        fputcsv($salida,$header,';');
        
        $query = "SELECT * FROM reportesestudiantes WHERE fecha BETWEEN '$fecha1' and '$fecha2'";
        
        $reporteCSV = mysqli_query($conn, $query);
        $resultreporteCSV = mysqli_num_rows($reporteCSV);
        if  ($resultreporteCSV > 0){
            if ($reporteCSV) {
                while($filaR =  mysqli_fetch_assoc($reporteCSV)){
                    $tmp = array(
                        $filaR['codigo_estudiante'],
                        utf8_decode($filaR['campus']),
                        $filaR['ciudad'],
                        utf8_decode($filaR['nombre_universidad']),
                        utf8_decode($filaR['pais']),
                        $filaR['fecha'],
                        $filaR['hora']
                    );
                    fputcsv($salida,$tmp,';');
                }
            } else {
                header("Location:mensajes/mensaje14.php");
            }
        } else {
            header("Location:mensajes/mensaje14.php");
        }
    /*--------------------------------REPORTE DOCENTES-------------------------------------------*/
    } else if ($valor == "reporteDoc") {
        //NOMBRE DEL ARCHIVO
        header('Content-Type:text/csv; charset=latin1');
        header('Content-Disposition: attachment; filename="Reporte_Docentes.csv"');
        //SALIDA DEL ARCHIVO
        $salida = fopen('php://output', 'w');
        //ENCABEZADOS
        $header = array(
            "Docente", 
            "Campus",
            "Ciudad", 
            "Nombre de Universidad o Instituto", 
            "Pais", 
            "Fecha de ingreso",
            "Hora"
        );
        $header = array_map("utf8_decode", $header);
        fputcsv($salida,$header,';');
        
        $query = "SELECT * FROM reportesdocentes WHERE fecha BETWEEN '$fecha1' and '$fecha2'";
        
        $reporteCSV = mysqli_query($conn, $query);
        $resultreporteCSV = mysqli_num_rows($reporteCSV);
        if  ($resultreporteCSV > 0){
            if ($reporteCSV) {
                while($filaR =  mysqli_fetch_assoc($reporteCSV)){
                    $tmp = array(
                        $filaR['codigo_docente'],
                        utf8_decode($filaR['campus']),
                        $filaR['ciudad'],
                        utf8_decode($filaR['nombre_universidad']),
                        utf8_decode($filaR['pais']),
                        $filaR['fecha'],
                        $filaR['hora']
                    );
                    fputcsv($salida,$tmp,';');
                }
            } else {
                echo "error xd";
            }
        } else {
            header("Location:mensajes/mensaje14.php");
        }
        
    } else if ($valor== "reporteEstDoc"){
        //NOMBRE DEL ARCHIVO
        header('Content-Type:text/csv; charset=latin1');
        header('Content-Disposition: attachment; filename="Reporte_Estudiantes_y_Docentes.csv"');
        //SALIDA DEL ARCHIVO
        $salida = fopen('php://output', 'w');
        //ENCABEZADOS
        $header = array(
            "Código",
            "Ocupación", 
            "Campus",
            "Ciudad", 
            "Nombre de Universidad o Instituto", 
            "Pais", 
            "Fecha de ingreso",
            "Hora"
        );
        $header = array_map("utf8_decode", $header);
        fputcsv($salida,$header,';');
        
        $query = "SELECT * FROM reportesambos WHERE fecha BETWEEN '$fecha1' and '$fecha2'";
        
        $reporteCSV = mysqli_query($conn, $query);
        $resultreporteCSV = mysqli_num_rows($reporteCSV);
        if  ($resultreporteCSV > 0){
            if ($reporteCSV) {
                while($filaR =  mysqli_fetch_assoc($reporteCSV)){
                    $tmp = array(
                        $filaR['codigo'],
                        $filaR['ocupacion'],
                        utf8_decode($filaR['campus']),
                        $filaR['ciudad'],
                        utf8_decode($filaR['nombre_universidad']),
                        utf8_decode($filaR['pais']),
                        $filaR['fecha'],
                        $filaR['hora']
                    );
                    fputcsv($salida,$tmp,';');
                }
            } else {
                echo "error xd";
            }
        } else {
            header("Location:mensajes/mensaje14.php");
        }
    } else {
        echo "no se puede generar el reporte";
    }
    
    

} else {
    echo "error";
}
?>