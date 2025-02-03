<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php 
    //criação de array indexado
    $array = [10, 20, 30, 40];

    //exibindo o array 
    echo "array original: ";
    print_r($array); //print_r() exibe o array de forma legivel
    
    echo "<br>";
    //adicionando um valor final array
    $array[] = 50;

    //exibindo o array atualizado
    echo "array após adicionar 50: ";
    print_r($array); 

    echo "<br>";
    //Alterando o valor na posição 1 para 25
    $array [1] = 25;
    
    echo "array após alterar o valor na posição 1 para 25: ";
    print_r($array);

    echo "<br>";
    //Removendo o valor na índice 2
    unset($array[2]);

    echo "array sem reorganizar os indices: ";
    print_r($array);
    echo "<br>";
    //Reorganizando os índices no array
    $array = array_values($array);
    
    //exibindo o array após remover o índice
    echo "Aarray após remover o valor no índice2: ";
    print_r($array);

    echo "<br>";
    $array[] = 19;

    //Ordenando o array
    sort($array);

    //exibindo o array ordenado
    echo "Array após ordenar os valores: ";
    print_r($array);


    ?>
</body>
</html>