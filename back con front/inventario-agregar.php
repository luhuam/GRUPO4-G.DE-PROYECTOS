<?php

include 'funciones.php';
csrf();

if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}

if (isset($_POST['submit'])) {
  $resultado = [
    'error' => false,
    'mensaje' => '✅ El producto ' . escapar($_POST['product']) . ' ha sido agregado con éxito'
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
    <link rel="stylesheet" href="../css/inventario.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body >
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
<style>
  .titulo{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
  }
  h1{
    margin:0;
    width:auto;
    font-size:26px; 
    color:black; 
  }
  nav p{
    font-weight: 700; 
    font-size: 24px;
  }
  .contenedor{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    padding-top:100px;
  }
  .contenedor h1{
    margin-top:0;
  }
  .formulario{
    margin-top:20px;
    padding: 40px 20px;
    width:56%;
    display: flex;
    justify-content: center;
    flex-direction:column;
    align-items: center;
    background-color: white;
    border-radius: 20px;
  }
  #product,#amount,#kind_product{
    border:none;
    border-radius: 20px;
    height:44px;
    width:300px;
    background-color: #F7F6FB;
    margin-left: 20px;
    padding-left: 10px;
    padding-right: 16px;
}
.producto, .cantidad, .tipo{
    width: 100%;
    display: flex;
    justify-content: left;
    align-items: center;
    flex-direction: row;
    flex-wrap: wrap;
    margin-bottom: 20px;
}
  .contenedor img{
    margin-left:4px;
    height:40px;
  }
  .alert{
    display:flex;
    align-items:center;
    height:40px;
    padding:5px 20px 5px 20px;
    border-radius:20px;
    justify-content:center;
    text-align:center;
    background-color:#F7F6FB;
    color:grey;
    font-size:12px;
    margin-bottom:10px;
    font-style:italic;
    font-weight:500;
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
/*Botones*/
.botones{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}
  #enviar, #Ver,#imprimir{
    height:44px;
    margin:0 10px 5px 10px;
    padding-left: 30px;
    padding-right: 30px;
    font:bold;
    border:none;
    border-radius: 20px;
    color:#80C88B;
    background-color: #DEFFE3;
  }
  #Ver:hover{
    background-color:#80C88B;
    border:none;
    color:white;
}
#imprimir:hover{
    background: #80C88B;
    border:none;
    color:white;
}
#enviar:hover{
    background:#80C88B;
    border:none;
    color:white;
}
@media (max-width:700px) {
  .formulario{
        width: 90%;
        padding: 20px 10px;
    }
  nav p{
    font-size:16px;
  }
    nav ul li{
        display: none;
    }
    h1{
        font-size: 18px;
    }
    .producto, .cantidad, .tipo  p{
        font-size: 12px;
    }
    #product,#amount,#kind_product{
    height:36px;
    background-color: #F7F6FB;
    padding-left: 10px;
    padding-right: 16px;
    }
     /*FONDO*/
    #kiwi{
        width: 80px;
        height: auto;
    }
    #limon{
        right:5%;
        width: 60px;
        height: auto;
    }
    #cereza3{
        height:auto;
        width: 80px;
        top: 550px;
    }
    #mango{
        width: 100px;
        height: auto;
        top: 600px;
    /*FIN FONDO*/
    }

    .botones input{
        margin:5px;
    }
}
</style>
</header>
<div class="container-all" id="move-content">
        <div class="contenedor">
          <div class="titulo">
          <h1>Inventario</h1>
          <img src="../img/funciones/inventario.png" alt="">
          </div>
  <form class="formulario" name="form1" method="post"> 
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
	  <div class="producto">
      <p>Producto:</p>
      <label for="product"></label>
      <input type="text" name="product" id="product" autocomplete="off"></td>
    </div>
	  <div class="cantidad">
      <p>Cantidad:</p>
      <label for="amount"></label>
      <input type="text" name="amount" id="amount" autocomplete="off"></td>
    </div>
    <div class="tipo">
	    <p>Tipo de producto:</p>
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
    </div>
  <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
    <div class="botones">
      <input type="submit" name="submit" id="enviar" value="Agregar">
      <input type="button" onclick="location='inventarioVer.php'" name="Ver" id="Ver" value="Ver guardados">
      <input type="button" target="_blank" onclick="location='../back con front/inventarioImprimir.php'" name="Imprimir"  id="imprimir" value="Imprimir">
    </div>
  </form>      
    <img id="kiwi" src="../img/comentarios/kiwi.png">
    <img id="limon" src="../img/comentarios/limon.png">
    <img id="cereza3" src="../img/comentarios/cereza.png">
    <img id="mango" src="../img/comentarios/mango.png">
  </div>
</body>
</html>