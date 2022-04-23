<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>INVENTARIO</title>
</head>
<body>
<?php
	$prod =$_GET["producto"];
	$fec =$_GET["tipo_producto"];
	$pais=$_GET["cantidad"];
	require("../back con front/datos_conexion.php");
	$conexion = mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); 

	if(mysqli_connect_errno()){ 
		echo "Fallo al conectar con el Host, Cambia la URL :)";
		exit();
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");
	
	mysqli_set_charset($conexion, "utf8"); 
	
	$consulta = "INSERT INTO lista_de_compras (id_usuario,producto,tipo_producto,cantidad) VALUES ('$sec','$prod','$pais')";
	
	$resultados = mysqli_query($conexion, $consulta); 
	
	if($resultados==false){
		echo "Error de guardado";
		
	}else{
		require("../back con front/Mostrar.php");
		
		
	}
	
	mysqli_close($conexion);
	
	
?>


</body>
</html>