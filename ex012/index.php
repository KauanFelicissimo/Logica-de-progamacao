<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While e Do While</title>
</head>
<body>
    <h2>while e do while   </h2>
    <?php 
    //while
   

    $i = 1;

    while ($i <= 5) {
        echo $i . "<br>"; //Imprime o valor de $i
        $i++; //i+1
        
    }
    //Mostrar somente números pares
    echo "<br>";
    $f = 2;

    while ($f <= 10){
        echo $f . "<br>";
        $f += 2; //Atribui de de 2 em 2
    }
    echo "<br>";
    
    //Do While
    $g = 1;
    do{
        echo $g . "<br>";
        $g ++;
    } while ($g <= 7); 

    
    ?>
</body>
</html>