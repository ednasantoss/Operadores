<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula de php</title>
</head>

<body>
    <h2>
        <?php

        //declarando uma variavel 
        $nome = "Edna";
        $sobrenome = "Santos";

        //variavel pode ser mudada
        $nome = "Edna Vale";

    
        // quebra de linha
        echo "<br> <br>";

        // declarando uma constante
        const time = "são paulo";
         

        echo "seja bem-vinda, $nome $sobrenome <br> <br> meu time é " . time;


        ?>

    </h2>
</body>

</html>