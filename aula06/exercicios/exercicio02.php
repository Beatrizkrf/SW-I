<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 - Aula 6</title>
</head>
<body>
    
    <style>

         body{
            background-color: pink;
         }           
         h1,form{
            width:100%;
            text-align: center;
        }
        p{
            color:black;
            
        }

    </style>

    <h1>Exercício 02 - Aula 6</h1>

    <form action="processa02.php" method="POST">
        <p>Digite a quantidade de linhas: </p>
        <input type="number" name="linhas" id="">

        <br>

        <p>Digite a quantidade de linhas: </p>
        <input type="number" name="colunas" id="">

        <br><br>

        <input type="submit" value="Criar Tabela" id="">


    </form>

</body>
</html>