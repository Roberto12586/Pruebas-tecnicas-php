<?php

class Coche {

    //Atributos
    var $color, $numeroPuertas, $marca, $gasolina;
    

    //Constructor
    /*function Coche($color, $numeroPuertas, $marca, $gasolina) {
        $this->color = $color;
        $this->numeroPuertas = $numeroPuertas;
        $this->marca = $marca;
        $this->gasolina = $gasolina;
    }*/
    
    //Getters
    function getColor(){
        return $this->color;
    }
    
    function getNumeroPuertas(){
        return $this->numeroPuertas;
    }
    
    function getMarca(){
        return $this->marca;
    }
    
    function getGasolina(){
        return $this->gasolina;
    }
    
 
    //Función que se encarga de llenar el deposito con la cantidad que recibe por parámetro
    /*public function llenarDeposito($cantidadGasolina) {
        $this->gasolina = $this->gasolina + $cantidadGasolina;
        echo 'Se ha llenado el deposito correctamente'
        .' la cantidad de gasolina es de: '.$this->gasolina.' litros';
    }


    //Función encargada de acelerar el coche


    function acelerar(){
         if($this->gasolina == 0){
              echo "Imposible acelerar";
         }
         else{
              $this->gasolina--;
         }
    }*/
        function llenarDeposito($cantidad) {
        echo '<br>Total deposito antes de llenar: ' . $this->gasolina . 'litros.<br>';
        $this->gasolina = $this->gasolina + $cantidad;
        echo '<br>Total deposito despues de llenar: ' . $this->gasolina . 'litros.<br>';
        
        
    }

    function acelerar() {
        
        if($this->gasolina>0)
        {
        $this->gasolina = $this->gasolina-1;
        echo'Despues de acelerar:'. $this->gasolina;
        
    }}

}





