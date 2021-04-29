<?php
/*recoger numeros por url y hacer operaciones de suma resta multi division*/

if(isset($_GET['numero1'])&& isset($_GET['numero2'])){
$numero1= $_GET['numero1'];
$numero2= $_GET['numero2'];

echo 'Multiplicacion es igual a '.($numero1*$numero2).'<br/>';
echo 'Division es igual a '.($numero1%$numero2).'<br/>';
echo 'Resta es igual a '.($numero1-$numero2).'<br/>';
echo 'Suma es igual a '.($numero1+$numero2).'<br/>';
}else{
    echo 'el valor no es valido';
}


