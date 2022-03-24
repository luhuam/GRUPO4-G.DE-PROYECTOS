<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inventario: Registro | HealtyHome</title>
<link rel="stylesheet" href="inventario_insertarregistro.css">
</head>
<body>

<h1>Se registro el producto</h1>

<?php
	
	$art = $_GET["n_art"];
	$cant = $_GET["cantidad"];
	$sec = $_GET["seccion"];
	/*
	require("datos_conexion.php");
	
	$conexion = mysqli_connect('sql308.epizy.com','epiz_31347848','0PfLNGyicB8q','epiz_31347848_healthy'); //CONEXION A LA BD
	
	if(mysqli_connect_errno()){ //PARA EL ERROR DEL HOST
		echo "Fallo al conectar con el Host, Cambia la URL :)";
		exit();
	}
	
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");//PARA EL ERROR DE LA BD
	
	mysqli_set_charset($conexion, "utf8"); //CARACTERES ESPECIALES ´
	
	$consulta1 = "INSERT INTO inventario (producto, tipo_producto) VALUES ('$art', '$sec')";
	$resultados1 = mysqli_query($conexion, $consulta1); //GUARDAR  LA CONEXION Y LOS DATOS DE LA TABLA

	
	$userid = $_SESSION["id_usuario"];
	$productid = "SELECT id_producto FROM inventario WHERE producto = '$art'";
	$consulta2 = "INSERT INTO inventario_usuario (id_producto, id_usuario, cantidad) VALUES ('$productid', '$userid', '$cant')";
	$resultados2 = mysqli_query($conexion, $consulta2); //GUARDAR  LA CONEXION Y LOS DATOS DE LA TABLA
	
	if($resultados1==false || $resultados2=false){
		echo "Error de guardado";
	}else{*/
		echo "<table><br>";
		echo "<tr><td><u>Se guardo lo siguiente</u></td></tr>";
		echo "<tr><td><b>Producto: </b></td></tr>";
		echo "<tr><td>-> $art </td></tr>";
		echo "<tr><td><b>Cantidad: </b></td></tr>";
		echo "<tr><td>-> $cant </td></tr>";
		echo "<tr><td><b>Tipo de producto: </b></td></tr>";
		echo "<tr><td>-> $sec </td></tr>";
		echo "<br>";
	//}
	/*
	echo "<h1>Prodcto Registrado en el Inventario</h1><br>";
	$tabla = "SELECT * FROM inventario";
	$resultado_tabla = mysqli_query($conexion,$tabla);
	
	if($resultado_tabla==false){
		echo "Tabla INVENTARIO no creada";
	}else{
		while(($fila=mysqli_fetch_row($resultado_tabla))==true){// HACER HASTA QUE EXISTAN DATOS 
			echo "<table>";
			echo "<tr><td>COD ARTÍCULO CANTIDAD SECCIÓN </tr></td><tr><td>";
			for($i=0;$i<4;$i++){ //IMPRIMIR LO QUE SE GUARDO
				echo $fila[$i] . " "; // IMPRIMIR EL ARRAY Y CONCATENARLO (.) CON UN ESPACIO " "
			}
			echo "</td></td></table>";
			echo "<br>";
		}
	}
	
	mysqli_close($conexion);
	*/	
?>

	<tr>
      <td><div style="text-align:center"><input type="button" onclick="location='inventario.php'" name="Regresar" id="Regresar" value="Insertar más Datos"></div></td>
    </tr>
	
</body>
</html>