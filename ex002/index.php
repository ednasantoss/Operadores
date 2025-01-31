<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Variáveis</title>
</head>

<body>
    <h2>
        <?php
        //variavel do tipo string
        $sobrenome = "Santos";

        //variavel do tipo int 
        $idade = 22;

        //variavel do tipo float
        $peso = 50.6;

        //variavel do tipo boolean (verdadeiro ou falso)
        $casada = false;

        echo "$sobrenome $idade $peso ";

        //metodo 1: usando var _dump para exibir o valor booleano
        var_dump($casada); 

        //metodo 2: usando uma conversão booleana para string
        echo ($casada ? "casada" : 'não é casada'); 
        ?>


    </h2>
</body>

</html>