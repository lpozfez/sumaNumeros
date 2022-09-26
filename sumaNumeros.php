<?php
     $a=$_GET["a"];
     $b=$_GET["b"];
    
    if(is_numeric($a)&&is_numeric($b)){
        if(isset($a)&&isset($b)){
            $c=$a+$b;
            echo 'El resultado es <br>';
            echo $c;
        }else{
            echo 'Falta alguna de las variables';
        }
    }
    
     
?>