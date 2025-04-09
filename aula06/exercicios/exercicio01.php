<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 - Aula 6</title>
</head>
<body>

    <style>
         h1{
            text-align: center;
        }
        
        table,tr,td,th{
            margin: auto;
            border: 3px solid purple;
            text-align: center;
        }
    </style>
    
    <h1>Exercício 01 - Aula 6</h1>

    
    <table>
        <tr>
            <th>Coluna nº1 </th>
            <th>Coluna nº2 </th>
            <th>Coluna nº3 </th>
            <th>Coluna nº4 </th>
        </tr>

        <?php 
        
            for ($i=1; $i <=8 ; $i++) { 
                if ($i % 2 == 0) {
                    echo "<tr style='background-color:rgb(126, 110, 231);'>";
                } else {
                    echo "<tr style='background-color:rgb(160, 69, 221);'>";
                }
        
                echo "
                    <td>Linha $i</td>
                    <td>Linha $i</td>
                    <td>Linha $i</td>
                    <td>Linha $i</td>
                </tr>";
            }
                
        
      ?>
    </table>

</body>
</html>