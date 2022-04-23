<?php 

	$conexion=mysqli_connect('localhost','root','','healthy2');

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>MOSTRAR DATOS</title>
	<link rel="stylesheet" href="../css/lista_ver.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
    #regresar{
    margin-bottom: 5px;
    height:44px;
    padding-left: 30px;
    padding-right: 30px;
    font:bold;
    border:none;
    border-radius: 20px;
    color:#80C88B;
    background-color: #DEFFE3;
  }
  @media (max-width:700px) {
      #kiwi,#limon,#cereza3, #mango{
          display:none;
      }
    h1{
        font-size:16px;
    }
    header nav p{
      font-size:16px;
    }
      header nav ul li{
          display: none;
      }
      .tabla_cont{
        width: 90%;
        padding: 20px 10px;
    }
    tr td{
        font-size:12px;
    }
}
</style>
<body>
    <header>
    <div class="header-content">
        <div class="menu" >
        <nav>
            <p OnClick="location.href='../html/index.html'" >HEALTHYHOME</p>
            <ul style="font-weight: 500; font-size: 18px;">
            <li onclick="location='../html/index.html'">Inicio</li>
            <li>Funciones</li>
            <li>Sobre nosotros</li>
            </ul>
        </nav>
        </div>
    </div>
    </header>
    <h1>Lista guardada</h1>
    <div class="contenedor">
    <div class="tabla_cont">    
	<table>
		<tr>
			<td><strong>SECCION</strong></td>
			<td><strong>PRODUCTO</strong></td>
			<td><strong>CANTIDAD</strong></td>
            <div>
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
                
                <td><div class="inicio"><?php echo $mostrar['kind_product'] ?></div></td>
                <td><div class="centro"><?php echo $mostrar['product'] ?></div></td>
                <td><div class="fin"><?php echo $mostrar['amount'] ?></div></td>
                
            </tr>
            <?php 
            }
		}
	 ?>
	</table>
    <input type="button" name="regresar" id="regresar" value="Regresar" onclick="location='../back con front/form_registro.php'">

    </div>
    </div>
    <img id="kiwi" src="../img/comentarios/kiwi.png">
    <img id="limon" src="../img/comentarios/limon.png">
    <img id="cereza3" src="../img/comentarios/cereza.png">
    <img id="mango" src="../img/comentarios/mango.png">
</body>
</html>