<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Logicos</title>
</head>

<body>
    <?php
    $idade = 20;
    $tem_cnh = true;

    echo ($idade >= 18 and $tem_cnh) ? "Você pode dirigir." : "Voce não pode dirigir.";

    echo "<br>";

    $tem_ingresso = false;
    $tem_cortesia = true;
    echo ($tem_ingresso or $tem_cortesia) ? "Você pode entrar na festa." : "Você não pode entrar na festa.";

    echo "<br>";

    //utilizando os simbolos && para and e || para or
    $sol = true;
    $sem_chuva = false;
    $feriado = true;

    echo ($sol && $sem_chuva || $feriado) ? "Você pode sair para passear." : "Você não pode sair para passear.";
    ?>
</body>

</html>