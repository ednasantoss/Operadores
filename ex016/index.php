<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>

<body>
    <?php
    class Carro
    {
        //Propriedades ou atributos
        public $marca;
        public $modelo;
        public $ano;

        //Metodos (Função dentro da classe)
        public function exibirDetalhes()
        {
            echo "Marca " . $this->marca . "<br>";
            echo "Modelo " . $this->modelo . "<br>";
            echo "Ano " . $this->ano . "<br>";
        }
    }

    //Instância
    $meuCarro = new Carro();
    $meuCarro->marca = "Porsche";
    $meuCarro->modelo = "Cayenne";
    $meuCarro->ano = "2025";

    $meuCarro->exibirDetalhes(); // Exibir os detalhes do carro

    echo "<br>";

    //Nova Class
    class Pessoa
    {
        //Propieades ou Atributos
        public $nome;
        public $idade;

        //Metodo
        public function saudacao()
        {
            echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos. <br>";
        }
    }
    $sthepenCurry = new Pessoa();
    $sthepenCurry->nome = "Sthepen Curry";
    $sthepenCurry->idade = 36;

    $sthepenCurry->saudacao(); //Exibe a saudação com os dados do Curry
    ?>
</body>

</html>