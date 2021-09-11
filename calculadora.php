<?php
    $enviado = false;
    if(isset($_GET["n1"])){
        $enviado=true;
        $r = $_GET;
        $n1 = $r["n1"];
        $n2 = $r["n2"];
        $operacion = $r["operacion"];

        switch ($operacion) {
            case 'Resta':
               $resultado = $n1-$n2;
                break;
            case 'Multiplicación':
                $resultado = $n1*$n2;
                break;
            case 'Division':
                $resultado = $n1/$n2;
                break; 
            default:
                $resultado =$n1+$n2;
                break;
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>         CALCULADORA         </h1>
    <form method="get" action="calculadora.php"> 

    <br><label for=""> Numero 1 </label>
        <input type="number" name="n1">  
    
    <label for=""> Numero 2 </label>
    <input type="number" name="n2">      

   
    <br><br> <label for=""> Elija un tipo de operación </label>
        <select name="operacion"> 
            <option>Suma</option> 
            <option>Resta</option> 
            <option>Multiplicación</option> 
            <option>Division</option>
        </select>  

        <br><br> <button type="submit"> Calcular </button>
    </form> 

    <?php if($enviado){ ?>
   
   <hr>       
   <h3><?php  echo $resultado;  ?></h3>


   <?php } ?> 
</body>
</html>