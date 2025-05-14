<?php
 
    class Carro{
        public $Marca;
        public $Modelo;
        public $Combustivel;
        public $Portas;
        public $Capacidade_tanque;

        public function MostrarDados(){
            echo "marca: ".$this->Marca ."<br>";
            echo "modelo: ".$this->Modelo ."<br>";
            echo "combustivel: ".$this->Combustivel ."<br>";
            echo "portas: ".$this->Portas. "<br>";
            echo "capacidade do tanque: ".$this->Capacidade_tanque. "<br><hr>";
        }
    }





?>