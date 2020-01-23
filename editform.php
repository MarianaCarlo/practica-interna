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
    <link href="css/toastr.css" rel="stylesheet" >
    <!--JS-->
    <script src="js/toast_script.js"></script>
    <script src="js/toastr.js"></script>
    <title>Contenido de convenios</title>
  </head>
  <body>


  <?php
  
    $id = $_GET['id'];
    //echo $id;
    
    //dbconnect.php
    include('dbconnect.php');

    //create query 
    $query = "SELECT * FROM universidades WHERE id_universidad = '$id'";
    $result =  mysqli_query($conn, $query);

  ?>
  
    <!--EDIT FORM-->
    <div class="container" >
            <form role="form" action="edit.php" method="get">
              <?php
              //Esto muestra el actual
              while($row = mysqli_fetch_assoc($result)){
                /*echo "Titulo: ".$row['book_tittle'];
                echo "</br>";
                echo "Precio: ".$row['book_price'];*/
              
              
              ?>
              
              <input type="hidden" name="id" value="<?php echo $row['id_universidad'] ?>">
              <!--NOMBRE DE LA UNIVERSIDAD-->
              <div class ="card border-success" style="margin-top:20px; max-width: 50rem; margin-left:150px;padding-right:20px;">
              <div class="form-group">
                <label>Nombre:</label>
                <input style="margin-top:10px;margin-left:10px;margin-right:10px;margin-bottom:10px;" type="text" name="nombre" class="form-control" value="<?php echo $row['nombre'] ?>" >
              </div>
              </div>
              <!--PAIS-->
              <div class ="card border-success" style="margin-top:20px; max-width: 50rem; margin-left:150px;padding-right:20px;">
              <div class="form-group">
                <label>Pais</label>
              </br>
              <input style="margin-top:10px;margin-left:10px;margin-right:10px;margin-bottom:10px;" type="text" name="pais" class="form-control" value="<?php echo $row['pais'] ?>" required readonly>
              </div>
              </div>
              <!--FECHA DE FIRMA DE CONVENIO-->
              <div class ="card border-success" style="margin-top:20px; max-width: 50rem; margin-left:150px;padding-right:20px;">
              <div class="form-group">
                <label>Fecha de firma de convenio:</label>
                <input style="margin-top:10px;margin-left:10px;margin-right:10px;margin-bottom:10px;" type="date" name="fecha_firma_convenio" class="form-control" value="<?php echo $row['fecha_firma_convenio'] ?>" >
              </div>
              </div>
              <!--FECHA DE HABILITADA-->
              <div class ="card border-success" style="margin-top:20px; max-width: 50rem; margin-left:150px;padding-right:20px;">
              <div class="form-group">
                <label>Fecha desde que está habilitada:</label>
                <input style="margin-top:10px;margin-left:10px;margin-right:10px;margin-bottom:10px;" class="form-control input-lg" name="fecha_habilitada" type="date" value="<?php echo $row['fecha_habilitada'] ?>" id="date-input">
              </div>
              </div>
              <!--FECHA DE VENCIMIENTO-->
              <div class ="card border-success" style="margin-top:20px; max-width: 50rem; margin-left:150px;padding-right:20px;">
              <div class="form-group">
                <label>Fecha de vencimiento:</label>
                <input style="margin-top:10px;margin-left:10px;margin-right:10px;margin-bottom:10px;" class="form-control input-lg" name="fecha_vencimiento" type="date" value="<?php echo $row['fecha_vencimiento'] ?>" id="date-input">
              </div>
              </div>
              <!--DESCRIPCION-->
              <div class ="card border-success" style="margin-top:20px; max-width: 50rem; margin-left:150px;padding-right:20px;">
              <div class="form-group">
                <label>descripción:</label>
                <input style="margin-top:10px;margin-left:10px;margin-right:10px;margin-bottom:10px;" type="text" name="desc" class="form-control" value="<?php echo $row['descripcion'] ?>" >
              </div>
              </div>
              <!--ENLACES DE INTERES-->
              <div class ="card border-success" style="margin-top:20px; max-width: 50rem; margin-left:150px;padding-right:20px;">
              <div class="form-group">
                <label>Enlace de interes:</label>
                <input style="margin-top:10px;margin-left:5px;margin-right:5px;margin-bottom:10px;" name="enlace" class="form-control" value="<?php echo $row['enlace_de_interes'] ?>" required></input>
              </div>
              </div>
              </br>
              <button name="submit_update_uni" type="submit" style="margin-left:500px;" class="btn boton-circle">Edit</button>
                <?php
                }
                mysqli_close($conn);
                ?>
            </form>
          </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>