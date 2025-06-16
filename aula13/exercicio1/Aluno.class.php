<?php

    class Aluno{
        private $Nome;
        private $Nota1;
        private $Nota2;


        public function __construct($nome, $nota1 = 0, $nota2 = 0){
            $this ->Nome = $nome;
            $this ->Nota1 = $nota1;
            $this ->Nota2 = $nota2;
        }

        //getters

        public function getNome(){
            return $this -> Nome;
        }

        public function getNota1(){
            return $this ->Nota1;
        }

        public function getNota2(){
            return $this ->Nota2;
        }

        //setters

        public function setNome($nome){
             $this -> Nome = $nome;
        }

        public function setNota1($nota1){
             $this ->Nota1 = $nota1;
        }

        public function setNota2($nota2){
             $this ->Nota2 = $nota2;
        }

        //metodos

        public function CalcularMedia(){
            return ($this->Nota1 + $this->Nota2) /2;
        }


        public function VerificarSituacao(){
            $media = $this->CalcularMedia();
            if ($media >= 7){
                $resultado = "Aprovado <br><hr>";
                return $resultado;
            }else {
                $resultado = "Reprovado <br><hr>";
                return $resultado;
            } 
        }

        public function ConsultarNotas(){
            echo "Nome: ". $this->Nome ."<br>";
            echo "Nota 1: ". $this->Nota1 ."<br>";
            echo "Nota 2: ". $this->Nota2 ."<br>";
        }

    }

    





?>