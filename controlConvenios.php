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
    <link href="css/radiobutton.css" rel="stylesheet" >
    <link href="css/toastr.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>
    <!--JS-->
    <script src="js/toast_script.js"></script>
    <script src="js/toastr.js"></script>
    <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
    <!--<script type="text/javascript">
        history.pushState(null, null, location.href);
        history.back();
        history.forward();
        window.onpopstate = function () { history.go(1); };
    </script>-->
    
    <title>contenido de convenios</title>
  </head>
  <body>

  <?php
    //$idAdmin = $_GET['codigo'];
    //add dbconnect
    
    include ('dbconnect.php');
    
    $code = $_POST['codigoAdmin'];
    $codigoAdmin = $_POST['codigoAdmin'];
    $contrasenaAdmin = base64_encode($_POST['contrasenaAdmin']);
    
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
    if  ($resultCheck > 0) {
      while ($row = $result2 -> fetch_row()) {
        $codigodeladmin = $row[0];
        $nombreAdmi = $row[1];
        $contAdmi = $row[2];
        $cam = $row[3];
      }  
      
  ?>
    <div class="container">
      <div class="text-center">
          <img src="img/title.png" alt="title">
      </div>
    </div>

    <div class="pos-f-t">  <!------COMIENZA POST-F-T------->  
      <div class="vertical-tab"> <!------COMIENZA VERTICAL-TAB------->  
        <ul class="nav nav-tab" role="tablist"> <!--COMIENZA NAV NAV-TAB-->
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#pag5" role="tab" >Administrador</a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#pag6" role="tab" >Contenidos</a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#pag7" role="tab" >Por Universidad/institución</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#pag8" role="tab" >Por País</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#pag9" role="tab" >Por Continente</a>
          </li>
          
        </ul> <!--ACABA NAV NAV-TAB-->
        <div class="tab-content"> <!--COMIENZA TAB-CONTENT-->
          <div class="tab-pane active" id="pag5" role="tabpanel"> <!--COMIENZA TAB-PANE PAG5-->
            <div class="sv-tab-panel"> <!--COMIENZA SV-TAB-PANEL-->
              <!--AQUI VA-->
              <div class="vertical-tabs"> <!--COMIENZA VERITCAL-TABS-->
                <ul class="nav nav-tabs" role="tablist"> <!--COMIENZA NAV NAV-TABS-->
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#pag1" role="tab">Añadir estudiantes / docentes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#pag2" role="tab">Añadir administradores</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#pag3" role="tab">Añadir convenios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#pag4" role="tab">Reportes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#pag0" role="tab">Perfil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#pag00" role="tab">Añadir programas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#pag000" role="tab">Mensajes</a>
                  </li>
                </ul> <!--ACABA NAV NAV-TABS-->
                <!--BAR VERTICAL-->
                <div class="tab-content"> <!--COMIENZA TAB-CONTENT-->
                  <!----------------   TAB 1  estudiantes------------------------>
                  <div class="tab-pane active" id="pag1" role="tabpanel"> <!--COMIENZA TAB-PANE ESTUDIANTES-->
                    <div class="sv-tab-panel anadir-est ">
                    <!--AÑADIR ESTUDIANTES/DOCENTES-->
                    <div class="card border-dark" id="formularioEst" style="width: 45rem; margin-top: 40px; margin-left: 40px;"> <!--COMIENZA CARD BORDER-DARK-->
                      <div class="card-body"> <!--COMIENZA CARD-BODY-->
                        Añadir estudiantes/docentes:
                        <div class="texto-introducir-codigo">
                          Introduce el código que quieres añadir de estudiante/docente:
                        </div>
                        <form role="form" action="anadirAlumno.php" method="post">
                          <div class="input-codigo"> <!--COMIENZA INPUT-CODIGO-->
                            <div class="form-inline"> <!--COMIENZA FORM-INLINE-->
                              <div class="form-group">
                                <label class="col-2 col-form-label">Código:</label>
                                <div class="col-10">
                                  <input type="text" name="codigoAlum" id="codigoAlum" maxlength="5" class="form-control input-lg" placeholder="Ingrese código" title="máximo 5 números" required pattern="[0-9]+" required>
                
                                </div> 
                                <div class="containerrr" style="margin-top: 20px; margin-left:80px;">      
                                    <label class="containerrr"> Estudiantes
                                        <input type="radio" checked="checked" name="radioEstDoc" value="si">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="containerrr" style="margin-top: 20px;">Docentes
                                        <input type="radio" name="radioEstDoc" value="no">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                              </div>
                            </div> <!--ACABA FORM-INLINE-->
                          </div> <!--ACABA INPUT-CODIGO-->
                          
                          <a href="#popupAlumno" type="submit" class="btn boton-circle" role="button" style="color: white; background: black; border-radius: 40px; font-size: large; margin-left: 280px; margin-top: 10px;">Guardar</a>
                          <div id="popupAlumno" class="overlay"> <!--COMIENZA POPUPALUMNO-->
                            <div class="popup" style="margin-top:100px;"> <!--COMIENZA POPUP-->
                              <div class="title-popup">Añadir Alumno/Docente:</div>
                              <a class="close" href="#">×</a>
                              <div class="content"> <!--COMIENZA CONTENT-->
                                ¿Estas seguro que quieres añadir a este alumno/docente?
                                <ul >
                                  <div class="modal-footer">
                                    <button type="submit" name="submit_anadir_alumno" class="btn boton-info" style="background: #FE4164; color: white;">Guardar</button>
                                    <a href="#formularioEst" type="button" class="btn btn-secondary" data-dismiss="modal" style="background: #424242; color: white;">Cancelar</a>
                                  </div>
                                </ul>
                              </div> <!--ACABA CONTENT-->
                            </div> <!--ACABA POPUP-->
                          </div> <!--ACABA POPUPALUMNO-->
                        </form>
                      </div> <!--ACABA CARD-BODY-->
                    </div> <!--ACABA CARD BORDER-DARK-->
                    <!--ACABA ANADIR ESTUDIANTES-->
                    
                    
                    </div>
                  </div> <!--ACABA TAB-PANE ESTUDIANTES-->
                  <!------------------   TAB 2 Añadir administradores ---------------->
                  <div class="tab-pane" id="pag2" role="tabpanel"> <!--COMIENZA TAB-PANE ADMINISTRADORES-->
                    <div class="sv-tab-panel anadir-est">
                      <div class="card border-dark" style="width: 55rem; margin-top: 40px;"> <!--COMIENZA CARD BORDER-DARK-->
                        <div class="card-body">Añadir administradores:</div>
                        <div id="formulario-Admin"> <!--COMIENZA FORMULARIO-ADMIN-->
                          <form class="form-inline" action="anadirAdmi.php" role="form"  method="post"> <!--COMIENZA FORM-->
                            <div class="input-codigo"> <!--COMIENZA INPUT-CODIGO-->
                              <div class="form-group"> <!--COMIENZA FORM-GROUP-->
                                <!--NOMBRE DEL ADMINISTRADOR-->
                                <label class="col-6 col-form-label">Nombre del admnistrador:</label>
                                <div class="col-6">
                                  <input type="text" name="admnistradorNuevo" id="nombre_administrador" class="input-group-lg" placeholder="Ej. Mariana" title="nombre de usuario" required pattern="[_a-zA-Z0-9-]+" required/>
                                </div> 
                                <!--CAMPUS-->
                                <label for="exampleSelect1" class="col-6 col-form-label text-left">Campus:</label>
                                <div class="col-md-6">
                                  <div class="form-group">
                                  <select name="campus_select_admi" class="selectpicker" >
                                    <option title="LaPaz" value="option1" name="option1">Fernando Illanes de la Riva, La Paz</option>
                                    <option title="Cochabamba" value="option2" name="option2">Julio León Prado, Cochabamba</option>
                                    <option title="SantaCruz" value="option3" name="option3">Campus Santa Cruz</option>
                                  </select>
                                  </div>
                                </div>
                                <!--CODIGO-->
                                <label class="col-6 col-form-label">Código:</label>
                                <div class="col-6" >
                                  <input type="text"  name="codigoAdminNuevo" id="codigoAdmin" class="input-group-lg" placeholder="Ej. 55555" title="solo se permite numeros(maximo: 5 numeros)" maxlength="5" required pattern="[0-9]+" required/>
                                </div> 
                                <!--CONTRASEÑA-->
                                <label class="col-6 col-form-label">Contraseña:</label>
                                <div class="col-6">
                                  <input type="password" name="nuevoPassAdmin"id="contraseñaAdmin" class="input-lg"placeholder="Ej. 12345678" required>
                                </div>
                                <!--CONFIRMAR CONTRASEÑA-->
                                <label class="col-6 col-form-label">Confirmar contraseña:</label>
                                <div class="col-6">
                                  <input type="password" name="confNuevoPassAdmin" id="confirmarContraseñaAdmin" class="input-lg"placeholder="Ej. 12345678" required>
                                </div>
                              </div><!--ACABA FORM-GROUP-->
                            </div> <!--ACABA INPUT-CODIGO-->
                          
    
                            <a href="#popupAdmin" type="submit" style="margin-left: 420px;" class="btn boton-anadir-admin" aria-pressed="true">Guardar</a>
                       
                            <div id="popupAdmin" class="overlay"> <!--COMIENZA POPUPADMIN-->
                              <div class="popup"> <!--COMIENZA POPUP-->
                                <div class="title-popup">Añadir Administrador:</div>
                                <a class="close" href="#">×</a>
                                <div class="content"> <!--COMIENZA CONTENT-->
                                  ¿Estas seguro que quieres añadir a Administrador:?
                                  <ul >
                                    <div class="modal-footer">
                                      
                                      <button type="submit" name="submit_anadir_admi" class="btn boton-info" style="background: green; color: white;">Guardar</button>
                                      <a href="#formularioAdmin" type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                                    </div>
                                  </ul>
                                </div> <!--ACABA CONTENT-->
                              </div> <!--ACABA POPUP-->
                            </div> <!--ACABA POPUPADMIN-->
                          </form> <!--ACABA FORM-->
                        </div> <!--ACABA FORMULARIO-ADMIN-->
                      </div> <!--ACABA CARD BORDER-DARK-->
    
                    </div>
                  </div> <!--ACABA TAB-PANE ESTUDIANTES-->
                  <!-----------------  TAB 3  Añadir convenios----------------------->
                  <div class="tab-pane" id="pag3" role="tabpanel"> <!--COMIENZA TAB-PANE CONVENIOS-->
                    <div class="sv-tab-panel anadir-est">
                      <!--Añadir convenios-->
                      <div class="card border-dark" style="margin-top: 20px; width: 52rem;"> <!--COMIENZA CARD-BORDER-DARK-->
                        <div class="card-body"> <!--COMIENZA CARD-BODY-->
                          Añadir Convenios:
                          <form class="form-inline" action="anadirUniversidad.php" method="POST">
                            <div class="input-de-anadir" style="margin-left: 20px;"> <!--COMIENZA INPUT-DE-ANADIR-->
                              <div class="form-group"> <!--COMIENZA FORM-GROUP-->
                                <!--NOMBRE DEL INSTITUTO O UNIVERSIDAD-->
                                <label class="col-6 col-form-label text-center">Nombre de Instituto o Universidad:</label>
                                <div class="col-6">
                                  <input type="text" name="nombreUniversidad"  id="universidad" class="form-control input-lg" placeholder="Universidad EAFIT" required/>
                                </div> 
                                
                                <!--PAIS-->
                                <label class="col-6 col-form-label" style="margin-top:10px;">País:</label>
                                <div class="col-6" style="margin-top:10px;">
                                  <select name = "pais" >
                                    <?php
                                      $queryPaises = "SELECT * FROM paises";
                                      $resulcheckPaises = mysqli_query($conn, $queryPaises);
                                      if ($resulcheckPaises) {
                                        while($renglon = mysqli_fetch_assoc($resulcheckPaises)){
                                            echo "<option value='".$renglon['nombre_pais']."'>";
                                            echo $renglon['nombre_pais'];
                                            echo "</option>";
                                        }  
                                      } else {
                                            echo "nada";
                                      }
                                    ?>
                                  </select>
                                </div> 
                                <!--FECHA DE FIRMA DE CONVENIO (DATE)-->
                                <label class="col-6 col-form-label" >Fecha de firma de convenio:</label>
                                <div class="col-6">
                                  <input class="form-control input-lg" name="fecha_firma_convenio" type="date" value="2019-11-27" id="date-input">
                                </div>
                                <!--QUE ABARCA-->
                                <label class="col-6 col-form-label text-left">Que programas abarca:</label>
                                <div class="col-md-6">
                                <select id="example" name="programas[]" multiple="multiple">
                                  <?php
                                      $query1111 = "SELECT * FROM programas";
                                      $resulcheck1111 = mysqli_query($conn, $query1111);
                                      if ($resulcheck1111) {
                                          echo "hola";
                                          while($row = mysqli_fetch_array($resulcheck1111)){
                                              echo "<option   value='".$row['nombre_programa']."'>";
                                              echo $row['nombre_programa'];
                                              echo "</option>";
                                          } 
                                      } else {
                                          echo "nada";
                                      }
                                  ?>
                                  </select> 
                                </div>                                          
                                <!--Fecha habilitada-->
                                <label class="col-6 col-form-label">Fecha habilitada:</label>
                                <div class="col-6">
                                  <input class="form-control" name="fecha_habilitada" type="date" value="2019-12-02" id="fecha-firma">
                                </div> 
                                <!--Fecha de vencimiento-->
                                <label class="col-6 col-form-label" style="margin-bottom:20px;">Fecha de vencimiento:</label>
                                <div class="col-6">
                                  <input class="form-control" name="fecha_vencimiento" type="date" value="2019-12-02" id="fecha-vencimiento">
                                </div>
                                <!--Descripcion-->
                                <label class="col-6 col-form-label">Descripción:</label>
                                <div class="col-6">
                                  <div class="form-group">
                                    <textarea style="padding-left: 100px;" name="descripcion" class="form-control" rows="5" placeholder="- Costo de vida - condiciones - carreras involucradas" required></textarea>
                                  </div>
                                </div>
                                <!--Enlaces de interes-->
                                <label style="padding-top: 40px; padding-bottom: 40px;" class="col-6 col-form-label">Enlaces de interés:</label>
                                <div class="col-6">
                                    <textarea style="padding-left: 70px;" name="enlaces_de_interes" class="form-control" rows="3" placeholder=" www.pagina.com" required></textarea>
                                </div>
                                <!--VA DIRIGIDO A -->
                                <label class="col-7 col-form-label"><div style="margin-left:-100px;">Va dirigido a:</div> </label>
                                <div class="col-5">
                                <div class="containerrr" style="margin-left:-100px;">      
                                    <label class="containerrr" style="font-size: 5mm;"> Estudiantes
                                        <input type="radio" checked="checked" name="radioEstuDoce" value="radioEst">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="containerrr" style="font-size: 5mm;">Docentes
                                        <input type="radio" name="radioEstuDoce" value="radioDoc">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="containerrr" style="font-size: 5mm;">Estudiantes/Docentes
                                        <input type="radio" name="radioEstuDoce" value="radioEstDoc">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                </div> 
                                
                              </div> <!--ACABA FORM-GROUP-->
                            </div> <!--ACABA INPUT-DE-ANADIR-->
                            <button type="submit" style="margin-left:350px;" name="submit_anadir_convenio"class="btn boton-circle">Guardar</button>
                          </form>
                          <script>
                            $(document).ready(function() {
                            $('#example').multiselect();
                            });
                          </script>
                        </div> <!--ACABA CARD-BODY-->
                      </div> <!--ACABA CARD-BORDER-DARK-->
                    </div>
                  </div> <!--ACABA TAB-PANE CONVENIOS-->
                  <!----------------  TAB 4  Reportes----------------->
                  <div class="tab-pane" id="pag4" role="tabpanel"> <!--COMIENZA TAB-PANE REPORTES-->
                    <div class="sv-tab-panel anadir-est">
                      <p>Reportes</p>
                    </div>
                  </div> <!--ACABA TAB-PANE REPORTES-->
                  
                  <!------------------TAB 0 PERFIL----------------------->
                  <div class="tab-pane" id="pag0" role="tabpanel"> <!--COMIENZA TAB-PANE PERFIL-->
                    <div class="sv-tab-panel anadir-est">
                      <p>Perfil: Hola <?php echo "$nombreAdmi";?></p>
                      <div class="card border-dark" style="width: 55rem;"> <!--COMIENZA CARD-->
                        <div class="card-body">
                          <div class="input-codigo"> <!--COMIENZA INPUT-CODIGO-->
                              <?php
                                while($row2 = mysqli_fetch_array($result3)){

                              ?>
                            <form role="form" action="updateAdmi.php" method="post">
                              <div class="form-inline">
                                <!--NOMBRE DEL ADMINISTRADOR-->
                                <label  class="col-6 col-form-label">Nombre del administrador:</label>
                                <div class="col-6">
                                  <input type="text" name="nombreAdmin" id="nombreAdmin" class="form-control" value="<?php echo $row2['nombre'] ?>" style="margin-bottom: 10px;" required>
                                </div>
                                <!--Código-->
                                <label  class="col-6 col-form-label">Código:</label>
                                <div class="col-6">
                                  <input type="text" name="codigoAdminist" id="codigoAdministrador" class="form-control" value="<?php echo $row2['codigo_admi'] ?>" style="margin-bottom: 10px;" required readonly>
                                </div>
                                <!--Campus-->
                                <label  class="col-6 col-form-label">Campus:</label>
                                <div class="col-6">
                                  <input type="text" class="form-control" value="<?php if($cam == 1){ echo "Fernando Illanes de la Riva";} else if($cam == 2) {echo "Julio Leon Prado"; }else { echo "Campus Santa Cruz";}?>" style="margin-bottom: 10px;" disabled>
                                </div>
                                <!--Ciudad-->
                                <label  class="col-6 col-form-label">Ciudad:</label>
                                <div class="col-6">
                                  <input type="text" class="form-control" value="<?php if($cam == 1){ echo "La Paz";} else if($cam == 2) {echo "Cochabamba"; }else { echo "Santa Cruz";}?>" style="margin-bottom: 10px;" disabled>
                                </div>
                                <!--Contraseña-->
                                <label  class="col-6 col-form-label">Contraseña:</label>
                                <div class="col-6">
                                  <input type="password" name="actContrasenaAdmin" id="actContrasenaAdmin" class="form-control" value="<?php $row2['constrasena'] ?>" style="margin-bottom: 10px;" required>
                                </div>
                                <!--Confirmar contraseña-->
                                <label  class="col-6 col-form-label">Confirmar contraseña:</label>
                                <div class="col-6">
                                  <input type="password" name="confirActContrasenaAdmin" id="confirActContrasenaAdmin" class="form-control" value="<?php $row2['constrasena'] ?>" style="margin-bottom: 10px;" required>
                                </div>
                                
                                <button type="submit" name="submit_perfil" class="btn boton-circle" style="color: white; background: black; border-radius: 40px; font-size: large; margin-left: 220px;">Actualizar</button>
                                
                              </div>
                              <?php
                                  }
                                  mysqli_close($conn);
                                ?>
                            </form>
                          </div> <!--ACABA INPUT-CODIGO-->
                        </div>
                      </div> <!--ACABA CARD-->
                      <a href = "logout.php" tite = "Logout" style="margin-left: 420px;" class="btn boton-anadir-admin" aria-pressed="true">Cerrar sesion</a>
                    </div>
                  </div> <!--ACABA TAB-PANE PERFIL-->
                  <!--cerrando perfil-->
                  <!-----------------  TAB 00  Añadir programas----------------------->
                  <div class="tab-pane" id="pag00" role="tabpanel"> <!--COMIENZA TAB-PANE PROGRAMAS-->
                    <div class="sv-tab-panel anadir-est">
                    <div class="card border-dark" id="formularioEst" style="width: 45rem; margin-top: 100px;"> <!--COMIENZA CARD BORDER-DARK-->
                      <div class="card-body" > <!--COMIENZA CARD-BODY-->
                        Añadir programas:
                        <div class="texto-introducir-codigo">
                          Introduce el nombre del programa:
                        </div>
                        <form role="form" action="anadirPrograma.php" method="post">
                          <div class="input-codigo"> <!--COMIENZA INPUT-CODIGO-->
                            <div class="form-inline"> <!--COMIENZA FORM-INLINE-->
                              <div class="form-group">
                                <label class="col-6 col-form-label">Nombre del programa:</label>
                                <div class="col-6">
                                  <input type="text" name="nombrePrograma" id="nombrePrograma" class="form-control input-lg" placeholder="Ingrese nombre" required>
                                </div> 
                              </div>
                            </div> <!--ACABA FORM-INLINE-->
                          </div> <!--ACABA INPUT-CODIGO-->
                          
                          <button type="submit" name="submit_anadir_programa" class="btn boton-circle" style="margin-left: 270px; margin-top:25px;">Añadir programa</button>
                          
                        </form>
                      </div> <!--ACABA CARD-BODY-->
                    </div> <!--ACABA CARD BORDER-DARK-->
                    </div>
                  </div> <!--ACABA TAB-PANE PROGRAMAS-->
                  <!--CERRANDO AÑADIENDO PROGRAMAS-->
                  <!-----------------------TAB 000 - MENSAJES----------------------------->
                  <div class="tab-pane" id="pag000" role="tabpanel"> <!--COMIENZA TAB-PANE MENSAJES-->
                    <div class="sv-tab-panel anadir-est">
                    
                    <h3>HOLA MENSAJES</h3>
                    </div>
                  </div> <!--ACABA TAB-PANE MENSAJES-->
                  <!------------------ACABA LA TAB DE MENSAJES-------->

                  </div> <!--ACABA TAB-CONTENT-->
                </div> <!--ACABA VERITCAL-TABS-->
              </div> <!--ACABA SV-TAB-PANEL-->
                <!--HASTA AQUI-->    
                
          </div> <!--ACABA TAB-PANE PAG5-->
           

          <!--TAB 6 CONTENIDOS-->
          <div class="tab-pane" id="pag6" role="tabpanel"> <!--COMIENZA TAB-PANE CONTENIDOS-->
            <div class="sv-tab-panel titulo-por-universidad">
            <?php
      // add dbconnection
      include('dbconnect.php');

      //create query
      $query = "SELECT * FROM universidades order by nombre";
      $result = mysqli_query($conn, $query);
    ?>

    <!--PARA PHP-->
      <h3>TODOS LOS CONTENIDOS</h3>
      <div class="row" style="margin-left:35px;">
        <div class="col-sm-11">
          <table class="table table-dark table-striped" style="font-size: 5mm;">
            <thead >
              <tr>
                <th style="color: #FE4164;">UNIVERSIDAD O INSTITUTO</th>
                <th style="color: #FE4164;">PAIS</th>
                <th style="color: #FE4164;">ACCIONES</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_assoc($result)){
                  
              ?>
              <tr>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['pais']; ?></td>
                <td>
                  <a href="editUniversidad.php?id=<?php echo $row['id_universidad']; ?>" class="btn" style="background:#FE4164; color: black;" role="button">Editar</a>
                  <a href="delete.php?id=<?php echo $row['id_universidad']; ?>" class="btn" style="background:black; color: white;" role="button">Eliminar</a>
                </td>
            </tr>
            <?php

              }

              mysqli_close($conn);

            ?>
            </tbody>
          </table>
          <!---->
        </div>
      </div>
            </div>
          </div> <!--ACABA TAB-PANE POR TIPO-->
          
          <!--TAB 7 POR UNIVERSIDAD / INSTITUCION -->
          <div class="tab-pane" id="pag7" role="tabpanel"> <!--COMIENZA TAB-PANE POR UNIVERSIDAD / INSTITUCION-->
            <div class="sv-tab-panel titulo-por-universidad">
              <?php
                // add dbconnection
                include('dbconnect.php');

                //create query
                $queryContinente22 = "SELECT * FROM universidades";
                $resultContinente22 = mysqli_query($conn, $queryContinente22);
              ?>
              <!-- Accordion -->
              <div class="container-fluid bg-gray" id="accordion-style-1" style="margin-top:20px;"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
                <div class="container"> <!--COMIENZA CONTAINER-->
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
                                <div class="card-body" style="font-size: 5mm;">
                                  <div><i class="fas fa-circle"></i>País:</br><?php echo $rowresultContinente22['pais']; ?></div>
                                  <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                  <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowresultContinente22['programas']; ?></div>
                                  <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                  <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowresultContinente22['descripcion']; ?></div>
                                  <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                  <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowresultContinente22['fecha_habilitada']; ?></div>
                                  <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                  <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowresultContinente22['fecha_vencimiento']; ?></div>
                                  <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                  <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowresultContinente22['enlace_de_interes']."'>'".$rowresultContinente22['enlace_de_interes']."'</a>";?></div>
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
                                    $queryA = "SELECT * FROM universidades WHERE pais like 'a%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowA['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowA['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowA['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowA['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowA['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowA['enlace_de_interes']."'>'".$rowA['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryB = "SELECT * FROM universidades WHERE pais like 'b%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowB['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowB['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowB['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowB['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowB['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowB['enlace_de_interes']."'>'".$rowB['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryC = "SELECT * FROM universidades WHERE pais like 'c%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowC['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowC['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowC['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%; "></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowC['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowC['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowC['enlace_de_interes']."'>'".$rowC['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryD = "SELECT * FROM universidades WHERE pais like 'd%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowD['pais']; ?></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowD['programas']; ?></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowD['descripcion']; ?></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowD['fecha_habilitada']; ?></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowD['fecha_vencimiento']; ?></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowD['enlace_de_interes']."'>'".$rowD['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryE = "SELECT * FROM universidades WHERE pais like 'e%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowE['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowE['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowE['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowE['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowE['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowE['enlace_de_interes']."'>'".$rowE['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryF = "SELECT * FROM universidades WHERE pais like 'f%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowF['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowF['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowF['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowF['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowF['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowF['enlace_de_interes']."'>'".$rowF['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryG = "SELECT * FROM universidades WHERE pais like 'g%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowG['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowG['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowG['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowG['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowG['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowG['enlace_de_interes']."'>'".$rowG['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryH = "SELECT * FROM universidades WHERE pais like 'h%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowH['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowH['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowH['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowH['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowH['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowH['enlace_de_interes']."'>'".$rowH['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryI = "SELECT * FROM universidades WHERE pais like 'i%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowI['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowI['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowI['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowI['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowI['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowI['enlace_de_interes']."'>'".$rowI['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryJ = "SELECT * FROM universidades WHERE pais like 'j%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowJ['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowJ['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowJ['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowJ['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowJ['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowJ['enlace_de_interes']."'>'".$rowJ['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryK = "SELECT * FROM universidades WHERE pais like 'k%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowK['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowK['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowK['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowK['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowK['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowK['enlace_de_interes']."'>'".$rowK['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryL = "SELECT * FROM universidades WHERE pais like 'l%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowL['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowL['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowL['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowL['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowL['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowL['enlace_de_interes']."'>'".$rowL['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryM = "SELECT * FROM universidades WHERE pais like 'm%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowM['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowM['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowM['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowM['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowM['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowM['enlace_de_interes']."'>'".$rowM['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryN = "SELECT * FROM universidades WHERE pais like 'n%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowN['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowN['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowN['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowN['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowN['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowN['enlace_de_interes']."'>'".$rowN['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryO = "SELECT * FROM universidades WHERE pais like 'o%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowO['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowO['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowO['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowO['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowO['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowO['enlace_de_interes']."'>'".$rowO['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryP = "SELECT * FROM universidades WHERE pais like 'p%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowP['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowP['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowP['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowP['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowP['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowP['enlace_de_interes']."'>'".$rowP['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryQ = "SELECT * FROM universidades WHERE pais like 'q%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowQ['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowQ['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowQ['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowQ['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowQ['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowQ['enlace_de_interes']."'>'".$rowQ['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryR = "SELECT * FROM universidades WHERE pais like 'r%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowR['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowR['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowR['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowR['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowR['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowR['enlace_de_interes']."'>'".$rowR['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryS = "SELECT * FROM universidades WHERE pais like 's%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowS['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowS['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowS['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowS['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowS['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowS['enlace_de_interes']."'>'".$rowS['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryT = "SELECT * FROM universidades WHERE pais like 't%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowT['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowT['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowT['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowT['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowT['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowT['enlace_de_interes']."'>'".$rowT['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryU = "SELECT * FROM universidades WHERE pais like 'u%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowU['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowU['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowU['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowU['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowU['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowU['enlace_de_interes']."'>'".$rowU['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryV = "SELECT * FROM universidades WHERE pais like 'v%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowV['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowV['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowV['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowV['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowV['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowV['enlace_de_interes']."'>'".$rowV['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryW = "SELECT * FROM universidades WHERE pais like 'w%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowW['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowW['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowW['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowW['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowW['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowW['enlace_de_interes']."'>'".$rowW['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryX = "SELECT * FROM universidades WHERE pais like 'x%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowX['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowX['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowX['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowX['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowX['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowX['enlace_de_interes']."'>'".$rowX['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryY = "SELECT * FROM universidades WHERE pais like 'y%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowY['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowY['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowY['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowY['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowY['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowY['enlace_de_interes']."'>'".$rowY['enlace_de_interes']."'</a>";?></div>
                                                                                
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
                                    $queryZ = "SELECT * FROM universidades WHERE pais like 'z%';";
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
                                                                    <div class="card-body" style="font-size: 5mm;">
                                                                        <div><i class="fas fa-circle"></i>País:</br><?php echo $rowZ['pais']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowZ['programas']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowZ['descripcion']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowZ['fecha_habilitada']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowZ['fecha_vencimiento']; ?></div>
                                                                        <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                                        <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowZ['enlace_de_interes']."'>'".$rowZ['enlace_de_interes']."'</a>";?></div>
                                                                                
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
      $queryContinente1 = "SELECT * FROM universidades WHERE continente='1'";
      $queryContinente2 = "SELECT * FROM universidades WHERE continente='2'";
      $queryContinente3 = "SELECT * FROM universidades WHERE continente='3'";
      $queryContinente4 = "SELECT * FROM universidades WHERE continente='4'";
      $queryContinente5 = "SELECT * FROM universidades WHERE continente='5'";
      $resultContinente1 = mysqli_query($conn, $queryContinente1);
      $resultContinente2 = mysqli_query($conn, $queryContinente2);
      $resultContinente3 = mysqli_query($conn, $queryContinente3);
      $resultContinente4 = mysqli_query($conn, $queryContinente4);
      $resultContinente5 = mysqli_query($conn, $queryContinente5);
    ?>
    <!-- Accordion -->
    <div class="container-fluid bg-gray" id="accordion-style-1"> <!--COMIENZA CONTAINER-FLUID BG-GRAY-->
        <div class="container"> <!--COMIENZA CONTAINER-->
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
                                                <div class="card-body" style="font-size: 5mm;">
                                                    <div><i class="fas fa-circle"></i>País:</br><?php echo $rowresultContinente1['pais']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowresultContinente1['programas']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowresultContinente1['descripcion']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowresultContinente1['fecha_habilitada']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowresultContinente1['fecha_vencimiento']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowresultContinente1['enlace_de_interes']."'>'".$rowresultContinente1['enlace_de_interes']."'</a>";?></div>
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
                                                <div class="card-body" style="font-size: 5mm;">
                                                    <div><i class="fas fa-circle"></i>País:</br><?php echo $rowContinente2['pais']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowContinente2['programas']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowContinente2['descripcion']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowContinente2['fecha_habilitada']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowContinente2['fecha_vencimiento']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowContinente2['enlace_de_interes']."'>'".$rowContinente2['enlace_de_interes']."'</a>";?></div>
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
                                                <div class="card-body" style="font-size: 5mm;">
                                                    <div><i class="fas fa-circle"></i>País:</br><?php echo $rowContinente3['pais']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowContinente3['programas']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowContinente3['descripcion']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowContinente3['fecha_habilitada']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowContinente3['fecha_vencimiento']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowContinente3['enlace_de_interes']."'>'".$rowContinente3['enlace_de_interes']."'</a>";?></div>
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
                                                <div class="card-body" style="font-size: 5mm;">
                                                    <div><i class="fas fa-circle"></i>País:</br><?php echo $rowContinente4['pais']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowContinente4['programas']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowContinente4['descripcion']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowContinente4['fecha_habilitada']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowContinente4['fecha_vencimiento']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowContinente4['enlace_de_interes']."'>'".$rowContinente4['enlace_de_interes']."'</a>";?></div>
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
                                                <div class="card-body" style="font-size: 5mm;">
                                                    <div><i class="fas fa-circle"></i>País:</br><?php echo $rowContinente5['pais']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Programas:</br><?php echo $rowContinente5['programas']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Descripción:</br><?php echo $rowContinente5['descripcion']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Se encuentra desde:</br><?php echo $rowContinente5['fecha_habilitada']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Este convenio vence en:</br><?php echo $rowContinente5['fecha_vencimiento']; ?></div>
                                                    <div style="height: 2px;background-color: #FE4164;width: 50%;"></div>
                                                    <div><i class="fas fa-circle"></i>Enlaces de interés:</br><?php echo "<a href='".$rowContinente5['enlace_de_interes']."'>'".$rowContinente5['enlace_de_interes']."'</a>";?></div>
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
       } else {
          echo "no puedes acceder porque el código: " . $codigoAdmin . " no coincide con la constraseña";
          header("Location:mensajes/mensaje9.php");  
        }
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