<?php 

	$conexion=mysqli_connect('localhost','root','','healthy2');

 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ELIMINAR ARTICULO</title>
<link rel="stylesheet" href="eliminararticulo.css">
</head>
<body>

<h1>ELIMINAR ARTÍCULO</h1>
<form name="form1" method="get" action="../back con front/eliminar_registros.php">
  <table border="0" align="center">
	
	<tr>
      <td>Código</td>
      <td><label for="codigo"></label>
      <input type="text" name="codigo" id="codigo" autocomplete="off"></td>
    </tr>
	  
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Eliminar Artículo"  ></td>
      <td align="center"><input type="button" onclick="location='form_registro.php'" name="Borrar" id="Borrar" value="Atrás"></td>
    </tr>
	
  </table>
</form>

<br>

	<table border="1" >
		<tr>
            
			<td>SECCION</td>
			<td>PRODUCTO</td>
			<td>CANTIDAD</td>
            <td>CODIGO</td>
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
                <td><?php echo $mostrar['id_compra'] ?></td>
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