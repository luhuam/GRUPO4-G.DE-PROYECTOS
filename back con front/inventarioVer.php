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
<link rel="stylesheet" href="../css/inventario_ver.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
    <div class="header-content">
        <div class="menu" >
        <nav>
            <p OnClick="location.href='../html/index2.php'" >HEALTHYHOME</p>
            <ul style="font-weight: 500; font-size: 18px;">
            <li onclick="location='../html/index2.php'">Inicio</li>
            <li>Funciones</li>
            <li>Sobre nosotros</li>
            <button  onclick="location='../back con front/cerrarsesion.php'">Cerrar sesión</button>
            </ul>
        </nav>
        </div>
    </div>
  </header>
    <style>
      #Regresar{
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
    
    @media (max-width:900px) {
      #kiwi,#limon,#cereza3, #mango{
            display:none;
      }
      h1{
          font-size:16px;
      }
      .menu nav p{
        font-size:14px;
      }
      .menu nav ul li{
            display: none;
      }
      .tabla_cont{
        width: 90%;
        padding: 20px 10px;
      }
      tr th{
        font-size:12px;
        font-weight:600;
      }
      tr td{
        font-size:12px;
      }
    .despues{
      display:none;
    }
    .antes:after{
      content:'❌';
    }
    }
  </style>
      <h1>Productos guardados</h1>
      <div class="contenedor">
        <div class="tabla_cont">
      <table>
        <thead>
          <tr>
            <th>Producto</th>
            <th>Tipo de producto</th>
            <th>Cantidad</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($healthy && $sentencia->rowCount() > 0) {
            foreach ($healthy as $fila) {
              ?>
              <tr>
                <td><div class="inicio"><?php echo escapar($fila["product"]); ?></div></td>
                <td><div class="centro"><?php echo escapar($fila["kind_product"]); ?></div></td>
                <td><div class="fin"><?php echo escapar($fila["amount"]); ?></div></td>
                <td><div class="eliminar"><a href="<?= 'borrar.php?id=' . escapar($fila["id_inventory"]) ?>"><p class="antes"></p><p class="despues">❌Eliminar</p></a></div></td>
              </tr>
              <?php
            }
          }
          ?>
        <tbody>
      </table>
      <input type="button" class="btn btn-primary" onclick="location='inventario-agregar.php'" name="Regresar" id="Regresar" value="Atrás">
    </div>
  </div>
  <img id="kiwi" src="../img/comentarios/kiwi.png">
    <img id="limon" src="../img/comentarios/limon.png">
    <img id="cereza3" src="../img/comentarios/cereza.png">
    <img id="mango" src="../img/comentarios/mango.png">
</body>
</html>