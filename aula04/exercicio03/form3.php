<?php
$usuario=$_POST ['cxuse'];
$senha=$_POST ['cxsenha'];

if($usuario == 'etec'&& $senha == 'infomatica'){
    echo "Seu login está correto";
}

else{
    'Seu login esta errado';
}