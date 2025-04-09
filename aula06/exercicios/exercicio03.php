<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 - Aula 6</title>
</head>
<body>
<style>
         h1{
            text-align: center;
        }

    .cosmeticos { 
        background-color:rgb(164, 145, 250); 
    }

    .eletrodomestico { 
        background-color:rgb(145, 134, 247); 
    }

    .papelaria { 
        background-color:rgb(125, 94, 235); 
    }

    .alimento { 
        background-color:rgb(115, 105, 206); 
    }
    
    .construcao { 
        background-color:rgb(117, 64, 214); 
    }

    .roupa { 
        background-color:rgb(127, 76, 175); 
    }

    .sapato { 
        background-color:rgb(58, 36, 136); 
    }

    table {
        width: 90%;
        margin: auto;
        border-collapse: collapse;
    }

    th, td {
        border: 3px solid white;
        padding: 15px;
        text-align: center;
    }

    th {
        background-color: purple;
        color: white;
    }
        
       
    </style>
    
    <h1>Exercício 03 - Aula 6</h1>


    
    <table>
        <tr>
            <th>Nome: </th>
            <th>Preço: </th>
            <th>Categoria: </th>
           
        </tr>

        <?php
            $dados=[
                ["nome" => "perfume", "preco" => "R$450,60", "categoria" => "cosmeticos"],
                ["nome" => "geladeira", "preco" => "R$4570,07", "categoria" => "eletrodomestico"],
                ["nome" => "caderno", "preco" => "R$54,90", "categoria" => "papelaria"],
                ["nome" => "sorvete", "preco" => "R$35,60", "categoria" => "alimento"],
                ["nome" => "piso", "preco" => "R$44,00", "categoria" => "construcao"],
                ["nome" => "vestido", "preco" => "R$124,00", "categoria" => "roupa"],
                ["nome" => "sandalia", "preco" => "R$150,55", "categoria" => "sapato"],
            ];
                
            foreach ($dados as $produto) {
                echo "<tr class='{$produto ['categoria']}'>";
                echo "<td>{$produto ['nome']}</td>";
                echo "<td>R$ {$produto ['preco']}</td>";
                echo "<td>{$produto ['categoria']}</td>";
                echo "</tr>";
            
            };
        ?>    
    </table>    
    </body>
</html>