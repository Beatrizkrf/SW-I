<?php 
    $email = $_POST ['email'];
    $senha = $_POST ['senha'];

    if ($email == "aluno@email.com" && $senha == "1234"){
        //manda para autorizado.php
        //echo "AUTORIZADO";
        $nome = "Aluno";
        header ('Location: painel/autoriza.php?nome=' .$nome);
       
        

    }else{
        //manda para naoautorizado.php
        //echo "NAO AUTORIZADO";
        header('Location: painel/naoautorizado.php');
    }
?>
