<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Desconto</title>
</head>
<h2>Calculadora de Desconto</h2>
<body>
    <?php 
    $valor_original = 400.59;
    $desconto = 30;

    echo "valor original: $valor_original <br> desconto: $desconto% <br>";

    $valor_com_desconto = $valor_original - ($valor_original / 100 * $desconto);

    $valor_arredondado = round ($valor_com_desconto, 2);

    echo "valor descontado: $valor_arredondado"


    ?>
    
</body>
</html>
    
    