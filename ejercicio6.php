<?php

/* imprimir por pantalla todas las tablas de multi del 1 al 10 y mostrar 
 * en tabla html es un bucle for anidado
 */

$numero1;

echo '<table border= 1> <tr>';

echo '<tr>';
    for($cabecera=1;$cabecera<=10;$cabecera++){
        echo "<td>Tabla de $cabecera</td>";
    }
echo '</tr>';

echo '<tr>';

for($i=1;$i<=10;$i++){
    echo "<td>";
        for($j=1;$j<=10;$j++){
            echo "$i x $j = ".($i*$j).'<br/>';
        }
    echo "</td>";
}
echo '</tr>';

echo '</table>';