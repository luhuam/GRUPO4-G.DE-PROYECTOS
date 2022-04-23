<?php 

	$conexion=mysqli_connect('localhost','root','','healthy1');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<link rel="stylesheet" href="mostrarproductos.css">
</head>

<body>

<br>

	<table border="1" >
		<tr>
			<td>SECCION</td>
			<td>PRODUCTO</td>
			<td>CANTIDAD</td>
		
		</tr>

		<?php 
		$sql="SELECT * from inventariop";
		$result=mysqli_query($conexion,$sql);
		if(mysqli_affected_rows($conexion)==0){
			echo "<table><br>";
			echo "<tr><td><b>LISTA VACIA</b></tr></td></table><br>";
		}else{
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['SECCION'] ?></td>
			<td><?php echo $mostrar['PRODUCTO'] ?></td>
			<td><?php echo $mostrar['ORIGEN'] ?></td>
		</tr>
	<?php 
	}
		}
	 ?>
	</table>

      
	<td align="center"><input type="button" name="Borrar" id="Borrar" value="Regresar" onclick="location='form_registro.php'"></td>


</body>



</html>