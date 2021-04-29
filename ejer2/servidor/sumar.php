<?php

	function sumar($a,$b) {
		return $a+$b;
	}
	
	function restar($a,$b) {
		return $a-$b;
	}
	
	//turn off the wsdl cache
	ini_set("soap.wsdl_cache_enabled","0");
	
	$server = new SoapServer("scramble.wsdl");
	
	$server->addFunction("sumar");
	$server->addFunction("restar");
	
	$server->handle();
?>	