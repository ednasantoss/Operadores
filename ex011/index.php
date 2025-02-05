<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array e Matriz</title>
</head>

<body>
    <?php

    //Criando um array associativo
    $associativo = [
        "nome" => "João",
        "idade" => 30,
        "cidade" => "São Paulo"
    ];
    print_r($associativo);

    echo "<br>";
    //Exibindo o array associativo
    echo "Array Associativo: ";
    print_r($associativo["nome"]); //acessando o nome joão 

    echo "<br>";
    //Acessando o primeiro valor 
    $primeiroValor = reset($associativo);
    echo $primeiroValor;

    echo "<br>";
    //Criando um array multidirecional
    $multidirecional = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    //Exibindo o valor na posição [1] [2] (4, 5, 6) -> 6
    echo "Valor na posição [1] [2]: " . $multidirecional[1][2];

    echo "<br>";
    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];
    //Mesclando Array
    $novoArray = array_merge($array1, $array2);

    //Exibindo Array
    echo "Array mesclado";
    print_r($novoArray);

    echo "<br>";
    $array = [10, 20, 30, 40];
    //Procurando o valor 30 no array
    $indice = array_search(30, $array);
    //Exibindo o indice onde o valor foi encontrado
    echo "O indice do valor 30 é: " . $indice;

    echo "<br>";
    //Verificando se o valor 25 está no array
    $existe = in_array(25, $array);

    //Exibindo se o valor existe ou não
    if ($existe) {
        echo "O valor 25 está no array. ";
    } else {
        echo "O valor 25 não está no array.";
    }

    echo "<br>";
    //Matriz 3x2
    $matriz = [
        [1, 2],
        [4, 5],
        [7, 8]
    ];

    //Acessando elementos da matriz    
    echo "<br>";
    echo "Elemento na posição[0][1]: " . $matriz[0][1] . "<br>";
    echo "Elemento na posição[2][0]: " . $matriz[2][0] . "<br>";
    ?>
</body>

</html>