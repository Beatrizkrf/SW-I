<?php

    class Funcionario{

        private $Nome;
        private $Salario;

        public function __construct($nome, $salario ){
            $this->Nome = $nome;
            $this->Salario = $salario;
        }

        public function getSalario(){
        return $this->Salario;
        }

        public function getNome(){
        return $this->Nome;
        }

        public function aumentarSalario($porcentagem){
            if ($porcentagem > 0){
                $aumenta_sal = $this ->Salario * ($porcentagem/100);
                $this->Salario += $aumenta_sal;
                echo "Seu salário foi aumentado em:  {$porcentagem}%.<br>";
            }else{
                echo "Inválido! <br>";
            }
        }

        public function exibirInformacoes(){
            echo "Nome: " . $this->Nome . " | Salário - R$ " . $this->Salario . "<br><hr>";
        }





    }





?>