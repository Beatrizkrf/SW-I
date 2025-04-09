<?php
    $linha = $_POST['linhas'];
    $coluna = $_POST['colunas'];


    echo"<table>";
    
        $i = 1;
        while ($i <= $linha) {
        echo "<tr>";

        $j = 1;
        while ($j <= $coluna) {
            echo "<td> Linha $i, Coluna $j</td>";
            $j++;
        }

         echo "</tr>";
        $i++;
    }
        
    
        echo"</table>";



?>     

<style>

         table{
            margin: auto;
            width: 50%;
            border-collapse: collapse;
            text-align: center;
         }

         h1{
            text-align: center;
        }
        
        td,th{
            margin: auto;
            border: 3px solid pink;
            text-align: center;
            padding: 5%;
        }
    
</style>