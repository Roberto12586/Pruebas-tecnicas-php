<?php
	include 'nusoap.php';
	
	$servicio = new soap_server();
	$ns = "urn:Scramble";
	$servicio->configureWSDL("Scramble",$ns);
	$servicio->schemaTargetNamespace = $ns;
	
	$servicio->register("validar_dni",array('dni' =>  'xsd:string'), array('return'=>'xsd:string'), $ns);
        $servicio->register("primo",array('num' =>  'xsd:int'), array('return'=>'xsd:boolean'), $ns);
        $servicio->register("concatenar",array('f1' =>  'xsd:string','f2'=> 'xsd:string','f3'=> 'xsd:string'), array('return'=>'xsd:string'), $ns);
        
	
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? HTTP_RAW_POST_DATA : "";
$servicio->service($HTTP_RAW_POST_DATA);


?>