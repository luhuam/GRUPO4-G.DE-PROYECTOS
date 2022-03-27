<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario | HealtyHome</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/inventario.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body >
    <!--Header - menu-->
    <header>
        <div class="header-content">
            <nav>
                <p style="font-weight: 700; font-size: 24px;">HEALTHYHOME</p>
                <ul style="font-weight: 500; font-size: 18px;">
                    <li>Inicio</li>
                    <li>Funciones</li>
                    <li>Sobre nosotros</li>
                    <button>Iniciar sesión</button>
                </ul>
            </nav>
        </div>
        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>
    </header>
    <!--Portada-->
    <div class="container-all" id="move-content">
        <div class="contenedor">
          <h1>Inventario</h1><br>
<div class="formulario">
<form class="form_cont" name="form1" method="get" action="inventarioRegistrar.php"> 
  <table >
  	
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
	  <select name="seccion" id="seccion">
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
</div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>