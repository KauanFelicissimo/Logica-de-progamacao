<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição</title>
</head>
<body>
    <h2>Operadores de atribuição</h2>
    <?php
    //string
    $rua = "Rua Amador Bueno";
    //Atribuição com concatenação
    $rua .= " na Cidade de São Paulo";
 
    //float
    $preco = 2.45;
    //Atribuição de soma
    $preco += 2.30;
    //Atruibuição de subtração
    $preco -= 1.30;
   
    //Formata o número para usar vírgula como separador decimal
    $preco_formatado = number_format($preco, 2, ',', '.');
   
    //Exibe o resultado - por interpolaçao
    echo "$rua, <br> preço R$ $preco_formatado";
 
    ?>
</body>
</html>