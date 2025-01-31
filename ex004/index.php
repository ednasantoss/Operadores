<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>

<body>
    <h1>Operadores Aritméticos</h1>
    <?php
    $soma = 20 + 20;
    $subtracao = 10 - 5;
    $divisao = 5 / 2;
    $resto = 5 % 2;
    $multiplicacao = 5 * 3;
    $potenciacao = 2 ** 3;

    echo "resultado da soma é $soma <br>";
    echo "resultado da subtração é $subtracao <br>";
    echo "resultado da divisão é $divisao <br>";
    echo "resultado da resto é $resto <br>";
    echo "resultado da multiplicação é $multiplicacao <br>";
    echo "resultado da potenciação é $potenciacao <br>";
    echo "resultado da tantofaz é $tantofaz <br>";

    /* ordem de grandeza
    primeiro = () parênteses
    fora do parênteses se calcula na ordem
    segundo = potenciação
    terceiro = multiplicação
    quarto = divisão
    quinto = soma
    sexto = subtração 
    */

      //Primeira expressão: (3 + 2) * 4
      $valor1 = (3 + 2) * 4;

      $a = 3;
      $b = 2;
      $c = 4;
      $calculo = ($a + $b) * $c;
  
      //Segunda expressão: (2 * (2 + (2 - 1))) + 8 * 2
      $valor2 = (2 * (2 + (2 - 1))) + 8 * 2;
  
  
      // Exibindo os resultados - concatenação
      echo "Resultado da primeira expressão: " . $valor1 . "<br>";
      echo "Resultado da segunda expressão: " . $valor2 . "<br>";
      echo "Resultado do cálculo das variáveis" . $calculo . "<br>";

    ?>

</body>

</html>