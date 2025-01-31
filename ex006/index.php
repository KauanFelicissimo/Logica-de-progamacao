<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Logicos</title>
</head>
<body>
    <?php 
    
    $idade = 20;
    $tem_cnh = true;

    echo ($idade >= 18 and $tem_cnh) ? "Você pode dirigir. <br>" : "Você não pode dirigir. <br>";

    $tem_ingresso = false;
    $tem_corteseia = true;

    echo ($tem_ingresso or $tem_corteseia) ? "Você pode entrar na festa.<br>" : "Você não pode entrar na festa.<br>";

    //utilizando os silbolos && (para and) e || (para or)

    $sol = true;
    $sem_chuva = false;
    $feriado = true;

    echo ($sol && $sem_chuva || $feriado) ? "Você pode passear. <br>" : "Melhor ficar em casa. <br>" ;



    
    ?>
</body>
</html>