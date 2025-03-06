<?php
$n1=$_GET ['cxn1'];
$n2=$_GET ['cxn2'];
$n3=$_GET ['cxn3'];
    
    if($n1 > $n2 && $n1 > $n3){
        echo "O mais numero é: $n1";
    }
    

    if($n2 > $n1 && $n2 > $n3){
         echo "O mais numero é: $n2";
    }

        if($n3 > $n2 && $n3 > $n1){
            echo "O mais numero é: $n3";
    }
?>
