<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e objetos</title>
</head>
<body>
    <?php 
     class Pokemon{
        //Propriedades ou atributos
        public $raridade;
        public $região;
        public $tipos;

        //métodos (função dentro da classe)
        public function exibirDetalhes(){
            echo "Raridade: " . $this->raridade . "<br>";
            echo "Região: " . $this->região . "<br>";
            echo "Tipos: " . $this->tipos . "<br>";
        }
     }   
      //Instância
      $krookodile = new Pokemon();
      $krookodile->raridade = "Raro";
      $krookodile->região = "Unova";
      $krookodile->tipos = "Noturno/Terra";
      
      $krookodile->exibirDetalhes();//Exibir detalhes do Pokémon
      
      
    echo "<br>";


    //Nova classe
    Class Pessoa{
        public $nome;
        public $idade;
       

        public function saudacao(){
            echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos."; 
    
        }
    }
    
    $joao = new Pessoa();
    $joao->nome = "João";
    $joao->idade = 30;

    $joao->saudacao(); // Exibe a saudação com os dados do João

    echo "<br>";

    
    ?>
</body>
</html>