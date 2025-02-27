<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 02</title>
    </head>
    <body>
    <?php
         /*Faça um programa PHP que defina uma constante PI com valor 3.141592. Crie uma variável, atribua um 
         valor que represente o raio de uma esfera. Calcule e apresente sua área e seu volume, dados pelas 
         fórmulas:  */   
        
        $raio = 5;
        define("pi",3.141592);
        $area= 4 * pi * $raio * $raio;
        $volume = 4/3 * pi * $raio * $raio *$raio;

        echo "A area é $area <br>";
        echo "O volume é $volume <br>";
        
        ?>

    </body>
</html>