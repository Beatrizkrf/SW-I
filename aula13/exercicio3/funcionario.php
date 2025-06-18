<?php

    include_once 'Funcionario.class.php';
    $funcionario1 = new Funcionario("Beatriz", 3000);

    $funcionario1 ->exibirInformacoes();

    $funcionario1 -> aumentarSalario(20);

    $funcionario1 ->exibirInformacoes();



?>