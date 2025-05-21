<?php

        class Produtos{
            private $Nome;
            private $Preco;
            private $Quantidade;

            //construtor
            public function __construct($nome_produto, $preco_produto, $quant_produto=0) {
                $this ->Nome = $nome_produto;
                $this ->Preco = $preco_produto;
                $this ->Quantidade = $quant_produto;
            }

             //MÉTODOS

            //getters 
            public function getNome(){
                return $this ->Nome;
            }

            public function getPreco(){
                return $this ->Preco;
            }


            //setters

            public function setNome($nome_produto){
                 $this ->Nome= $nome_produto  ;
            }

            public function setPreco($preco_produto){
                 $this ->Preco= $preco_produto ;
            }

        
            public function AdicionarEstoque($quant){
                $this->Quantidade += $quant;
            }

            public function RemoverEstoque($quant){

            }

            public function MostrarDetalhes(){

            }


        }



?>