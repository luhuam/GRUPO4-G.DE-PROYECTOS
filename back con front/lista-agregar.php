<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> LISTA DE PRODUCTO </title>
<link rel="stylesheet" href="../css/lista-agregar.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>
<body>
    <header>
        <div class="header-content">
            <div class="menu" id="show-menu">
                <nav>
                    <p OnClick="location.href='../html/principal.html'" style="font-weight: 700; font-size: 24px;">HEALTHYHOME</p>
                    <ul style="font-weight: 500; font-size: 18px;">
                        <li  onclick="location='../html/principal.html'">Inicio</li>
                        <li>Funciones</li>
                        <li>Sobre nosotros</li>
                        <button>Iniciar sesión</button>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>
    </header>
    <style>
  .titulo{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    height:80px;
  }
  h1{
    margin:0;
    width:auto;
    font-size:26px; 
    color:black; 
    margin-top:20px;
    margin-bottom:24px;
  }
  .contenedor{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
  }
  .contenedor img{
    margin-left:4px;
    height:40px;
  }
  .formulario{
    width:100%;
    border-radius: 20px;
  }
  table{
    height: 100%;
    width: 100%;
    background-color: white;
    border-radius: 20px;
	padding:20px;
  }
  td{
    font-weight:500;
    font-size:16px;
  }
  form{
      width:80%;
      border-radius: 20px;
  }
  /*FONDO*/
#kiwi{
    z-index: -1;
    position: absolute;
    width: 204px;
    height: 195px;
    top: 100px;
    left:-26px;
    pointer-events: none;
}
#limon{
    z-index: -1;
    position: absolute;
    width: 110px;
    height: auto;
    top: 80px;
    right:15%;
    pointer-events: none;
}
#cereza3{
    z-index: -1;
    position: absolute;
    left:20%;
    width: 123px;
    height: 104px;
    top: 480px;
    pointer-events: none;
}
#mango{
    z-index: -1;
    position: absolute;
    width: 238px;
    height: 153px;
    right: 5%;
    top: 500px;
    pointer-events: none;
}
/*FIN FONDO*/
</style>
    <div class="container-all" id="move-content">
        <div class="contenedor">

    <div class="container-all" id="move-content">
    <div class="titulo">
        <h1>Lista de compras</h1>
        <img src="../img/funciones/lista.png" alt="">
    </div>
<div class="formulario">
<form class="form_cont" name="form1" method="get" action="insert_registros.php">
  <table>
    <tr>
      <td>Sección</td>
      <td><label for="SECCION"></label>
      <input autocomplete="off"  type="text" name="tipo_producto" id="SECCION"></td>
    </tr>
    <tr>
      <td>Producto</td>
      <td><label for="PRODUCTO"></label>
      <input autocomplete="off" type="text" name="producto" id="PRODUCTO"></td>
    </tr>
	<tr>
      <td>Cantidad</td>
      <td><label for="ORIGEN"></label>
      <input autocomplete="off" type="text" name="cantidad" id="ORIGEN"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Agregar" onclick="location='../back/insert_registros.php'"></td>
      <td align="center"><input type="button" name="Borrar" id="Borrar" value="Eliminar" onclick="location='form_eliminar.php'"></td>
	  <td align="center"><input type="button" name="mostrar" id="mostrar" value="Mostrar" onclick="location='Mostrar.php'"></td>
	  
    </tr>
	<td></td>
	<td align="center"><input type="button" name="imprimir" id="imprimir" value="Imprimir" onclick="location='indexp.php'"></td>
	 <tr>
	 
	 </tr>
  </table>
</form>
<img id="kiwi" src="../img/comentarios/kiwi.png">
    <img id="limon" src="../img/comentarios/limon.png">
    <img id="cereza3" src="../img/comentarios/cereza.png">
    <img id="mango" src="../img/comentarios/mango.png">
    </div>
    <script src="../js/script.js"></script>
</body>
</html>