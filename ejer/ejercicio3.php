<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(E_ALL ^ E_NOTICE);
include 'coche.php';

echo'<h1>Ejercicio 2</h1>

        <form action="" method="post">
            Cantidad a llenar: <br>
            <input type="number" name="cantidad"/><br>
            <input type="submit" name="Llenar" value="Llenar Deposito" />
            <br><br>

            <input type="submit" name="btnAcelerar" value="Acelerar"/> <br>


        </form>';

$coche = new Coche(); // Instanciamos la clase Coche
$coche->color = 'Rojo'; // Llenamos algunas de las propiedades
$coche->marca = 'Seat';
$coche->numero_puertas = 5;
$coche->llenarDeposito($_POST['cantidad']); // utilizamos los metodos

if($_POST['btnAcelerar']) {
    $coche->acelerar();
}