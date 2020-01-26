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
    <link href="css/index.css" rel="stylesheet" >
    <!--JS-->
    <script type="text/javascript">
        history.pushState(null, null, location.href);
        history.back();
        history.forward();
        window.onpopstate = function () { history.go(1); };
    </script>
    <script language="JavaScript" type="text/javascript" src="js/custom.js"></script>
    <title>contenido de convenios</title>
  </head>
  <body  onunload="">

    <div class="container"><!---------------CONTAINER PARA CAROUSEL----------->
      <!--SLIDER CAROUSEL-->
        <div class="container text-center">
          <div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
            <ol class="carousel-indicators">
              <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
              <li data-target="#mycarousel" data-slide-to="1"></li>
              <li data-target="#mycarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/slide1.png">
                <div class="carousel-caption"></div>
              </div>
              <div class="carousel-item"> 
                <img src="img/slide2.png"> 
                <div class="carousel-caption"></div>
              </div>
              <div class="carousel-item"> 
                <img src="img/slide3.png"> 
                <div class="carousel-caption"></div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div> 
          <!-- Bienvenido-->
          <h4>Bienvenido a la página oficial de contenidos de convenios de la Universidad Privada Boliviana</h4>
          <h6>.</h6>
      </div> <!-------------------ACABA CONTAINER PARA CAROUSEL------------------------>
      
      <!------LOGIN-------->
      <div class="text-center"> <!------TEXT CENTER------->
        <form role="form" action="validacion.php" method="post">
          <div class="container"><!--COMIENZA CONTAINER-->
            <div class="card border-light mb-3 border-light" style="max-width: 25rem;">
              <div class="card-header text-left font-weight-bold" style="font-size: 4.7mm;">Código:</div>
              <div class="card-body" style="margin-bottom: -20px; margin-top: -10px;">
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color: black"></i><i class="fas fa-user fa-stack-1x fa-inverse"></i></span>
                    </div>
                    <div class="col-md-9">
                      <input style="margin-top: 10px;" type="text" name="codigo" id="codigo" maxlength="5" class="form-control input-lg" placeholder="Ingrese código" title="Máximo 5 números" required pattern="[0-9]+" required>
                    </div>
                  </div> <!--ACABA ROW-->
                </div><!--ACABA FORM-GROUP-->
              </div><!--ACABA CARD-BODY-->
              </div>
            </div><!--ACABA CARD BORDER-->

            <div class="card border-light mb-3 border-light" style="max-width: 25rem;">
              <div class="card-header text-left font-weight-bold" style="font-size: 4.7mm;">Campus:</div>
              <div class="card-body" style="margin-bottom: -20px; margin-top: -10px;">
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i class="fas fa-university fa-stack-1x fa-inverse"></i></span>
                    </div>
                    <div class="col-md-9">
                      <select name="campus_select" class="selectpicker" style="margin-top: 20px;">
                        <option title="LaPaz" value="option1" name="option1">Fernando Illanes de la Riva, La Paz</option>
                        <option title="Cochabamba" value="option2" name="option2">Julio León Prado, Cochabamba</option>
                        <option title="SantaCruz" value="option3" name="option3">Campus Santa Cruz</option>
                      </select>
                    </div>
                  </div> <!--ACABA ROW-->
                </div><!--ACABA FORM-GROUP-->
              </div><!--ACABA CARD-BODY-->
              </div>
            </div><!--ACABA CARD BORDER-->            
            
            <button type="submit" name="submit_index" class="btn boton-circle" style="margin-left:490px;">Ingresar</button>
          
          </div><!--ACABA CONTAINER-->
        </form>
          

      </div><!------ACABA TEXT CENTER------->
      
      
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>