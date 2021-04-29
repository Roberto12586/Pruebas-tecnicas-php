<?php

/*programa que muestre todos numeros entre dos numeros que nos llegan por get
pero que sean impares */

if(isset($_GET['numero1'])&& isset($_GET['numero2'])){
$numero1=$_GET['numero1'];
$numero2=&$_GET['numero2'];

    if($numero1<$numero2){
            
        for($i=$numero1;$i<=$numero2;$i++){
            if($i%2 !=0){       //si i entre dos el resto es diferente a 0 es impar
                
            
            echo $i.'<br/>';
            }
        }
    } else {
        echo 'el numero1 debe ser menor que el numero2';    
    }
} else {
    echo 'No existen';    
}



