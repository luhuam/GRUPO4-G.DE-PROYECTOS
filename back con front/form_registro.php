<?php

	require "../back con front/datos_conexion.php";

	$error = null;
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
    
		if(empty($_POST["amount"]) || empty($_POST["kind_product"] || empty($_POST["product"]))){
			$error = "Please, complete all fields";
            
		}else{
            
			$conn
            ->prepare("INSERT INTO listaCompras (product,kind_product,amount) VALUES(:product, :kind_product, :amount)")
			->execute([
				":product" => $_POST["product"],
				":kind_product" => $_POST["kind_product"],
				":amount" => $_POST["amount"]
			]);
            echo "hola";
            
			header("Location: ../back/show_shopping.php");
		}
	}
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> LISTA DE PRODUCTO </title>
    <link rel="stylesheet" href="../css/lista-agregar.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
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
    <style>
        h1{
            text-align:center;
            color:#000;
            font-size: 22px;
            margin:auto;
        }
        nav p{
            font-size:22px;
            font-weight:700;
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
    .seccion, .producto, .cantidad{
        width: 100%;
        display: flex;
        justify-content: left;
        align-items: center;
        flex-direction: row;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }
    :is(.seccion, .producto, .cantidad) input{
        margin-left: 20px;
    }
    #kind_product,#product,#amount{
    border:none;
    border-radius: 20px;
    height:44px;
    width:400px;
    background-color: #F7F6FB;
    padding-left: 16px;
    padding-right: 16px;
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
    .seccion, .producto, .cantidad  p{
        font-size: 14px;
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
    #enviar,#Borrar,#mostrar,#imprimir{
    height:40px;
    padding-left: 20px;
    padding-right: 20px;
}
}
    </style>
    <div class="container-all" id="move-content">
        <div class="contenedor">
		<h1>Lista de productos </h1>
<form class="formulario" name="form1" method="POST" action="form_registro.php">
    <div class="seccion">
      <p>Sección</p>
      <label for="SECCION"></label>
      <input autocomplete="off"  type="text" name="kind_product" id="kind_product">
    </div>
    <div class="producto">
      <p>Producto</p>
      <label for="PRODUCTO"></label>
      <input autocomplete="off" type="text" name="product" id="product">
    </div>
	<div class="cantidad">
      <p>Cantidad</p>
      <label for="ORIGEN"></label>
      <input autocomplete="off" type="text" name="amount" id="amount">
    </div>
    <div class="botones">
      <input type="submit" name="enviar" id="enviar" value="Agregar" onclick="location='../back con front/show_shopping.php'">
      <input type="button" name="Borrar" id="Borrar" value="Eliminar" onclick="location='../back con front/formulario_eliminar.php'">
	  <input type="button" name="mostrar" id="mostrar" value="Mostrar" onclick="location='../back con front/show_shopping.php'">
      <input type="button" name="imprimir" id="imprimir" value="Imprimir" onclick="location='../back con front/imprimir.php'">
    </div>
</form>
        </div>
    </div>
    <img id="kiwi" src="../img/comentarios/kiwi.png">
    <img id="limon" src="../img/comentarios/limon.png">
    <img id="cereza3" src="../img/comentarios/cereza.png">
    <img id="mango" src="../img/comentarios/mango.png">
</body>
</html>