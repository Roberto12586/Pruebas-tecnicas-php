<?php
/* imprime por pantalla los cuadrados de los 40 primeros numero naturales 1-40
 * utilizar while
 */

$numero=0;

/*while ($numero<=40){
    $cuadrado=$numero*$numero.'<br/>';
    echo $cuadrado;
    $numero++;
}*/

//for 

for($i=1;$i<=40;$i++){
    $cuadrado=$i*$i.'<br/>';
    echo $cuadrado;
}

?>