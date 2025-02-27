<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 03</title>
    </head>
    <body>
    <?php
         /*Faça um programa PHP que crie duas variáveis e atribua dois valores inteiros. 
         Apresente todas as operações: adição, subtração, divisão, multiplicação e resto da divisão utilizando 
         os operadores de atribuição.  */   
        
        $n= 4;
        $b= 7;

        //adição

        $adicao = $n + $b;
        echo "o resultado da adição é: ".$adicao."<br>";

        // subtração
        $subtracao = $n - $b;
        echo "o resultado da subtração é: ".$subtracao."<br>";

        // multiplicação
        $multiplicacao = $n * $b;
        echo "o resultado da multiplicação é: ".$multiplicacao."<br>";

        // divisão
        $divisao = $n / $b;
        echo "o resultado da divisão é: ".$divisao."<br>";

        // resto da divisão
        $resto = $n % $b;
        echo "resto da divisão é: ".$resto."<br>";


        
    ?>
    </body>
</html>