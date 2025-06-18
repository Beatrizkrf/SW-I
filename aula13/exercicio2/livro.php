<?php

     include_once 'Livro.class.php';
    $livro = new Livro('Jantar Secreto','Raphael Montes',true);

    echo "Status do livro:  <br>";
    echo $livro->ExibirStatus();
    echo "<hr>";
    

?>