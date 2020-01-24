<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--ALL-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js" data-semver="3.0.0" data-require="jquery"></script>
    <link rel="stylesheet" href="css/bootstrap-multiselect/bootstrap-multiselect.css" type="text/css">
    
    <!--FONT AWESOME ICONS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CSS-->
    <link href="css/admin.css" rel="stylesheet" >
    <link href="css/edit.css" rel="stylesheet" >
    <link href="css/toastr.css" rel="stylesheet" >
    <!--JS-->
    <script src="js/toast_script.js"></script>
    <script src="js/toastr.js"></script>
    <title>Contenido de convenios</title>
  </head>
  <?php
  
    $id = $_GET['id'];
    //echo $id;
    
    //dbconnect.php
    include('dbconnect.php');

    //create query 
    $query = "SELECT * FROM universidades WHERE id_universidad = '$id'";
    $result =  mysqli_query($conn, $query);

  ?>

  <body class="hm-gradient">
    
    <main>
        
        <!--MDB Forms-->
        <div class="container mt-4">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-12 mb-4">
                    <div class="card ripe-malinka-gradient">
                        <div class="card-body">
                            <!-- Form register -->
                            <form role="form" action="updateUniversidad.php" method="get">
                            <?php
                            //Esto muestra el actual
                            while($row = mysqli_fetch_assoc($result)){
                                /*echo "Titulo: ".$row['book_tittle'];
                                echo "</br>";
                                echo "Precio: ".$row['book_price'];*/
                            
                            
                            ?>
                            <input type="hidden" name="id" value="<?php echo $row['id_universidad'] ?>">
                                <h2 class="text-center font-up font-bold py-4 white-text">EDICIÓN DE UNIVERSIDADES/INSTITUTOS</h2>
                                <!--PRIMERA LINEA-->
                                <label style="color:white;">Nombre de Instituto/Universidad:</label><label style="margin-left:324px;color:white;">País:</label>
                                <div class="md-form w-100">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-university fa-stack-1x fa-inverse"></i></span>
                                        </div>
                                        <div class="col-md-5"> <!--nombre-->
                                            <input type="text" id="orangeForm-name2" class="form-control" style="margin-top:10px; color:black;" name="nombre" value="<?php echo $row['nombre'] ?>">
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                        </div>
                                        <div class="col-md-5"> <!--pais-->
                                            <input type="text" id="orangeForm-name2" class="form-control"style="margin-top:10px; color:black;" name="pais" value="<?php echo $row['pais'] ?>" required readonly>
                                        </div>
                                    </div>
                                </div>
                                </br>
                                <!--SEGUNDA LINEA-->
                                <label style="color:white;">Fecha de firma de convenio:</label><label style="margin-left:360px;color:white;">Fecha desde que está habilitada:</label>
                                <div class="md-form w-100">
                                    <div class="row">
                                        <div class="col-md-1"> 
                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-calendar-alt fa-stack-1x fa-inverse"></i></span>
                                        </div>
                                        <div class="col-md-5"> <!--fecha de firma de convenio-->
                                            <input type="date" id="orangeForm-name2" class="form-control" style="margin-top:10px; color:black;" name="fecha_firma_convenio" value="<?php echo $row['fecha_firma_convenio'] ?>">
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i style="color:#F5FFFA;" class="fas fa-calendar-check fa-stack-1x fa-inverse"></i></span>
                                        </div>
                                        <div class="col-md-5"> <!--fecha desde que está habilitada-->
                                            <input type="date" id="orangeForm-name2" class="form-control"style="margin-top:10px; color:black;" name="fecha_habilitada" value="<?php echo $row['fecha_habilitada'] ?>" id="date-input">
                                        </div>
                                    </div>
                                </div>
                                </br>
                                <!--TERCERA LINEA-->
                                <label style="color:white;">Fecha de vencimiento:</label><label style="margin-left:400px;color:white;">Decripción:</label>
                                <div class="md-form w-100">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-calendar-day fa-stack-1x fa-inverse"></i></span>
                                        </div>
                                        <div class="col-md-5"> <!--fecha de vencimiento-->
                                            <input type="date" id="orangeForm-name2" class="form-control" style="margin-top:10px; color:black;" name="fecha_vencimiento" value="<?php echo $row['fecha_vencimiento'] ?>" id="date-input">
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                        </div>
                                        <div class="col-md-5"> <!--fecha descripcion-->
                                            <input type="text" id="orangeForm-name2" class="form-control"style="margin-top:10px; color:black;" name="desc" value="<?php echo $row['descripcion'] ?>">
                                        </div>
                                    </div>
                                </div>
                                </br>
                                <!--CUARTA LINEA-->
                                <label style="color:white;">Programas:</label><label style="margin-left:480px;color:white;">Enlaces:</label>
                                <div class="md-form w-100">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                        </div>
                                        <div class="col-md-5"> <!--fecha programas-->
                                        <input type="text" id="orangeForm-name2" class="form-control"style="margin-top:10px; color:black;" name="programas" value="<?php echo $row['programas'] ?>" required></input>
                                        </div>
                                        
                                        <div class="col-md-1">
                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                        </div>
                                        <div class="col-md-5"> <!--enlaces-->
                                            <input type="text" id="orangeForm-name2" class="form-control"style="margin-top:10px; color:black;" name="enlace" value="<?php echo $row['enlace_de_interes'] ?>" required></input>
                                        </div>
                                    </div>
                                </div>


                                <div class="text-center">
                                    <button name="submit_update_uni" type="submit" class="btn boton-circle" style="margin-top:20px;">Actualizar</button>
                                </div>
                                <?php
                                }
                                mysqli_close($conn);
                                ?>
                            </form>
                            <!-- Form register -->
                        </div>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!--MDB Forms-->
      
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>