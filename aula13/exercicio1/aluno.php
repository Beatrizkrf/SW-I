<?php

    include_once 'Aluno.Class.php';

    $aluno = new Aluno ("Beatriz", 5, 10);
    $aluno->ConsultarNotas();
    echo "Média: " . $aluno->CalcularMedia(). "<br>";
    echo "Situação: " . $aluno->VerificarSituacao(). "<br>";

    $aluno2 = new Aluno ("Ana Clara", 10, 10);
    $aluno2->ConsultarNotas();
    echo "Média: " . $aluno2->CalcularMedia(). "<br>";
    echo "Situação: " . $aluno2->VerificarSituacao(). "<br>";

?>