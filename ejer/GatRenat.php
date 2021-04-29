<?php

class GatRenat {

    //Atributos
    var $numeroVidas;

    //Constructores
    function GatRenat() {
        $this->numeroVidas = 7;
    }

    //Getters y Setters
    public function getNumeroVidas() {
        return $this->numeroVidas;
    }

    public function setNumeroVidas($numeroVidas) {
        //Hay que comprobar que numeroVidas sea un numero entero y positivo
        if ($this->esPositivo($numeroVidas)) {//->Si el numero que viene al set es positivo, cambio valor de numero de vidas
            $this->numeroVidas = $numeroVidas;
        }
    }

    //Devuelve true si el numero que recibe por parametro es positivo, sino devuelve false
    private function esPositivo($num) {
        return $num > 0;
    }

}

?>