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
    <link href="css/mostrarContenidos.css" rel="stylesheet">
    <link href="css/radiobutton.css" rel="stylesheet" >
    <link href="css/toastr.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>
    <!--JS-->
    <script src="js/toast_script.js"></script>
    <script src="js/toastr.js"></script>
    <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
    <script type="text/javascript">
        history.pushState(null, null, location.href);
        history.back();
        history.forward();
        window.onpopstate = function () { history.go(1); };
    </script>
    <title>contenido de convenios</title>
  </head>
  <body>

  <?php
    //$idAdmin = $_GET['codigo'];
    //add dbconnect
    $id = $_GET['id'];
    $campus = $_GET['campus'];
    $ciudad = $_GET['ciudad'];
    include ('dbconnect.php');
    
    $code = $_POST['codigo'];
    
    $query = "SELECT codigo_admi from administradores where codigo_admi='$codigoAdmin' and contrasena='$contrasenaAdmin'";
    $query2 = "SELECT * from administradores where codigo_admi='$codigoAdmin'";
    $query3 = "SELECT * from administradores where codigo_admi='$code'";
    

    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query2);
    $result3 = mysqli_query($conn, $query3);

    /*Verificacion de si ese codigo esta en la base de datos*/ 
    $resultCheck = mysqli_num_rows($result);
    $codigodeladmin = 0;
    $nombreAdmi = null;
    $contAdmi = null;
    $cam = 0;
    /*if  ($resultCheck > 0) {
      while ($row = $result2 -> fetch_row()) {
        $codigodeladmin = $row[0];
        $nombreAdmi = $row[1];
        $contAdmi = $row[2];
        $cam = $row[3];
      } */ 
      
  ?>
    <div class="container">
      <div class="text-center">
      <div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators">
              <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
              <li data-target="#mycarousel" data-slide-to="1"></li>
              <li data-target="#mycarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/title.png">
                <div class="carousel-caption"></div>
              </div>
              <div class="carousel-item"> 
                <img src="img/slide2Est.jpg"> 
                <div class="carousel-caption"></div>
              </div>
              <div class="carousel-item"> 
                <img src="img/slide3Est.png"> 
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
      </div>
    </div>

    <div class="pos-f-t">  <!------COMIENZA POST-F-T------->  
      <div class="vertical-tab"> <!------COMIENZA VERTICAL-TAB------->  
        <ul class="nav nav-tab" role="tablist"> <!--COMIENZA NAV NAV-TAB-->
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#pag5" role="tab" >INFORMACIÓN</a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#pag7" role="tab" >POR UNIVERSIDAD/INSTITUCIÓN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#pag8" role="tab" >POR PAÍS</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#pag9" role="tab" >POR CONTINENTE</a>
          </li>
          
        </ul> <!--ACABA NAV NAV-TAB-->
        <div class="tab-content"> <!--COMIENZA TAB-CONTENT-->
          <div class="tab-pane active" id="pag5" role="tabpanel"> <!--COMIENZA TAB-PANE PAG5-->
            <div class="sv-tab-panel titulo-por-universidad" style="margin-top:20px;">
                <div class="card border-dark" id="formularioEst" style="width: 72rem;"> <!--COMIENZA CARD BORDER-DARK-->
                    <div class="card-body "> <!--COMIENZA CARD-BODY-->
                    <div class="text-center">Bienvenido <?php echo "$id";?> del campus <?php echo "$campus";?> a la página de contenidos de convenios del Departamento de Internacionalización:</div>
                        <div class="texto-introducir-codigo">
                            En ésta página encontrarás los diferentes convenios que la Universidad Privada Bolivana te ofrece, ya 
                            seas estudiante o docente, te podrás informar sobre los programas que cada Universidad o Instituto te ofrece como ser:
                            <div><i class="fas fa-circle" style="color:#FE4164;"></i>Intercambio de estudiantes</div>
                            <div><i class="fas fa-circle" style="color:#FE4164;"></i>Intercambio de docentes</div>
                            <div><i class="fas fa-circle" style="color:#FE4164;"></i>Colaboración en investigaciones</div>
                            <div><i class="fas fa-circle" style="color:#FE4164;"></i>Proyectos académicos</div>
                            <div><i class="fas fa-circle" style="color:#FE4164;"></i>Y muchos más</div>
                        </div>
                        
                        
                    </div>
                </div>
                <a href = "logout.php" tite = "Logout" style="margin-left: 520px;" class="btn boton-anadir-admin" aria-pressed="true">Salir</a>
            </div>
          </div> <!--ACABA TAB-PANE PAG5-->
              
          
          
          <!--TAB 7 POR UNIVERSIDAD / INSTITUCION -->
          <div class="tab-pane" id="pag7" role="tabpanel"> <!--COMIENZA TAB-PANE POR UNIVERSIDAD / INSTITUCION-->
            <div class="sv-tab-panel titulo-por-universidad">
              <?php
                // add dbconnection
                include('dbconnect.php');

                //create query
                $queryContinente22 = "SELECT * FROM universidades WHERE para_estudiantes=true;";
                $resultContinente22 = mysqli_query($conn, $queryContinente22);
              ?>
              <!-- Accordion -->
              <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                <div class="container" style="margin-top:50px;"> <!--COMIENZA CONTAINER-->
                  <div class="row"> <!--COMIENZA ROW-->
                    <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                        <?php while($rowresultContinente22 = mysqli_fetch_assoc($resultContinente22)){
                        
                        ?>
                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                            <!--PAISES-->
                            <div class="card"> <!--COMIENZA CARD-->
                              <div class="card-header" id="headingAngola6">				
                                  <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                  <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowresultContinente22['nombre']; ?></a>		  
                              </div>
                              <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                <div class="card-body" style="font-size: 4mm;">
                                  <!--PRIMERA LINEA-->
                                  <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                  <div class="row"> <!--COMIENZA ROW-->
                                    <div class="col-md-1">
                                      <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                    </div>
                                    <div class="col-md-5"> <!--PAIS-->
                                      <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowresultContinente22['pais']; ?></div>
                                    </div>
                                    <div class="col-md-1">
                                      <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                    </div>
                                    <div class="col-md-5"> <!--PROGRAMAS-->
                                    <div style="font-size: 5mm;"><?php echo $rowresultContinente22['programas']; ?></div>
                                    </div>
                                    <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                    <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                    <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                  </div> <!--ACABA ROW-->
                                  <!--SEGUNDA LINEA-->
                                  <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                  <div class="row"> <!--COMIENZA ROW-->
                                    <div class="col-md-1">
                                      <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                    </div>
                                    <div class="col-md-5"> <!--DESCRIPCION-->
                                      <div style="font-size: 5mm; "><?php echo $rowresultContinente22['descripcion']; ?></div>
                                    </div>
                                    <div class="col-md-1">
                                      <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                    </div>
                                    <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                    <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowresultContinente22['enlace_de_interes']."'>".$rowresultContinente22['enlace_de_interes']."</a>";?></div>
                                    </div>
                                    <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                    <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                    <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                  </div> <!--ACABA ROW-->
                                </div>
                              </div>
                            </div> <!--ACABA CARD-->
                        </div> <!--ACABA ACCORDION-->
                        <?php
                        }
                        mysqli_close($conn);
                        ?>
                                
                        
                    </div> <!--ACABA col-10 mx-auto-->	
                  </div> <!--ACABA ROW-->
                </div> <!--ACABA CONTAINER-->
              </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                <!-- .// Accordion -->
            </div>
          </div> <!--ACABA TAB-PANE POR UNIVERSIDAD / INSTITUCION-->
                  
          <!--TAB 8 POR PAIS-->
          <div class="tab-pane" id="pag8" role="tabpanel"> <!--COMIENZA TAB-PANE POR PAIS-->
            <div class="sv-tab-panel">
              <div class="titulo-por-universidad">Búsqueda A-Z</div>
              <!--LINKBAR-->
              <div class="posicion-letras-a-z">
                        <div class="container">
                          <div class="row">
                            <div class="col-xs-12 ">
                              <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                  <a class="nav-item nav-link active" id="nav-letter-a" data-toggle="tab" href="#nav-AA" role="tab" aria-selected="true">A</a>
                                  <a class="nav-item nav-link" id="nav-letter-bb" data-toggle="tab" href="#nav-BB" role="tab" aria-selected="false">B</a>
                                  <a class="nav-item nav-link" id="nav-letter-cc" data-toggle="tab" href="#nav-CC" role="tab" aria-selected="false">C</a>
                                  <a class="nav-item nav-link" id="nav-letter-dd" data-toggle="tab" href="#nav-DD" role="tab" aria-selected="false">D</a>
                                  <a class="nav-item nav-link" id="nav-letter-ee" data-toggle="tab" href="#nav-EE" role="tab" aria-selected="false">E</a>
                                  <a class="nav-item nav-link" id="nav-letter-ff" data-toggle="tab" href="#nav-FF" role="tab" aria-selected="false">F</a>
                                  <a class="nav-item nav-link" id="nav-letter-gg" data-toggle="tab" href="#nav-GG" role="tab" aria-selected="false">G</a>
                                  <a class="nav-item nav-link" id="nav-letter-hh" data-toggle="tab" href="#nav-HH" role="tab" aria-selected="false">H</a>
                                  <a class="nav-item nav-link" id="nav-letter-ii" data-toggle="tab" href="#nav-II" role="tab" aria-selected="false">I</a>
                                  <a class="nav-item nav-link" id="nav-letter-jj" data-toggle="tab" href="#nav-JJ" role="tab" aria-selected="false">J</a>
                                  <a class="nav-item nav-link" id="nav-letter-kk" data-toggle="tab" href="#nav-KK" role="tab" aria-selected="false">K</a>
                                  <a class="nav-item nav-link" id="nav-letter-ll" data-toggle="tab" href="#nav-LL" role="tab" aria-selected="false">L</a>
                                  <a class="nav-item nav-link" id="nav-letter-mm" data-toggle="tab" href="#nav-MM" role="tab" aria-selected="false">M</a>
                                  <a class="nav-item nav-link" id="nav-letter-nn" data-toggle="tab" href="#nav-NN" role="tab" aria-selected="false">N</a>
                                  <a class="nav-item nav-link" id="nav-letter-oo" data-toggle="tab" href="#nav-OO" role="tab" aria-selected="false">O</a>
                                  <a class="nav-item nav-link" id="nav-letter-pp" data-toggle="tab" href="#nav-PP" role="tab" aria-selected="false">P</a>
                                  <a class="nav-item nav-link" id="nav-letter-qq" data-toggle="tab" href="#nav-QQ" role="tab" aria-selected="false">Q</a>
                                  <a class="nav-item nav-link" id="nav-letter-rr" data-toggle="tab" href="#nav-RR" role="tab" aria-selected="false">R</a>
                                  <a class="nav-item nav-link" id="nav-letter-ss" data-toggle="tab" href="#nav-SS" role="tab" aria-selected="false">S</a>
                                  <a class="nav-item nav-link" id="nav-letter-tt" data-toggle="tab" href="#nav-TT" role="tab" aria-selected="false">T</a>
                                  <a class="nav-item nav-link" id="nav-letter-uu" data-toggle="tab" href="#nav-UU" role="tab" aria-selected="false">U</a>
                                  <a class="nav-item nav-link" id="nav-letter-vv" data-toggle="tab" href="#nav-VV" role="tab" aria-selected="false">V</a>
                                  <a class="nav-item nav-link" id="nav-letter-ww" data-toggle="tab" href="#nav-WW" role="tab" aria-selected="false">W</a>
                                  <a class="nav-item nav-link" id="nav-letter-xx" data-toggle="tab" href="#nav-XX" role="tab" aria-selected="false">X</a>
                                  <a class="nav-item nav-link" id="nav-letter-yy" data-toggle="tab" href="#nav-YY" role="tab" aria-selected="false">Y</a>
                                  <a class="nav-item nav-link" id="nav-letter-zz" data-toggle="tab" href="#nav-ZZ" role="tab" aria-selected="false">Z</a>
                                </div>
                              </nav>
                              <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane show active" id="nav-AA" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-a.png">
                                  <div class="titulo-por-universidad">Universidades A</div>
                                  <!-- Accordion A-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryA = "SELECT * FROM universidades WHERE pais like 'a%' and para_estudiantes=true;";
                                    $resultA = mysqli_query($conn, $queryA);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowA = mysqli_fetch_assoc($resultA)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowA['pais'] . " - ".$rowA['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowA['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowA['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowA['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowA['enlace_de_interes']."'>".$rowA['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-BB" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-b.png">
                                  <div class="titulo-por-universidad">Universidades B</div>
                                  <!-- Accordion B-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryB = "SELECT * FROM universidades WHERE pais like 'b%' and para_estudiantes=true;";
                                    $resultB = mysqli_query($conn, $queryB);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowB = mysqli_fetch_assoc($resultB)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowB['pais'] . " - ".$rowB['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowB['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowB['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowB['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowB['enlace_de_interes']."'>".$rowB['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->     
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-CC" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-c.png">
                                  <div class="titulo-por-universidad">Universidades C</div>
                                  <!-- Accordion C-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryC = "SELECT * FROM universidades WHERE pais like 'c%' and para_estudiantes=true;";
                                    $resultC = mysqli_query($conn, $queryC);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowC = mysqli_fetch_assoc($resultC)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowC['pais'] . " - ".$rowC['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowC['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowC['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowC['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowC['enlace_de_interes']."'>".$rowC['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-DD" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-d.png">
                                  <div class="titulo-por-universidad">Universidades D</div>
                                  <!-- Accordion D-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryD = "SELECT * FROM universidades WHERE pais like 'd%' and para_estudiantes=true;";
                                    $resultD = mysqli_query($conn, $queryD);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowD = mysqli_fetch_assoc($resultD)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowD['pais'] . " - ".$rowD['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                       <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowD['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowD['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowD['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowD['enlace_de_interes']."'>".$rowD['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->     
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-EE" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-e.png">
                                  <div class="titulo-por-universidad">Universidades E</div>
                                  <!-- Accordion E-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryE = "SELECT * FROM universidades WHERE pais like 'e%' and para_estudiantes=true;";
                                    $resultE = mysqli_query($conn, $queryE);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowE = mysqli_fetch_assoc($resultE)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowE['pais'] . " - ".$rowE['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowE['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowE['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowE['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowE['enlace_de_interes']."'>".$rowE['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->     
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-FF" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-f.png">
                                  <div class="titulo-por-universidad">Universidades F</div>
                                  <!-- Accordion F-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryF = "SELECT * FROM universidades WHERE pais like 'f%' and para_estudiantes=true;";
                                    $resultF = mysqli_query($conn, $queryF);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowF = mysqli_fetch_assoc($resultF)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowF['pais'] . " - ".$rowF['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowF['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowF['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowF['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowF['enlace_de_interes']."'>".$rowF['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->    
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-GG" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-g.png">
                                  <div class="titulo-por-universidad">Universidades G</div>
                                  <!-- Accordion G-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryG = "SELECT * FROM universidades WHERE pais like 'g%' and para_estudiantes=true;";
                                    $resultG = mysqli_query($conn, $queryG);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowG = mysqli_fetch_assoc($resultG)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowG['pais'] . " - ".$rowG['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowG['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowG['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowG['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowG['enlace_de_interes']."'>".$rowG['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->      
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-HH" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-h.png">
                                  <div class="titulo-por-universidad">Universidades H</div>
                                  <!-- Accordion H-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryH = "SELECT * FROM universidades WHERE pais like 'h%' and para_estudiantes=true;";
                                    $resultH = mysqli_query($conn, $queryH);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowH = mysqli_fetch_assoc($resultH)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowH['pais'] . " - ".$rowH['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowH['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowH['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowH['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowH['enlace_de_interes']."'>".$rowH['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->     
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-II" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-i.png">
                                  <div class="titulo-por-universidad">Universidades I</div>
                                  <!-- Accordion I-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryI = "SELECT * FROM universidades WHERE pais like 'i%' and para_estudiantes=true;";
                                    $resultI = mysqli_query($conn, $queryI);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowI = mysqli_fetch_assoc($resultI)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowI['pais'] . " - ".$rowI['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowI['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowI['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowI['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowI['enlace_de_interes']."'>".$rowI['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->       
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-JJ" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-j.png">
                                  <div class="titulo-por-universidad">Universidades J</div>
                                  <!-- Accordion J-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryJ = "SELECT * FROM universidades WHERE pais like 'j%' and para_estudiantes=true;";
                                    $resultJ = mysqli_query($conn, $queryJ);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowJ = mysqli_fetch_assoc($resultJ)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowJ['pais'] . " - ".$rowJ['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowJ['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowJ['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowJ['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowJ['enlace_de_interes']."'>".$rowJ['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->      
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-KK" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-k.png">
                                  <div class="titulo-por-universidad">Universidades K</div>
                                  <!-- Accordion K-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryK = "SELECT * FROM universidades WHERE pais like 'k%' and para_estudiantes=true;";
                                    $resultK = mysqli_query($conn, $queryK);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowK = mysqli_fetch_assoc($resultK)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowK['pais'] . " - ".$rowK['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowK['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowK['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowK['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowK['enlace_de_interes']."'>".$rowK['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->      
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-LL" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-l.png">
                                  <div class="titulo-por-universidad">Universidades L</div>
                                  <!-- Accordion L-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryL = "SELECT * FROM universidades WHERE pais like 'l%' and para_estudiantes=true;";
                                    $resultL = mysqli_query($conn, $queryL);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowL = mysqli_fetch_assoc($resultL)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowL['pais'] . " - ".$rowL['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowL['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowL['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowL['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowL['enlace_de_interes']."'>".$rowL['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->      
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-MM" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-m.png">
                                  <div class="titulo-por-universidad">Universidades M</div>
                                  <!-- Accordion M-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryM = "SELECT * FROM universidades WHERE pais like 'm%' and para_estudiantes=true;";
                                    $resultM = mysqli_query($conn, $queryM);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowM = mysqli_fetch_assoc($resultM)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowM['pais'] . " - ".$rowM['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowM['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowM['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowM['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowM['enlace_de_interes']."'>".$rowM['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->      
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-NN" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-n.png">
                                  <div class="titulo-por-universidad">Universidades N</div>
                                  <!-- Accordion N-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryN = "SELECT * FROM universidades WHERE pais like 'n%' and para_estudiantes=true;";
                                    $resultN = mysqli_query($conn, $queryN);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowN = mysqli_fetch_assoc($resultN)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowN['pais'] . " - ".$rowN['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowN['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowN['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowN['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowN['enlace_de_interes']."'>".$rowN['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->     
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-OO" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-o.png">
                                  <div class="titulo-por-universidad">Universidades O</div>
                                  <!-- Accordion O-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryO = "SELECT * FROM universidades WHERE pais like 'o%' and para_estudiantes=true;";
                                    $resultO = mysqli_query($conn, $queryO);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowO = mysqli_fetch_assoc($resultO)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowO['pais'] . " - ".$rowO['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowO['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowO['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowO['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowO['enlace_de_interes']."'>".$rowO['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->      
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-PP" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-p.png">
                                  <div class="titulo-por-universidad">Universidades P</div>
                                  <!-- Accordion P-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryP = "SELECT * FROM universidades WHERE pais like 'p%' and para_estudiantes=true;";
                                    $resultP = mysqli_query($conn, $queryP);
                                  ?>
                                    <!-- Accordion P-->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowP = mysqli_fetch_assoc($resultP)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowP['pais'] . " - ".$rowP['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowP['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowP['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowP['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowP['enlace_de_interes']."'>".$rowP['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->       
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-QQ" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-q.png">
                                  <div class="titulo-por-universidad">Universidades Q</div>
                                  <!-- Accordion Q-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryQ = "SELECT * FROM universidades WHERE pais like 'q%' and para_estudiantes=true;";
                                    $resultQ = mysqli_query($conn, $queryQ);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowQ = mysqli_fetch_assoc($resultQ)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowQ['pais'] . " - ".$rowQ['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowQ['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowQ['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowQ['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowQ['enlace_de_interes']."'>".$rowQ['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->    
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-RR" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-r.png">
                                  <div class="titulo-por-universidad">Universidades R</div>
                                  <!-- Accordion R-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryR = "SELECT * FROM universidades WHERE pais like 'r%' and para_estudiantes=true;";
                                    $resultR = mysqli_query($conn, $queryR);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowR = mysqli_fetch_assoc($resultR)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowR['pais'] . " - ".$rowR['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowR['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowR['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowR['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowR['enlace_de_interes']."'>".$rowR['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->      
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-SS" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-s.png">
                                  <div class="titulo-por-universidad">Universidades S</div>
                                  <!-- Accordion S-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryS = "SELECT * FROM universidades WHERE pais like 's%' and para_estudiantes=true;";
                                    $resultS = mysqli_query($conn, $queryS);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowS = mysqli_fetch_assoc($resultS)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowS['pais'] . " - ".$rowS['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowS['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowS['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowS['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowS['enlace_de_interes']."'>".$rowS['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->       
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-TT" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-t.png">
                                  <div class="titulo-por-universidad">Universidades T</div>
                                  <!-- Accordion T-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryT = "SELECT * FROM universidades WHERE pais like 't%' and para_estudiantes=true;";
                                    $resultT = mysqli_query($conn, $queryT);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowT = mysqli_fetch_assoc($resultT)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowT['pais'] . " - ".$rowT['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowT['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowT['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowT['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowT['enlace_de_interes']."'>".$rowT['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->      
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-UU" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-u.png">
                                  <div class="titulo-por-universidad">Universidades U</div>
                                  <!-- Accordion U-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryU = "SELECT * FROM universidades WHERE pais like 'u%' and para_estudiantes=true;";
                                    $resultU = mysqli_query($conn, $queryU);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowU = mysqli_fetch_assoc($resultU)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowU['pais'] . " - ".$rowU['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">                                                          <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowU['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowU['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowU['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowU['enlace_de_interes']."'>".$rowU['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->      
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-VV" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-v.png">
                                  <div class="titulo-por-universidad">Universidades V</div>
                                  <!-- Accordion V-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryV = "SELECT * FROM universidades WHERE pais like 'v%' and para_estudiantes=true;";
                                    $resultV = mysqli_query($conn, $queryV);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowV = mysqli_fetch_assoc($resultV)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowV['pais'] . " - ".$rowV['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowV['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowV['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowV['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowV['enlace_de_interes']."'>".$rowV['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->      
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-WW" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-w.png">
                                  <div class="titulo-por-universidad">Universidades W</div>
                                  <!-- Accordion W-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryW = "SELECT * FROM universidades WHERE pais like 'w%' and para_estudiantes=true;";
                                    $resultW = mysqli_query($conn, $queryW);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowW = mysqli_fetch_assoc($resultW)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowW['pais'] . " - ".$rowW['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowW['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowW['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowW['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowW['enlace_de_interes']."'>".$rowW['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->        
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-XX" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-x.png">
                                  <div class="titulo-por-universidad">Universidades X</div>
                                  <!-- Accordion X-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryX = "SELECT * FROM universidades WHERE pais like 'x%' and para_estudiantes=true;";
                                    $resultX = mysqli_query($conn, $queryX);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowX = mysqli_fetch_assoc($resultX)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowX['pais'] . " - ".$rowX['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowX['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowX['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowX['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowX['enlace_de_interes']."'>".$rowX['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->      
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-YY" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-y.png">
                                  <div class="titulo-por-universidad">Universidades Y</div>
                                  <!-- Accordion Y-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryY = "SELECT * FROM universidades WHERE pais like 'y%' and para_estudiantes=true;";
                                    $resultY = mysqli_query($conn, $queryY);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowY = mysqli_fetch_assoc($resultY)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowY['pais'] . " - ".$rowY['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowY['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowY['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowY['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowY['enlace_de_interes']."'>".$rowY['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->      
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                                <div class="tab-pane" id="nav-ZZ" role="tabpanel" >
                                  <img class="pos-letters" src="img/letters/letter-z.png">
                                  <div class="titulo-por-universidad">Universidades Z</div>
                                  <!-- Accordion Z-->
                                  <?php 
                                    include('dbconnect.php');
                                    $queryZ = "SELECT * FROM universidades WHERE pais like 'z%' and para_estudiantes=true;";
                                    $resultZ = mysqli_query($conn, $queryZ);
                                  ?>
                                    <!-- Accordion -->
                                    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                                        <div class="container"> <!--COMIENZA CONTAINER-->
                                            <div class="row"> <!--COMIENZA ROW-->
                                                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                                                    <?php while($rowZ = mysqli_fetch_assoc($resultZ)){
                                                    
                                                    ?>
                                                        <div class="accordion" id="accordionUni"> <!--COMIENZA ACCORDION-->
                                                            <!--PAISES-->
                                                            <div class="card"> <!--COMIENZA CARD-->
                                                                <div class="card-header" id="headingAngola6">				
                                                                    <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola6" aria-expanded="false" >
                                                                    <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowZ['pais'] . " - ".$rowZ['nombre'] ; ?></a>		  
                                                                </div>
                                                                <div id="collapseAngola6" class="collapse" data-parent="#accordionUni">
                                                                    <div class="card-body" style="font-size: 4mm;">
                                                                        <!--PRIMERA LINEA-->
                                                                        <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PAIS-->
                                                                            <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowZ['pais']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--PROGRAMAS-->
                                                                          <div style="font-size: 5mm;"><?php echo $rowZ['programas']; ?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->
                                                                        <!--SEGUNDA LINEA-->
                                                                        <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                                        <div class="row"> <!--COMIENZA ROW-->
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--DESCRIPCION-->
                                                                            <div style="font-size: 5mm; "><?php echo $rowZ['descripcion']; ?></div>
                                                                          </div>
                                                                          <div class="col-md-1">
                                                                            <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                                          </div>
                                                                          <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                                          <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowZ['enlace_de_interes']."'>".$rowZ['enlace_de_interes']."</a>";?></div>
                                                                          </div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                                          <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                                        </div> <!--ACABA ROW-->     
                                                                    </div>
                                                                </div>
                                                            </div> <!--ACABA CARD-->
                                                        </div> <!--ACABA ACCORDION-->
                                                    <?php
                                                    }
                                                    mysqli_close($conn);
                                                    ?>
                                                            
                                                    
                                                </div> <!--ACABA col-10 mx-auto-->	
                                            </div> <!--ACABA ROW-->
                                        </div> <!--ACABA CONTAINER-->
                                    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                                                    <!-- .// Accordion -->
                                </div>
                              </div>
                            </div>
                            
                            </div>
                          </div>
                        </div>
            </div>
          </div> <!--ACABA TAB-PANE POR PAIS-->
          
          <!--TAB 9 POR CONTINENTE-->
          <div class="tab-pane" id="pag9" role="tabpanel"> <!--COMIENZA TAB-PANE POR CONTINENTE-->
            <div class="sv-tab-panel titulo-por-universidad">
            <?php
      // add dbconnection
      include('dbconnect.php');

      //create query
      $queryContinente1 = "SELECT * FROM universidades WHERE continente='1' and para_estudiantes=true;";
      $queryContinente2 = "SELECT * FROM universidades WHERE continente='2' and para_estudiantes=true;";
      $queryContinente3 = "SELECT * FROM universidades WHERE continente='3' and para_estudiantes=true;";
      $queryContinente4 = "SELECT * FROM universidades WHERE continente='4' and para_estudiantes=true;";
      $queryContinente5 = "SELECT * FROM universidades WHERE continente='5' and para_estudiantes=true;";
      $resultContinente1 = mysqli_query($conn, $queryContinente1);
      $resultContinente2 = mysqli_query($conn, $queryContinente2);
      $resultContinente3 = mysqli_query($conn, $queryContinente3);
      $resultContinente4 = mysqli_query($conn, $queryContinente4);
      $resultContinente5 = mysqli_query($conn, $queryContinente5);
    ?>
    <!-- Accordion -->
    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
        <div class="container" style="margin-top:40px;"> <!--COMIENZA CONTAINER-->
            <div class="row"> <!--COMIENZA ROW-->
                <div class="col-10 mx-auto"> <!--COMIENZA col-10 mx-auto-->
                    <div class="accordion" id="accordionContinentes"> <!--COMIENZA ACCORDION-->
                        <!--CARD 1 - AFRICA-->
                        <div class="card"> <!--COMIENZA CARD-->
                            <div class="card-header" id="headingOne">					
                                <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" >
                                    <i style="color: #FE4164;" class="fa fa-angle-double-right mr-3"></i>África
                                </a>			  
                            </div>
                            <!--CONTENIDO AFRICA-->
                            <div id="collapseOne" class="collapse"  data-parent="#accordionContinentes">
                                <div class="card-body">
                                <?php while($rowresultContinente1 = mysqli_fetch_assoc($resultContinente1)){
                                
                                ?>
                                    <div class="accordion" id="accordionPaises"> <!--COMIENZA ACCORDION-->
                                        <!--PAISES-->
                                        <div class="card"> <!--COMIENZA CARD-->
                                            <div class="card-header" id="headingAngola">				
                                                <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola" aria-expanded="false" >
                                                <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowresultContinente1['nombre']; ?></a>		  
                                            </div>
                                            <div id="collapseAngola" class="collapse" data-parent="#accordionPaises">
                                                <div class="card-body" style="font-size: 4mm;">
                                                    <!--PRIMERA LINEA-->
                                                    <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                    <div class="row"> <!--COMIENZA ROW-->
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--PAIS-->
                                                        <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowresultContinente1['pais']; ?></div>
                                                      </div>
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--PROGRAMAS-->
                                                      <div style="font-size: 5mm;"><?php echo $rowresultContinente1['programas']; ?></div>
                                                      </div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                    </div> <!--ACABA ROW-->
                                                    <!--SEGUNDA LINEA-->
                                                    <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                    <div class="row"> <!--COMIENZA ROW-->
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--DESCRIPCION-->
                                                        <div style="font-size: 5mm; "><?php echo $rowresultContinente1['descripcion']; ?></div>
                                                      </div>
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                      <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowresultContinente1['enlace_de_interes']."'>".$rowresultContinente1['enlace_de_interes']."</a>";?></div>
                                                      </div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                    </div> <!--ACABA ROW-->
                                                </div>
                                            </div>
                                        </div> <!--ACABA CARD-->
                                    </div> <!--ACABA ACCORDION-->
                                <?php
                                }
                                mysqli_close($conn);
                                ?>
                            </div>
                                        
                        </div> <!--ACABA CARD-->
                    
                        <!--CARD 2 - AMERICA-->
                        <div class="card"> <!--COMIENZA CARD-->
                            <div class="card-header" id="headingTwo">					
                                <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" >
                                    <i style="color: #FE4164;" class="fa fa-angle-double-right mr-3"></i>América
                                </a>			  
                            </div>
                            <!--CONTENIDO AMERICA-->
                            <div id="collapseTwo" class="collapse"  data-parent="#accordionContinentes">
                                <div class="card-body">
                                <?php while($rowContinente2 = mysqli_fetch_assoc($resultContinente2)){
                                
                                ?>
                                    <div class="accordion" id="accordionPaises2"> <!--COMIENZA ACCORDION-->
                                        <!--PAISES-->
                                        <div class="card"> <!--COMIENZA CARD-->
                                            <div class="card-header" id="headingAngola">				
                                                <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola2" aria-expanded="false" >
                                                <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowContinente2['nombre']; ?></a>		  
                                            </div>
                                            <div id="collapseAngola2" class="collapse" data-parent="#accordionPaises2">
                                                <div class="card-body" style="font-size: 4mm;">
                                                    <!--PRIMERA LINEA-->
                                                    <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                    <div class="row"> <!--COMIENZA ROW-->
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--PAIS-->
                                                        <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowContinente2['pais']; ?></div>
                                                      </div>
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--PROGRAMAS-->
                                                      <div style="font-size: 5mm;"><?php echo $rowContinente2['programas']; ?></div>
                                                      </div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                    </div> <!--ACABA ROW-->
                                                    <!--SEGUNDA LINEA-->
                                                    <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                    <div class="row"> <!--COMIENZA ROW-->
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--DESCRIPCION-->
                                                        <div style="font-size: 5mm; "><?php echo $rowContinente2['descripcion']; ?></div>
                                                      </div>
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                      <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowContinente2['enlace_de_interes']."'>".$rowContinente2['enlace_de_interes']."</a>";?></div>
                                                      </div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                    </div> <!--ACABA ROW-->
                                                </div>
                                            </div>
                                        </div> <!--ACABA CARD-->
                                    </div> <!--ACABA ACCORDION-->
                                <?php
                                }
                                mysqli_close($conn);
                                ?>
                            </div>
                                        
                        </div> <!--ACABA CARD-->

                        <!--CARD 3  - ASIA-->
                        <div class="card"> <!--COMIENZA CARD-->
                            <div class="card-header" id="headingThree">					
                                <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" >
                                    <i style="color: #FE4164;" class="fa fa-angle-double-right mr-3"></i>Ásia
                                </a>			  
                            </div>
                            <!--CONTENIDO AMERICA-->
                            <div id="collapseThree" class="collapse"  data-parent="#accordionContinentes">
                                <div class="card-body">
                                <?php while($rowContinente3 = mysqli_fetch_assoc($resultContinente3)){
                                
                                ?>
                                    <div class="accordion" id="accordionPaises3"> <!--COMIENZA ACCORDION-->
                                        <!--PAISES-->
                                        <div class="card"> <!--COMIENZA CARD-->
                                            <div class="card-header" id="headingAngola3">				
                                                <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola3" aria-expanded="false" >
                                                <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowContinente3['nombre']; ?></a>		  
                                            </div>
                                            <div id="collapseAngola3" class="collapse" data-parent="#accordionPaises3">
                                                <div class="card-body" style="font-size: 4mm;">
                                                    <!--PRIMERA LINEA-->
                                                    <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                    <div class="row"> <!--COMIENZA ROW-->
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--PAIS-->
                                                        <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowContinente3['pais']; ?></div>
                                                      </div>
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--PROGRAMAS-->
                                                      <div style="font-size: 5mm;"><?php echo $rowContinente3['programas']; ?></div>
                                                      </div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                    </div> <!--ACABA ROW-->
                                                    <!--SEGUNDA LINEA-->
                                                    <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                    <div class="row"> <!--COMIENZA ROW-->
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--DESCRIPCION-->
                                                        <div style="font-size: 5mm; "><?php echo $rowContinente3['descripcion']; ?></div>
                                                      </div>
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                      <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowContinente3['enlace_de_interes']."'>".$rowContinente3['enlace_de_interes']."</a>";?></div>
                                                      </div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                    </div> <!--ACABA ROW-->
                                                </div>
                                            </div>
                                        </div> <!--ACABA CARD-->
                                    </div> <!--ACABA ACCORDION-->
                                <?php
                                }
                                mysqli_close($conn);
                                ?>
                            </div>
                                        
                        </div> <!--ACABA CARD-->

                        <!--CARD 4  - EUROPA-->
                        <div class="card"> <!--COMIENZA CARD-->
                            <div class="card-header" id="headingFour">					
                                <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" >
                                    <i style="color: #FE4164;" class="fa fa-angle-double-right mr-3"></i>Europa
                                </a>			  
                            </div>
                            <!--CONTENIDO AMERICA-->
                            <div id="collapseFour" class="collapse"  data-parent="#accordionContinentes">
                                <div class="card-body">
                                <?php while($rowContinente4 = mysqli_fetch_assoc($resultContinente4)){
                                
                                ?>
                                    <div class="accordion" id="accordionPaises4"> <!--COMIENZA ACCORDION-->
                                        <!--PAISES-->
                                        <div class="card"> <!--COMIENZA CARD-->
                                            <div class="card-header" id="headingAngola4">				
                                                <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola4" aria-expanded="false" >
                                                <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowContinente4['nombre']; ?></a>		  
                                            </div>
                                            <div id="collapseAngola4" class="collapse" data-parent="#accordionPaises4">
                                                <div class="card-body" style="font-size: 4mm;">
                                                    <!--PRIMERA LINEA-->
                                                    <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                    <div class="row"> <!--COMIENZA ROW-->
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--PAIS-->
                                                        <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowContinente4['pais']; ?></div>
                                                      </div>
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--PROGRAMAS-->
                                                      <div style="font-size: 5mm;"><?php echo $rowContinente4['programas']; ?></div>
                                                      </div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                    </div> <!--ACABA ROW-->
                                                    <!--SEGUNDA LINEA-->
                                                    <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                    <div class="row"> <!--COMIENZA ROW-->
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--DESCRIPCION-->
                                                        <div style="font-size: 5mm; "><?php echo $rowContinente4['descripcion']; ?></div>
                                                      </div>
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                      <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowContinente4['enlace_de_interes']."'>".$rowContinente4['enlace_de_interes']."</a>";?></div>
                                                      </div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                    </div> <!--ACABA ROW-->
                                                </div>
                                            </div>
                                        </div> <!--ACABA CARD-->
                                    </div> <!--ACABA ACCORDION-->
                                <?php
                                }
                                mysqli_close($conn);
                                ?>
                            </div>
                                        
                        </div> <!--ACABA CARD-->

                        <!--CARD 5  - OCEANIA-->
                        <div class="card"> <!--COMIENZA CARD-->
                            <div class="card-header" id="headingFive">					
                                <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" >
                                    <i style="color: #FE4164;" class="fa fa-angle-double-right mr-3"></i>Oceanía
                                </a>			  
                            </div>
                            <!--CONTENIDO OCEANIA-->
                            <div id="collapseFive" class="collapse"  data-parent="#accordionContinentes">
                                <div class="card-body">
                                <?php while($rowContinente5 = mysqli_fetch_assoc($resultContinente5)){
                                
                                ?>
                                    <div class="accordion" id="accordionPaises5"> <!--COMIENZA ACCORDION-->
                                        <!--PAISES-->
                                        <div class="card"> <!--COMIENZA CARD-->
                                            <div class="card-header" id="headingAngola5">				
                                                <a class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseAngola5" aria-expanded="false" >
                                                <i class="fa fa-angle-double-right mr-3"></i><?php echo $rowContinente5['nombre']; ?></a>		  
                                            </div>
                                            <div id="collapseAngola5" class="collapse" data-parent="#accordionPaises5">
                                                <div class="card-body" style="font-size: 4mm;">
                                                    <!--PRIMERA LINEA-->
                                                    <label style="color:black; font-size: 5mm;">País:</label><label style="margin-left:420px;color:black; font-size: 5mm;">Programas:</label>
                                                    <div class="row"> <!--COMIENZA ROW-->
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-globe-americas fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--PAIS-->
                                                        <div style="font-size: 5mm; margin-top:10px;"><?php echo $rowContinente5['pais']; ?></div>
                                                      </div>
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-tasks fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--PROGRAMAS-->
                                                      <div style="font-size: 5mm;"><?php echo $rowContinente5['programas']; ?></div>
                                                      </div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                    </div> <!--ACABA ROW-->
                                                    <!--SEGUNDA LINEA-->
                                                    <label style="color:black; font-size: 5mm; margin-top:12px;">Descripción:</label><label style="margin-left:355px;color:black; font-size: 5mm; margin-top:12px;">Enlace de interés:</label>
                                                    <div class="row"> <!--COMIENZA ROW-->
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x"><i class="fas fa-circle fa-stack-2x" style="color:black;"></i><i  style="color:#F5FFFA;" class="fas fa-sticky-note fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--DESCRIPCION-->
                                                        <div style="font-size: 5mm; "><?php echo $rowContinente5['descripcion']; ?></div>
                                                      </div>
                                                      <div class="col-md-1">
                                                        <span class="fa-stack fa-2x" ><i class="fas fa-circle fa-stack-2x" style="color:black"></i><i  style="color:#F5FFFA;" class="fas fa-link fa-stack-1x fa-inverse"></i></span>
                                                      </div>
                                                      <div class="col-md-5"> <!--ENLACE DE INTERES-->
                                                      <div style="font-size: 5mm;margin-top:10px;"><?php echo "<a href='".$rowContinente5['enlace_de_interes']."'>".$rowContinente5['enlace_de_interes']."</a>";?></div>
                                                      </div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 40%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: white;width: 13%; margin-top:10px;"></div>
                                                      <div style="height: 2px;background-color: #FE4164;width: 47%;margin-top:10px;"></div>
                                                    </div> <!--ACABA ROW-->
                                                </div>
                                            </div>
                                        </div> <!--ACABA CARD-->
                                    </div> <!--ACABA ACCORDION-->
                                <?php
                                }
                                mysqli_close($conn);
                                ?>
                            </div>
                                        
                        </div> <!--ACABA CARD-->
                        
                                    

                    </div> <!--ACABA ACCORDION-->
                </div> <!--ACABA col-10 mx-auto-->	
            </div> <!--ACABA ROW-->
        </div> <!--ACABA CONTAINER-->
    </div> <!--ACABA CONTAINER-FLUID BG-GRAY-->
                      <!-- .// Accordion -->
              
            </div>
          </div>  <!--ACABA TAB-PANE POR CONTINENTE-->
            
            
              <!--NABVAR VERTICAL-->
              
        </div> <!--ACABA TAB-CONTENT-->
      </div> <!------ACABA VERTICAL-TAB------->  
    </div> <!--ACABA POST-F-T-->  
    
    <?php
      /* } else {
          echo "no puedes acceder porque el código: " . $codigoAdmin . " no coincide con la constraseña";
      }*/
    ?>
    <!-- Optional JavaScript -->
    <script src="js/admin.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js.map"></script>
        
    
  </body>
</html>