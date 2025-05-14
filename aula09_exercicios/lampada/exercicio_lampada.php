<?php

    //adc outra pagina 
    include_once 'Lampada.class.php';

    //criando objeto

    $lamp1 = new Lampada();
    $lamp2 = new Lampada();

    //valores lamp1

    $lamp1->Fabricante = "philips";
    $lamp1->Tensao = 110;
    $lamp1->Potencia = 50;
    $lamp1->Cor = "branca";

    // colocando valores lamp1
    $lamp2->Fabricante = "osram";
    $lamp2->Tensao = 220;
    $lamp2->Potencia = 30;
    $lamp2->Cor = "azul";

    //funçoes

    $lamp1->Ligar();
    $lamp1->MostrarDados();

    $lamp2->Desligar();
    $lamp2->MostrarDados();


?>