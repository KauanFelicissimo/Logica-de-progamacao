<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COnversor de Temperatura</title>
</head>
<h2>Conversor de Temperatura</h2>
<body>
<?php 



$celsius = 30 ;

const valor = 9 / 5 ;

$conversão = ($celsius * valor) + 32;

echo "temperatura em C°: $celsius <br>";
echo "temperatura em Farenheit: $conversão";






?>
    
</body>
</html>