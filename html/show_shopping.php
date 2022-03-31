<?php 

	$conexion=mysqli_connect('localhost','root','','healthy2');

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>MOSTRAR DATOS</title>
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
            $sql="SELECT * from listaCompras";
            $result=mysqli_query($conexion,$sql);
            if(mysqli_affected_rows($conexion)==0){
                echo "<table><br>";
                echo "<tr><td><b>LISTA VACIA</b></tr></td></table><br>";
            }else{
            while($mostrar=mysqli_fetch_array($result)){
		 ?>

            <tr>
                <td><?php echo $mostrar['kind_product'] ?></td>
                <td><?php echo $mostrar['product'] ?></td>
                <td><?php echo $mostrar['amount'] ?></td>
            </tr>
            <?php 
            }
		}
        
	 ?>
     <td></td>
     <tr>
         
	    <td align="center"><input type="button" name="regresar" id="regresar" value="Regresar" onclick="location='form_registro.php'"></td>
    </tr>
     
	</table>
    
    
</body>
</html>