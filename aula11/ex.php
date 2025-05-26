<?php

    include_once 'produto.class.php';

    $produto1 = new Produto("livro", 35, 100);

    $produto1->adicionarEstoque(100);
    $produto1->removerEstoque(100);

    $produto1->mostrarDetalhes();

?>