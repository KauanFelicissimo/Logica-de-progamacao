<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php 
    function saudacao(){
        echo "Olá, seja bem-vindo ao PHP!";
    }
    
    saudacao(); //Chamando a função
    
    echo "<br>";
    function soma($a, $b){
        return $a + $b;
    }

    $resultado = soma(5, 3); //Chamando a função e passando os argumentos
    echo "O resultado da soma: " . $resultado; //Saída 

    echo "<br>";
    $Resultado1 = soma(8, -2);
    echo "O resultado da soma: " . $Resultado1; //Saída

    echo "<br>";
    function saudacaoPersonalizada ($nome = "Visitante"){
        echo "Olá $nome! Bem-vindo ao PHP!";
    }

    saudacaoPersonalizada(); //Chamada sem argumento, usa o valor padrão
    echo "<br>";    
    
    saudacaoPersonalizada("Carlos"); //Chamada com argumento, usa o valor passado
    ?>
</body>
</html>