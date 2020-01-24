<?php
    include('dbconnect.php');
    $nombre = $_POST['nombreUniversidad'];
    $pais = $_POST['pais'];
    $fecha_firma_convenio = $_POST['fecha_firma_convenio'];
    $programas = $_POST['programas'];
    $fecha_habilitada = $_POST['fecha_habilitada'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];
    $descripcion = $_POST['descripcion'];
    $enlaces_de_interes = $_POST['enlaces_de_interes'];
    $continente = null;
    $valor = $_POST['radioEstuDoce'];
    
    if(isset($_POST['submit_anadir_convenio'])){  
        //SELECCION DE LOS PROGRAMAS 
        $todosProgramas = null;
        for ($i=0;$i<count($programas);$i++){     
            echo "<br> Programas: " . $programas[$i];
            $todosProgramas = $programas[$i] . ", " .$programas[$i-1];
        }
        //PAISES
        if ($pais=="Afganistán") {$continente=3;} else if ($pais=="Albania") { $continente=4;} else if ($pais=="Alemania") { $continente=4;} else if ($pais=="Andorra") { $continente=4;} else if ($pais=="Angola") { $continente=1;
        } else if ($pais=="Antigua y Barbuda") { $continente=2;} else if ($pais=="Arabia Saudita") { $continente=3;} else if ($pais=="Argelia") { $continente=1;} else if ($pais=="Argentina") { $continente=2;} else if ($pais=="Armenia") { $continente=3;
        } else if ($pais=="Barbados") { $continente=2;} else if ($pais=="Baréin") { $continente=3;} else if ($pais=="Bélgica") { $continente=4;} else if ($pais=="Belice") { $continente=2;} else if ($pais=="Benín") { $continente=1;
        } else if ($pais=="Bielorrusia") { $continente=4;} else if ($pais=="Birmania") { $continente=3;} else if ($pais=="Bolivia") { $continente=2;} else if ($pais=="Bosnia-Herzegovina") { $continente=4;} else if ($pais=="Botsuana") { $continente=1;
        } else if ($pais=="Brasil") { $continente=2;} else if ($pais=="Brunéi") { $continente=3;} else if ($pais=="Bulgaria") { $continente=4;} else if ($pais=="Burkina Faso") { $continente=1;} else if ($pais=="Burundi") { $continente=1;
        } else if ($pais=="Bután") { $continente=3;} else if ($pais=="Cabo Verde") { $continente=1;} else if ($pais=="Camboya") { $continente=3;} else if ($pais=="Camerún") { $continente=1;} else if ($pais=="Canadá") { $continente=2;
        } else if ($pais=="Catar") { $continente=3;} else if ($pais=="Chad") { $continente=1;} else if ($pais=="Chile") { $continente=2;} else if ($pais=="China") { $continente=3;} else if ($pais=="Chipre") { $continente=4;
        } else if ($pais=="Colombia") { $continente=2;} else if ($pais=="Comoras") { $continente=1;}  else if ($pais=="Congo") { $continente=1;}  else if ($pais=="Corea del Norte") { $continente=3;}  else if ($pais=="Corea del Sur") { $continente=3;
        } else if ($pais=="Costa de Marfil") { $continente=1;} else if ($pais=="Costa Rica") { $continente=2;} else if ($pais=="Croacia") { $continente=4;} else if ($pais=="Cuba") { $continente=2;} else if ($pais=="Dinamarca") { $continente=4;
        } else if ($pais=="Dominica") { $continente=2;} else if ($pais=="Ecuador") { $continente=2;} else if ($pais=="Egipto") { $continente=1;} else if ($pais=="El Salvador") { $continente=2;} else if ($pais=="Emiratos Árabes Unidos") { $continente=3;
        } else if ($pais=="Eritrea") { $continente=1;} else if ($pais=="Eslovaquia") { $continente=4;} else if ($pais=="Eslovenia") { $continente=4;} else if ($pais=="España") { $continente=4;} else if ($pais=="Estados Unidos") { $continente=2;
        } else if ($pais=="Estonia") { $continente=4;} else if ($pais=="Etiopía") { $continente=1; } else if ($pais=="Filipinas") { $continente=3;} else if ($pais=="Finlandia") { $continente=4;} else if ($pais=="Fiyi") { $continente=5;
        } else if ($pais=="Francia") { $continente=4;} else if ($pais=="Gabón") { $continente=1;} else if ($pais=="Gambia") { $continente=1;} else if ($pais=="Georgia") { $continente=3;} else if ($pais=="Ghana") { $continente=1;
        } else if ($pais=="Granada") { $continente=2;} else if ($pais=="Grecia") { $continente=4;} else if ($pais=="Guatemala") { $continente=2;} else if ($pais=="Guinea") { $continente=1;} else if ($pais=="Guinea Ecuatorial") { $continente=1;
        } else if ($pais=="Guinea-Bisáu") { $continente=1;} else if ($pais=="Guyana") { $continente=2;} else if ($pais=="Haití") { $continente=2;} else if ($pais=="Honduras") { $continente=2;} else if ($pais=="Hungría") { $continente=4;
        } else if ($pais=="India") { $continente=3;} else if ($pais=="Indonesia") { $continente=3;} else if ($pais=="Irak") { $continente=3;} else if ($pais=="Irán") { $continente=3;} else if ($pais=="Irlanda") { $continente=4;
        } else if ($pais=="Islandia") { $continente=4;} else if ($pais=="Islas Marshall") { $continente=5;} else if ($pais=="Islas Salomón") { $continente=5;} else if ($pais=="Israel") { $continente=3;} else if ($pais=="Italia") { $continente=4;
        } else if ($pais=="Jamaica") { $continente=2;} else if ($pais=="Japón") { $continente=3;} else if ($pais=="Jordania") { $continente=3;} else if ($pais=="Kazajistán") { $continente=3;} else if ($pais=="Kenia") { $continente=1;
        } else if ($pais=="Kirguistán") { $continente=3;} else if ($pais=="Kiribati") { $continente=5;} else if ($pais=="Kosovo") { $continente=4;} else if ($pais=="Kuwait") { $continente=3;} else if ($pais=="Laos") { $continente=3;
        } else if ($pais=="Lesoto") { $continente=1;} else if ($pais=="Letonia") { $continente=4;} else if ($pais=="Líbano") { $continente=3;} else if ($pais=="Liberia") { $continente=1;} else if ($pais=="Libia") { $continente=1;
        } else if ($pais=="Liechtenstein") { $continente=4;} else if ($pais=="Lituania") { $continente=4;} else if ($pais=="Luxemburgo") { $continente=4;} else if ($pais=="Macedonia") { $continente=4;} else if ($pais=="Madagascar") { $continente=1;
        } else if ($pais=="Malasia") { $continente=3;} else if ($pais=="Malaui") { $continente=1;} else if ($pais=="Maldivas") { $continente=3;} else if ($pais=="Malí") { $continente=1;} else if ($pais=="Malta") { $continente=4;
        } else if ($pais=="Marruecos") { $continente=1;} else if ($pais=="Mauricio") { $continente=1;} else if ($pais=="Mauritania") { $continente=1;} else if ($pais=="México") { $continente=2;} else if ($pais=="Micronesia") { $continente=5;} else if ($pais=="Moldavia") { $continente=4;
        } else if ($pais=="Mónaco") { $continente=4;} else if ($pais=="Mongolia") { $continente=3;} else if ($pais=="Montenegro") { $continente=4;} else if ($pais=="Mozambique") { $continente=1;} else if ($pais=="Namibia") { $continente=1;
        } else if ($pais=="Nauru") { $continente=5;} else if ($pais=="Nepal") { $continente=3;} else if ($pais=="Nicaragua") { $continente=2;} else if ($pais=="Níger") { $continente=1;} else if ($pais=="Nigeria") { $continente=1;
        } else if ($pais=="Noruega") { $continente=4;} else if ($pais=="Nueva Zelanda") { $continente=5;} else if ($pais=="Omán") { $continente=3;} else if ($pais=="Países Bajos") { $continente=4;} else if ($pais=="Pakistán") { $continente=3;
        } else if ($pais=="Palaos") { $continente=5;} else if ($pais=="Palestina") { $continente=3;} else if ($pais=="Panamá") { $continente=2;} else if ($pais=="Papúa Nueva Guinea") { $continente=5;} else if ($pais=="Paraguay") { $continente=2;
        } else if ($pais=="Perú") { $continente=2;} else if ($pais=="Polonia") { $continente=4;} else if ($pais=="Portugal") { $continente=4;} else if ($pais=="Reino Unido") { $continente=4;} else if ($pais=="República Centroafricana") { $continente=1;
        } else if ($pais=="República Checa") { $continente=4;} else if ($pais=="República Democrática del Congo") { $continente=1;} else if ($pais=="República Dominicana") { $continente=2;} else if ($pais=="Ruanda") { $continente=1;} else if ($pais=="Rumania") { $continente=4;
        } else if ($pais=="Rusia") { $continente=4;} else if ($pais=="Samoa") { $continente=5;} else if ($pais=="San Cristóbal y Nieves") { $continente=2;} else if ($pais=="San Marino") { $continente=4;} else if ($pais=="San Vicente y las Granadinas") { $continente=2;
        } else if ($pais=="Santa Lucía") { $continente=2;} else if ($pais=="Santo Tomé y Príncipe") { $continente=1;} else if ($pais=="Senegal") { $continente=1;} else if ($pais=="Serbia") { $continente=4;} else if ($pais=="Seychelles") { $continente=1;
        } else if ($pais=="Sierra Leona") { $continente=1;} else if ($pais=="Singapur") { $continente=3;} else if ($pais=="Siria") { $continente=3;} else if ($pais=="Somalia") { $continente=1;} else if ($pais=="Sri Lanka") { $continente=3;
        } else if ($pais=="Suazilandia") { $continente=1;} else if ($pais=="Sudáfrica") { $continente=1;} else if ($pais=="Sudán") { $continente=1;} else if ($pais=="Sudán del Sur") { $continente=1;} else if ($pais=="Suecia") { $continente=4;
        } else if ($pais=="Suiza") { $continente=4;} else if ($pais=="Surinam") { $continente=2;} else if ($pais=="Tailandia") { $continente=3;} else if ($pais=="Taiwán") { $continente=3;} else if ($pais=="Tanzania") { $continente=1;
        } else if ($pais=="Tayikistán") { $continente=3; } else if ($pais=="Timor Oriental") { $continente=5;} else if ($pais=="Togo") { $continente=1;} else if ($pais=="Tonga") { $continente=5;} else if ($pais=="Trinidad y Tobago") { $continente=2;
        } else if ($pais=="Túnez") { $continente=1;} else if ($pais=="Turkmenistán") { $continente=3;} else if ($pais=="Turquía") { $continente=3;} else if ($pais=="Tuvalu") { $continente=5;} else if ($pais=="Ucrania") { $continente=4;
        } else if ($pais=="Uganda") { $continente=1;} else if ($pais=="Uruguay") { $continente=2;} else if ($pais=="Uzbekistán") { $continente=3; } else if ($pais=="Vanuatu") { $continente=5;} else if ($pais=="Vaticano") { $continente=4;
        } else if ($pais=="Venezuela") { $continente=2;} else if ($pais=="Vietnam") { $continente=3;} else if ($pais=="Yemen") { $continente=3;} else if ($pais=="Yibuti") { $continente=1;} else if ($pais=="Zambia") { $continente=1; } else if ($pais=="Zimbabue") { $continente=1;} else if ($pais=="Puerto Rico") { $continente=2;}


        
        if ($valor=="radioEst") {
            $query = "INSERT INTO universidades(nombre,pais,continente,fecha_firma_convenio,programas,fecha_habilitada,fecha_vencimiento,descripcion,enlace_de_interes,para_estudiantes,para_docentes)  VALUES('$nombre','$pais','$continente','$fecha_firma_convenio','$todosProgramas','$fecha_habilitada','$fecha_vencimiento','$descripcion','$enlaces_de_interes',true,false)";
            if (mysqli_query($conn, $query)) {
                echo "se añadio la universidad"; 
                //echo "<a href='".$enlaces_de_interes."'>$enlaces_de_interes</a>";
                header("Location:mensajes/mensaje7.php");      
            } else {
                echo "no se puedo añadir el programa";
            }
        } else if ($valor=="radioDoc") {
            $query = "INSERT INTO universidades(nombre,pais,continente,fecha_firma_convenio,programas,fecha_habilitada,fecha_vencimiento,descripcion,enlace_de_interes,para_estudiantes,para_docentes)  VALUES('$nombre','$pais','$continente','$fecha_firma_convenio','$todosProgramas','$fecha_habilitada','$fecha_vencimiento','$descripcion','$enlaces_de_interes',false,true)";
            if (mysqli_query($conn, $query)) {
                echo "se añadio la universidad";  
                header("Location:mensajes/mensaje7.php");      
            } else {
                echo "no se puedo añadir el programa";
            }
        } else if ($valor=="radioEstDoc") {
            $query = "INSERT INTO universidades(nombre,pais,continente,fecha_firma_convenio,programas,fecha_habilitada,fecha_vencimiento,descripcion,enlace_de_interes,para_estudiantes,para_docentes)  VALUES('$nombre','$pais','$continente','$fecha_firma_convenio','$todosProgramas','$fecha_habilitada','$fecha_vencimiento','$descripcion','$enlaces_de_interes',true,true)";
            if (mysqli_query($conn, $query)) {
                echo "se añadio la universidad";  
                header("Location:mensajes/mensaje7.php");      
            } else {
                echo "no se puedo añadir el programa";
            }
        }
        
    } else {
      echo "no entra";
    }

?>