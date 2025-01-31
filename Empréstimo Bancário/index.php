<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprestimo Bancario</title>
</head>
<body>
<?php
// Definir os valores
$valorEmprestimo = 1000; // Valor do empréstimo
$taxaJuros = 0.20; // Taxa de juros de 20% (em decimal)
$numParcelas = 5; // Número de parcelas

// Calcular o valor com juros


$valorComJuros = $valorEmprestimo * (1 + $taxaJuros);

// Calcular o valor de cada parcela
$valorParcela = $valorComJuros / $numParcelas;

// Exibir os resultados
echo "Valor do empréstimo: R$ " . number_format($valorEmprestimo, 2, ',', '.') . "<br>";
echo "Taxa de juros: " . ($taxaJuros * 100) . "%<br>";
echo "Valor total com juros: R$ " . number_format($valorComJuros, 2, ',', '.') . "<br>";


echo "Número de parcelas: " . $numParcelas . "<br>";
echo "Valor de cada parcela: R$ " . number_format($valorParcela, 2, ',', '.') . "<br>";
?>
</body>
</html>
