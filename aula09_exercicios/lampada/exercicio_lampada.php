<?php

    //adc outra pagina 
    include_once 'Lampada.class.php';

    //criando objeto

    $lamp1 = new Lampada();
    $lamp2 = new Lampada();

    //valores lamp1

    $lamp2->Fabricante = "Osram";
    $lamp2->Tensao = 220;
    $lamp2->Potencia = 30;
    $lamp2->Cor = "Azul";

    // valores lamp2
    $lamp2->Fabricante = "Philips";
    $lamp2->Tensao = 110;
    $lamp2->Potencia = 11;
    $lamp2->Cor = "branca";

    //funçoes

    $lamp1->Ligar();
    $lamp2->MostrarDados();

    $lamp1->Desligar();
    $lamp2->MostrarDados();


?>