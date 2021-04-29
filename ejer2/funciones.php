<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validar_dni($dni){
	$letra = substr($dni, -1);
	$numeros = substr($dni, 0, -1);
	if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
		echo 'valido';
	}else{
		echo 'no valido';
	}
}


function concatenar($nombre,$apellido1,$apellido2) {
		$resultado = "El resultado es: " . $nombre.$apellido1.$apellido2;
		return $resultado;
	}
        
        
function primo($num){
    
    $contador=0;
    
    for($i=2;$i<=$num;$i++){
        if($num%$i==0){
            if(++$contador>1){
                return false;
            }
        }else{
            return true;
        }
    }
}

//turn off the wsdl cache
	ini_set("soap.wsdl_cache_enabled","0");
	
	$server = new SoapServer("scramble.wsdl");
	
	$server->addFunction("primo");
        $server->addFunction("concatenar");
        $server->addFunction("validar_dni");
        
	
	$server->handle();
