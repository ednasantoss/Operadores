<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While and Do While</title>
</head>
<body>
    <?php 
    //While 
    $i = 1;
    while($i <= 5){
        echo $i . "<br>";
        $i++;
    }

    echo "<br>";
    //Mostrar somente numeros pares
    $f= 2;
    while($f <= 10){
        echo $f . "<br>";
        $f += 2; //Atribuindo o valor de 2 em 2
    }

    echo "<br>";
    //Do While
    $g = 1;
    
    do {
        echo $g . "<br>";
        $g++;
    } while ($g <= 7); 
    ?>
</body>
</html>