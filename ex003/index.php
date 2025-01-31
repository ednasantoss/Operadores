<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios e Variavel dentro de outra Variavel</title>
</head>

<body>
    <h2>Variavel dentro de outra Variavel</h2>
    <?php
    //para comentario de uma linha eu uso o barra e barra

    /* 
    eu uso 
para comentar
varias linhas
ao mesmo tempo*/

    $nome = "Edna";
    $sobrenome = "Santos";

    //a variavel abaixo recebe uma interpolação
    $frase = "Seu nome é $nome, seu sobrenome é $sobrenome";

    echo "$frase";
    ?>
</body>

</html>