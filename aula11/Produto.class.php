<?php 
    class Produto{

        private $Nome;
        private $Preco;
        private $Quantidade;

        //construtor
        public function __construct($nome_produto, $preco_produto, $quant_produto=0 ){
            $this ->Nome = $nome_produto;
            $this ->Preco = $preco_produto;
            $this ->Quantidade = $quant_produto;
        }

        //Métodos

        //getters 

        public function getNome(){
            return $this -> Nome;
        }

        public function getPreco(){
            return $this ->Preco;
        }

        //setters

        public function setNome($nome_produto){
            $this ->Nome =$nome_produto;
        }

        public function setPreco($preco_produto){
            $this ->Preco = $preco_produto;
        }

        //Estoque e Detalhe

        public function adicionarEstoque($qtde){
            $this ->Quantidade += $qtde;
        }

        public function removerEstoque($qtde){
            $this ->Quantidade -= $qtde;
        }

        public function mostrarDetalhes(){
            echo "Nome do produto: ". $this->Nome ."<br>";
            echo "Preço do produto: ". $this->Preco ."<br>";
            echo "Quantidade do produto no estoque: ". $this ->Quantidade ."<br>";
        }


    }            

?>