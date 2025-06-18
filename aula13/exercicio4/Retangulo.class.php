<?php

    class Retangulo {

        private $largura;
        private $altura;

        // métodos para definir valores
        public function setLargura($largura) {
            $this->largura = $largura;
        }

        public function setAltura($altura) {
            $this->altura = $altura;
        }

        // métodos para obter valores
        public function getLargura() {
            return $this->largura;
        }

        public function getAltura() {
            return $this->altura;
        }

        public function calcularArea() {
            return $this->getLargura() * $this->getAltura();
        }

        public function calcularPerimetro() {
            return 2 * ($this->getLargura() + $this->getAltura());
        }

        public function exibirResultados() {
            echo "Área do retângulo é: " . $this->calcularArea() . "<br>";
            echo "Perímetro do retângulo é: " . $this->calcularPerimetro() . "<br><hr>";
        }
    }
?>
