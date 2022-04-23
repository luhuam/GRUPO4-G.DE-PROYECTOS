<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ELIMINAR ARTICULO</title>
<link rel="stylesheet" href="inventario_insertarregistro.css">

</head>
<body>
<header>
    <div class="header-content">
        <div class="menu" >
        <nav>
            <p OnClick="location.href='../html/principal.html'" >HEALTHYHOME</p>
            <ul style="font-weight: 500; font-size: 18px;">
            <li onclick="location='../html/principal.html'">Inicio</li>
            <li>Funciones</li>
            <li>Sobre nosotros</li>
            <button>Iniciar sesión</button>
            </ul>
        </nav>
        </div>
    </div>
    </header>
<h1>Eliminar producto</h1>

<?php
	
	$cod = $_GET["codigo"];

	require("datos_conexion.php");
	
    $conn = mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
	
	if(mysqli_connect_errno()){ //PARA EL ERROR DEL HOST
		echo "Fallo al conectar con el Host, Cambia la URL :)";
		exit();
	}
	
	mysqli_select_db($conn, $db_nombre) or die ("No se encuentra la BD");//PARA EL ERROR DE LA BD
	
	mysqli_set_charset($conn, "utf8"); //CARACTERES ESPECIALES ´
	
	$consulta = "DELETE FROM listacompras WHERE id_compra='$cod'"; //PARA ELIMINAR EN LA BD CON EL CODIGO
	
	$resultados = mysqli_query($conn, $consulta); //GUARDAR  LA CONEXION Y LOS DATOS DE LA TABLA
	
	if($resultados==false){
		echo "Error de guardado";
	}else{
		if(mysqli_affected_rows($conn)==0){
			//echo "No existe el codigo a eliminar";
			header("Location: ../html/formulario_eliminar.php");
		}else{
			header("Location: ../html/formulario_eliminar.php");
			//echo "<table><br>";
			//echo "<tr><td><u>Se elimino el artículo con código:</u></td></tr>";
			//echo "<tr><td>-> $cod </td></tr></table>";
			//echo "<br>";
		}
	}	
	mysqli_close($conn);
		
?>

	<tr>
		<td><div style="text-align:center"><input type="button" onclick="location='../html/formulario_eliminar.php'" name="Regresar" id="Regresar" value="Atrás"></div></td>
	</tr>

</body>
</html>