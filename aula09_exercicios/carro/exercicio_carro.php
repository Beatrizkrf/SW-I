<?php

    include_once 'Carro.class.php';

    $carro1 = new Carro();
    $carro2 = new Carro();
    $carro3 = new Carro();
    $carro4 = new Carro();
    $carro5 = new Carro();

    $carro1->Marca = "Fiat";
    $carro1->Modelo = "Siena";
    $carro1->Combustivel = "Gasolina";
    $carro1->Portas = 4;
    $carro1->Capacidade_tanque = 48;

    $carro2->Marca = "Honda";
    $carro2->Modelo = "Civic";
    $carro2->Combustivel = "Gasolina";
    $carro2->Portas = 4;
    $carro2->Capacidade_tanque = 56;

    $carro3->Marca = "Fiat";
    $carro3->Modelo = "Fiat500";
    $carro3->Combustivel = "Gasolina";
    $carro3->Portas = 2;
    $carro3->Capacidade_tanque = 40;

    $carro4->Marca = "Volkswagen";
    $carro4->Modelo = "T-Cross";
    $carro4->Combustivel = "Gasolina";
    $carro4->Portas = 4;
    $carro4->Capacidade_tanque = 50;

    $carro5->Marca = "Toyota";
    $carro5->Modelo = "Corolla";
    $carro5->Combustivel = "Gasolina";
    $carro5->Portas = 4;
    $carro5->Capacidade_tanque = 50;


    $carro1->MostrarDados();
    $carro2->MostrarDados();
    $carro3->MostrarDados();
    $carro4->MostrarDados();
    $carro5->MostrarDados();

?>