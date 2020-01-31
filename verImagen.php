<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
    
    
    <script language="JavaScript" type="text/javascript" src="js/custom.js"></script>
    <title>contenido de convenios</title>
  </head>
  <body>
  <?php
      // add dbconnection
      include('dbconnect.php');

      //create query
      $query = "SELECT * FROM prueba4";
      $result = mysqli_query($conn, $query);
    ?>
  <div class="main">
    <h1>Mostrando imagen almacenada en MySQL</h1>
    <?php
                while($row = mysqli_fetch_assoc($result)){
                  
              ?>
    <div class="container">
        <div class="row">
            <label class="col-6">Nombre:</label>
            <div class="col-6">
                <?php echo $row['nombre']; $col = 2;?>
            </div>
             
            <label class="col-6">Carrera:</label>
            <div class="col-6">
                <?php echo $row['carrera']; ?>
            </div>
             
            <label class="col-6 ">Fecha de ingreso:</label>
            <div class="col-6">
                <?php echo $row['fecha']; ?>
            </div>
            
            <label class="col-6 ">Imagen:</label>
            <div class="col-6">
                <?php $new = 2 ?>
                <img src="vista.php?id=<?php echo $row['id']; ?>" width="300" height="300"/> 
            </div>
            
        </div> 
    </div>
    <?php
                }
    ?>
 </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>