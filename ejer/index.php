<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $host="localhost";
            $user="admin"; 
            $password="ifp123@";
            $database="coches";
            
            $conexion=  mysqli_connect($host, $user, $password, $database);
         
            if(mysqli_connect_errno()){
                echo "error con la conexion a la DB ".mysqli_connect_error();
            }
	    
	   

            mysqli_query($conexion, "SET NAMES 'utf8'");
            
            $consulta="SELECT matricula,modelo,km FROM tablacoches WHERE km>50000";
            $resultado=  mysqli_query($conexion, $consulta);
            
            while($fila= mysqli_fetch_array($resultado,MYSQLI_ASSOC)){ 
	   
                printf("Matricula: ".$fila['matricula']." Modelo: ".$fila['modelo']." Km: ".$fila['km']."<br>");
            }
            
	$consulta2= "DELETE FROM tablacoches WHERE matricula= 'B1992CCC'" ;
	$resultado2= mysqli_query($conexion, $consulta2);
    
	while($fila2= mysqli_fetch_array($resultado2,MYSQLI_ASSOC)){
	   printf("El registro con matricula B1992CCC se ha eliminado");
	}

        ?>
    </body>
</html>
