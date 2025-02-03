<!DOCTYPE html>
<html lang="en">

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
    echo "Array original: ";
    print_r($array); //exibe o array de forma legivel

    echo "<br>";
    //adicionando um valor ao final array
    $array[] = 50;
    //exibindo o array atualizado
    echo "Array após adicionar 50: ";
    print_r($array);

    echo "<br>";
    //Alterando o valor na posição 1 para 25
    $array[1] = 25;

    echo "Array  após alterar o valor na posição 1 para 25: ";
    print_r($array);

    echo "<br>";
    //removendo o valor na indice 2
    unset($array[2]);
    echo "Array após remover o valor indice 2: ";
    print_r($array);
    echo "<br>";
    //Reorganizando os indices do array 
    $array = array_values($array);

    //Exibindo o array após reorganizar o indice
    echo "Array após reorganizar o valor no indice 2: ";
    print_r($array);

    echo "<br>";
    $array[] = 19;

    //Ordenando o array de forma crescente
    sort($array);
    //Exibindo o array ordenado
    echo "Array após ordenar os valores: ";
    print_r($array);
    ?>
</body>

</html>