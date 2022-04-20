<?php
include 'funciones.php';
csrf();

if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}

$error = false;
$config = include 'config.php';

try {
  $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
  $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

  $consultaSQL = "SELECT id_inventory, product, kind_product, amount FROM inventario";
  
  $sentencia = $conexion->prepare($consultaSQL);
  $sentencia->execute();

  $healthy = $sentencia->fetchAll();

} catch(PDOException $error) {
  $error= $error->getMessage();
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Visualización de productos | HealthyHome</title>
<link rel="stylesheet" href="inventario_insertarregistro.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" /> <!--BORRAS ESTO xd -->
</head>
<body>

<div class="container"> 
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-3">Lista de productos</h2>
      <table class="table">
        <thead>
          <tr>
            <th>Producto</th>
            <th>Tipo de producto</th>
            <th>Cantidad</th>
            <th>Eliminar producto</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($healthy && $sentencia->rowCount() > 0) {
            foreach ($healthy as $fila) {
              ?>
              <tr>
                <td><?php echo escapar($fila["product"]); ?></td>
                <td><?php echo escapar($fila["kind_product"]); ?></td>
                <td><?php echo escapar($fila["amount"]); ?></td>
                <td><a href="<?= 'borrar.php?id=' . escapar($fila["id_inventory"]) ?>">❌Eliminar</a></td>
              </tr>
              <?php
            }
          }
          ?>
        <tbody>
      </table>
    </div>
  </div>
</div>

	<tr>
		<td><div style="text-align:center"><input type="button" class="btn btn-primary" onclick="location='inventario-agregar.php'" name="Regresar" id="Regresar" value="Atrás"></div></td>
	</tr>

</body>
</html>