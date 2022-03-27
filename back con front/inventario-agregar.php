<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario | HealtyHome</title>
    <link rel="stylesheet" href="../css/registrarse.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body >
    <!--Header - menu-->
    <header>
<div class="header-content">
<div class="menu" id="show-menu">
    <nav>
        <p OnClick="location.href='../html/principal.html'"  style="font-weight: 700; font-size: 24px;">HEALTHYHOME</p>
        <ul style="font-weight: 500; font-size: 18px;">
            <li onclick="location='../html/principal.html'">Inicio</li>
            <li>Funciones</li>
            <li>Sobre nosotros</li>
            <button>Iniciar sesión</button>
        </ul>
    </nav>
</div>
</div>
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
<div id="icon-menu">
<i class="fas fa-bars"></i>
</div>
    </header>
    <div class="container-all" id="move-content">
        <div class="contenedor">
          
    <div class="container-all" id="move-content">
        <div class="contenedor">
          <div class="titulo">
          <h1>Inventario</h1>
          <img src="../img/funciones/inventario.png" alt="">
          </div>
<div class="formulario">
<form class="form_cont" name="form1" method="get" action="inventarioRegistrar.php"> 
  <table>
	<tr>
      <td>Producto:</td>
      <td><label for="n_art"></label>
      <input type="text" name="n_art" id="n_art" autocomplete="off"></td>
    </tr>
	<tr>
      <td>Cantidad:</td>
      <td><label for="cantidad"></label>
      <input type="text" name="cantidad" id="cantidad" autocomplete="off"></td>
    </tr>
    <tr>
	  <td>Tipo de producto:</td><td>
	  <label for="seccion"></label>
	  <select  name="seccion" id="seccion">
	  <option selected>Escoja una opción</option>
	  <option value="Carnes">Carnes</option>
	  <option value="Cereales">Cereales</option>
	  <option value="Frutas">Frutas</option>
	  <option value="Lacteos">Lacteos</option>
	  <option value="Legumbres">Legumbres</option>
	  <option value="Snacks">Snacks</option>
	  <option value="Verduras">Verduras</option>
	  <option value="Otros">Otros</option></select>
	</tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Registrar Datos"></td>
      <td align="center"><input type="button" onclick="location='formulario_eliminar.php'" name="Borrar" id="Borrar" value="Eliminar Datos"></td>
      <td align="center"><input type="button" onclick="location='ver_tabla.php'" name="Ver" id="Ver" value="Ver Lista Guardada"></td>
	</tr>
	<tr>
	<td></td>	
    <td align="center"><input type="button" onclick="location='imprimir.php'" name="Imprimir" id="imprimir" value="Imprimir Tabla Guardada"></td>
	</tr>
  </table>
</form>
            
        
    <img id="kiwi" src="../img/comentarios/kiwi.png">
    <img id="limon" src="../img/comentarios/limon.png">
    <img id="cereza3" src="../img/comentarios/cereza.png">
    <img id="mango" src="../img/comentarios/mango.png">
  </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>