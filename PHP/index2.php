<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Vectores</title>
</head>
<body>
      <form action="" method="GET">
    <h1>Estudiantes</h1>
    
    <?php
   
     $suma = 0;
     $mayor = 0;
     $totaln = 0;
     $totalneg =0;
     $apro = 0;
     $repro = 0;
     $f=0;
     $d=0;
     $c = 0;
     $b = 0;
     $a = 0;
     
     

     
       
               // vectores en forma ascendente
$enviar = $_REQUEST['enviar']; 
if (isset($enviar)) {
    
   echo "<p><h3>estudiantes en forma ascendente </h3></p>";
    
    // estudiantes en forma ascdente
    $aaa = $_REQUEST['vector1'];
        rsort($aaa);
        
         foreach ($aaa as $vector) {
            print ("<p>$vector</p>"); 
        }
    
       
        
        
   
        
        
   // calculo promedio
foreach ($_POST['vector2'] as $vectores) {
    $suma += $vectores;
}
$promedio = $suma / 10;



    
    // estudiantes aprovados
    
    foreach ($_POST['vector2'] as $vector) {
    if ($vector>=71)
    $apro += 1;
  }
  echo "<p>cantidad de estudiantes aprovados: $apro</p>";
  
  
    // estudiantes reprovados
    
    foreach ($_POST['vector2'] as $vector) {
    if ($vector<=70)
    $repro += 1;
  }
  echo "<p>cantidad de estudiantes reprovados: $repro</p>";
  
  
  
  // cantidad de F
    
    foreach ($_POST['vector2'] as $vector) {
    if ($vector >=0 AND $vector <=60)
    $f+= 1;
  
   // cantidad de D
    else if  ($vector >=61 AND $vector <=70)
    $d+= 1;
  
   // cantidad de C
    

    else if ($vector >=71 AND $vector <=80)
    $c+= 1;

   // cantidad de B
    
   
    else if ($vector >=81 AND $vector <=90)
    $b+= 1;

  
  // cantidad de A
    
  
    else if ($vector >=91 AND $vector <=100)
    $a+= 1;
    
    
  }
  
 
  
    echo "<p>cantidad de A del grupo: $a</p>";
      echo "<p>cantidad de B del grupo: $b</p>";
        echo "<p>cantidad de C del grupo: $c</p>";
          echo "<p>cantidad de D del grupo: $d</p>";
            echo "<p>cantidad de F del grupo: $f</p>";
            echo "<p>promedio del grupo: $promedio</p>";
            
            
            
            // problemas con las funciones y el foreach asi que saque el if de la funcion 
            
              if ($promedio >= 0 AND $promedio <= 60) {
            $letra = "F";
        }

        // cantidad de D
        else if ($promedio >= 61 AND $promedio <= 70) {
            $letra = "D";
        }

        // cantidad de C
        else if ($promedio >= 71 AND $promedio <= 80) {
            $letra = "C";
        }

        // cantidad de B
        else if ($promedio >= 81 AND $promedio <= 90) {
            $letra = "B";
        }


        // cantidad de A
        else if ($promedio >= 91 AND $promedio <= 100) {
            $letra = "A";
        }

     echo "<p>promedio del grupo: $letra</p>";
  

}

echo "<p><h1>notas en forma ascendente </h1></p>";
        //notas top
$aa = $_REQUEST['vector2'];
        rsort($aa);
        
         foreach ($aa as $vector) {
            print ("<p>$vector</p>"); 
        }

               

     
    ?>
      </form>
</body>
</html>