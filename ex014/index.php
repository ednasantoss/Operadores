<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>

<body>
    <?php
    function saudacao()
    {
        echo "Olá, seja bem vindo ao php!";
    }
    saudacao(); //Chamando a função

    echo "<br>";

    function somar ($a, $b){
        return $a + $b;
    }
    $resultado = somar(5,3); //Chamando a função e passando argumentos
    echo "Resultado da soma: " . $resultado; //Saida

    echo "<br>";
    $resultado1 = somar(8, -2); 
    echo "Resultado da soma: " . $resultado1; //Saida

    echo "<br>";
    function saudacaoPersonalizada($nome = "Visitante"){
        echo "Olá $nome! Bem vindo ao PHP";
    }
    saudacaoPersonalizada(); //Chamada sem argumento, usa o valor padrão
    echo "<br>";
    saudacaoPersonalizada("Stephen Curry"); //Chamada com argumento
    ?>
</body>

</html>