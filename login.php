<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/login.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <title>contenido de convenios</title>
  </head>
  <body>
    <div class="container">
    
      <!-- Bienvenido-->
      <h2>Bienvenido a la página oficial de contenidos de convenios de la Universidad Privada Boliviana</h2>
    
    <!--LOGIN-->
    <div class="text-center"> <!------TEXT CENTER------->
      <h4 class="bienvenido" font-size="50px">Usted se encuentra en modo ADMINISTRADOR</h4>
      <form role="form" action="controlConvenios.php" method="post">
        <div class="container"><!--COMIENZA CONTAINER-->
          <div class="card border-light mb-3 border-light" style="max-width: 25rem;">
            <div class="card-header text-left ">Código:</div>
            <div class="card-body" style="margin-bottom: -20px; margin-top: -10px;">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                    <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:#7c6c35"></i><i class="fas fa-user-secret fa-stack-1x fa-inverse"></i></span>
                  </div>
                  <div class="col-md-9">
                    <input style="margin-top: 10px;" type="text" name="codigoAdmin" id="codigoAdmin" maxlength="5" class="form-control input-lg" placeholder="ingrese codigo" title="máximo 5 numeros" required pattern="[0-9]+" required>
                  </div>
                </div> <!--ACABA ROW-->
              </div><!--ACABA FORM-GROUP-->
            </div><!--ACABA CARD-BODY-->
            </div>
          </div><!--ACABA CARD BORDER-->

          <div class="card border-light mb-3 border-light" style="max-width: 25rem;">
            <div class="card-header text-left ">Contraseña:</div>
            <div class="card-body" style="margin-bottom: -20px; margin-top: -10px;">
              <div class="form-group" >
                <div class="row">
                  <div class="col-md-3">
                    <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:#7c6c35"></i><i class="fas fa-lock fa-stack-1x fa-inverse"></i></span>
                  </div>
                  <div class="col-md-9">
                    <input style="margin-top: 10px;" type="password" name="contrasenaAdmin" id="contrasenaAdmin" class="form-control input-lg" placeholder="ingrese contraseña" required>
                  </div>
                </div> <!--ACABA ROW-->
              </div><!--ACABA FORM-GROUP-->
            </div><!--ACABA CARD-BODY-->
            </div>
          </div><!--ACABA CARD BORDER-->            
          
          <button type="submit" class="btn boton-circle">Ingresar</button>
        
        </div><!--ACABA CONTAINER-->
      </form>
    </div> <!------ACABA TEXT CENTER------->
  
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>