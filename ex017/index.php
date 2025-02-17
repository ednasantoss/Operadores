<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construtor e Destrutor</title>
</head>

<body>
    <?php
    class Produto
    {
        //atributos
        public $nome;
        public $preco;

        //Construtor: Chamado quando o objeto é criado
        public function __construct($nome, $preco)
        {
            $this->nome = $nome;
            $this->preco = $preco;
            echo "Produto '$this->nome' criado com sucesso! <br>";
        }
    }

    //Criando um objeto
    $produto1 = new Produto("Camiseta", 39.90); //Costrutor chamado aqui
    $produto2 = new Produto("Tênis", 300.00); //Costrutor chamado aqui
    ?>
</body>

</html>