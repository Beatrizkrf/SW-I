<?php

    class Lampada{

        //atributos
        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

        //metodos
        public function Ligar(){
            $this->Status = True;
        }

        public function Desligar(){
            $this->Status = False;
        }

        public function MostrarDados(){
            echo "fabricante: ". $this->Fabricante ."<br>";
            echo "tensão: ". $this->Tensao ."<br>";
            echo "potência: ". $this->Potencia ."<br>";
            echo "cor: ". $this->Cor ."<br>";

            if ($this->Status == True){
                echo "status: ligada <br><hr>";
            }else{
                echo "status: desligada <br><hr>";
            }
        }


    }

?>