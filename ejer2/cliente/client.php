<form id="form1" name="form1" method="post" action="">
	<table width="23%" border ="0" cellspacing="0" cellpadding = "0">
		<tr>
			<td>Verifica numero primo:</td>
			<td><input name="numP" type="text" id="numP" size="5" /></td>
                <tr>
                    <br>
		<tr>
			<td>Valida dni:</td>
                        <td><input name="dni" type="text" id="dni" size="5" /></td><br>
		<tr>
                    <tr>
			<td>Concatena :</td>
			<td><input name="frase1" type="text" id="f1" size="5" /></td>
                        <td><input name="frase2" type="text" id="f2" size="5" /></td>
                        <td><input name="frase3" type="text" id="f3" size="5" /></td>
		<tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="button" id="button" value="Submit" /></td>
		</tr>
	</table>
</form>
<?php
	if (isset($_POST['numP']) ) {
		//turn off the WSDL cache
		ini_set("soap.wsdl_cache_enabled","0");
		
		$client = new SoapClient(
		"http://localhost/master-php/aprendiendo-php/ejer2/servidor/scramble.wsdl");
		
		$num = $_POST['numP'];
		$client->primo($num);
                
                }
        
        if (isset($_POST['dni']) ) {
		//turn off the WSDL cache
		ini_set("soap.wsdl_cache_enabled","0");
		
		$client = new SoapClient(
		"http://localhost/master-php/aprendiendo-php/ejer2/servidor/scramble.wsdl");
		
		$dni = $_POST['dni'];
		
		$resultado = $client->valida_dni($dni);
		
	}
        
        if (isset($_POST['f1']) && isset($_POST['f2']) && isset($_POST['f3']) ) {
		//turn off the WSDL cache
		ini_set("soap.wsdl_cache_enabled","0");
		
		$client = new SoapClient(
		"http://localhost/master-php/aprendiendo-php/ejer2/servidor/scramble.wsdl");
		
		$frase1 = $_POST['f1'];
                $frase2 = $_POST['f2'];
                $frase3 = $_POST['f3'];
                
		
		$resultado = $client->Concatenar($frase1,$frase2,$frase3);
		
	}
?>