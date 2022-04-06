

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inventario: Registro | HealtyHome</title>
<link rel="stylesheet" href="inventario_insertarregistro.css">
</head>
<body>

<h1>Registro de producto</h1>

<?php
			
	if($resultados1==false){
		echo "Error de guardado";
	}else{
		echo "<table><br>";
		echo "<tr><td><u>Se guardo lo siguiente</u></td></tr>";
		echo "<tr><td><b>Producto: </b></td></tr>";
		echo "<tr><td>-> $art </td></tr>";
		echo "<tr><td><b>Cantidad: </b></td></tr>";
		echo "<tr><td>-> $cant </td></tr>";
		echo "<tr><td><b>Tipo de producto: </b></td></tr>";
		echo "<tr><td>-> $sec </td></tr>";
		echo "<br>";
	}
	
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
		
?>

	<tr>
      <td><div style="text-align:center"><input type="button" onclick="location='inventario-agregar.php'" name="Regresar" id="Regresar" value="Insertar más Datos"></div></td>
    </tr>
	
</body>
</html>