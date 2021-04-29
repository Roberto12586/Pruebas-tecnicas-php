<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios</title>
        
    </head>
    <body>
        <?php

        error_reporting(E_ALL ^ E_NOTICE);
        //-------------------PRUEBA DE FUNCIONAMIENTO------------------------
        /*
          //Importamos la clase GatRenat
          include 'GatRenat.php';

          //Instanciamos un objeto de prueba
          $objetoPrueba = new GatRenat;

          //Imprimimos el numero de vidas
          echo $objetoPrueba->getNumeroVidas();
         */
        //--------------------------------------------------------------------
        //--------------------------EJERCICIO 1--------------------------
        //Importamos la clase GatRenat
        
          include 'GatRenat.php';

          //Creamos los dos gatos
          $gato1 = new GatRenat;
          $gato2 = new GatRenat;

          mostrarVidas();
          accidente('Gato 1');
          mostrarVidas();
          accidente('Gato 1');
          mostrarVidas();

          //Funcion que imprime las vidas de los gatos
          function mostrarVidas() {
          echo 'Vida de los dos gatos al momento de crearse: </br>';
          echo 'Gato 1: ' . $GLOBALS['gato1']->getNumeroVidas() . ' vidas.</br>';
          echo 'Gato 2: ' . $GLOBALS['gato2']->getNumeroVidas() . ' vidas.</br></br>';
          }

          //Funcion que provoca un accidente en el gato que recibe por parametro
          function accidente($nombreGato) {
          echo 'El ' . $nombreGato . ' tiene un accidente...';
          switch ($nombreGato) {
          case 'Gato 1':
          $GLOBALS['gato1']->setNumeroVidas($GLOBALS['gato1']->getNumeroVidas() - 1);
          break;
          case 'Gato 2':
          $GLOBALS['gato2']->setNumeroVidas($GLOBALS['gato2']->getNumeroVidas() - 1);
          break;
          }
          } 

        ?>


    </body>
</html>