<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço e foreach</title>
</head>
<body>
    <?php
    echo "<br>For<br>";
    //For
    for($i = 1; $i <= 5; $i++){
        echo $i . "<br>"; //Imprime o valor de $i e pula para  próxima linha  
    }
    echo "<br>";
    
    for ($a = 1; $a <= 5; $a++){
        echo "O quadrado de $a é: " . ($a * $a) . "<br>";
    }

    echo "<br>Foreach<br>";
    //Foreach
    $frutas = array("Maçã", "Banana", "Laranja", "Uva");

    foreach ($frutas as $fruta){
        echo $fruta . "<br>"; //Imprime o nome de cada fruta
    }

    echo "<br>";
    $idades = [
        "João" => 25,
        "Maria" => 30,
        "Pedro" => 35
    ];

    foreach ($idades as $nome => $idade ){
            echo "$nome tem $idade anos <br>"; //exibe o nome e idade
    }
    
    ?>
</body>
</html>