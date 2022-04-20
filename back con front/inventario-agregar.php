<?php

include 'funciones.php';
csrf();

if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}

if (isset($_POST['submit'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'El producto ' . escapar($_POST['product']) . ' ha sido agregado con éxito'
  ];

  $config = include 'config.php';

  try {
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

    $healthy = array(
      "id_user"   	=> 1,
      "product" 	=> $_POST['product'],
      "kind_product"=> $_POST['kind_product'],
      "amount" 		=> $_POST['amount'],
    );

    $consultaSQL = "INSERT INTO inventario (id_user, product, kind_product, amount) values (:" . implode(", :", array_keys($healthy)) . ")";

    $sentencia = $conexion->prepare($consultaSQL);
    $sentencia->execute($healthy);

  } catch(PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error->getMessage();
  }
}
?>

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
<form class="form_cont" name="form1" method="post"> 
<?php
if (isset($resultado)) {
  ?>
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-<?= $resultado['error'] ? 'danger' : 'success' ?>" role="alert">
          <?= $resultado['mensaje'] ?>
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>  
  <table>
	<tr>
      <td>Producto:</td>
      <td><label for="product"></label>
      <input type="text" name="product" id="product" autocomplete="off"></td>
    </tr>
	<tr>
      <td>Cantidad:</td>
      <td><label for="amount"></label>
      <input type="text" name="amount" id="amount" autocomplete="off"></td>
    </tr>
    <tr>
	  <td>Tipo de producto:</td><td>
	  <label for="kind_product"></label>
	  <select  name="kind_product" id="kind_product">
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
  <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td><input type="submit" name="submit" id="enviar" value="Registrar Datos"></td>
      <td><input type="button" onclick="location='inventarioVer.php'" name="Ver" id="Ver" value="Ver Lista Guardada"></td>
      <td><input type="button" onclick="location='inventarioImprimir.php'" name="Imprimir" id="imprimir" value="Imprimir Tabla Guardada"></td>
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