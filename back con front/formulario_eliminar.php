<?php 
	$conexion=mysqli_connect('localhost','root','','healthy2');
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ELIMINAR ARTICULO</title>
<link rel="stylesheet" href="../css/eliminar-lista.css">
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
          margin-top: 40px;
          text-align:center;
          color:#000;
          font-size: 22px;
          margin:auto;
          }
        nav p{
            font-size:22px;
            font-weight:700;
        }
        .contenedor{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-bottom:40px;
        }
        .c_eliminar{
        margin-top:20px;
        padding: 40px 20px;
        width:56%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: white;
        border-radius: 20px;
    }
    .codigo{
      display:flex;
      flex-direction:row;
      align-items:center;
      margin-bottom:10px;
    }
    .botones{
      display:flex;
      justify-content:center;
    }
    #Borrar,#enviar, #regresar{
      margin:0 10px;
      height:44px;
      padding-left: 30px;
      padding-right: 30px;
      font:bold;
      border:none;
      border-radius: 20px;
      color:#80C88B;
      background-color: #DEFFE3;
    }
    :is(#Borrar,#enviar, #regresar):hover{
      background-color:#80C88B;
      border:none;
      color:white;
    }
    #codigo{
    border:none;
    margin-left:10px;
    border-radius: 20px;
    height:44px;
    width:300px;
    background-color: #F7F6FB;
    padding-left: 16px;
    padding-right: 16px;
}
@media (max-width:700px) {
    #kiwi,#limon,#cereza3, #mango{
          display:none;
    }
    .formulario{
        width: 90%;
        padding: 20px 10px;
    }
    .tabla_cont{
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
      <div class="contenedor">
		  <h1>Eliminar productos </h1>
      <div class="c_eliminar">
      <form name="formulario" method="get" action="../back con front/eliminar_registros.php">
        <div class="codigo">
            <p>Codigo</p>
            <label for="codigo"></label>      
            <input type="text" name="codigo" id="codigo" autocomplete="off">
        </div>
        <div class="botones">
            <input type="submit" name="enviar" id="enviar" value="Eliminar Artículo"  >
            <input type="button" onclick="location='../back con front/form_registro.php'" name="Borrar" id="Borrar" value="Atrás">
        </div>
      </form> 
      </div>
      <div class="tabla_cont">
        <table>
            <tr>        
              <td><strong>SECCION</strong></td>
              <td><strong>PRODUCTO</strong></td>
              <td><strong>CANTIDAD</strong></td>
              <td><strong>CODIGO</strong></td>
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
                        <td><div class="centro"><?php echo $mostrar['amount'] ?></div></td>
                        <td><div class="inicio"><?php echo $mostrar['id_compra'] ?></div></td>
                    </tr>
                    <?php 
                    }
                  }
              ?>
          </table>
      </div>
      </div>	
  <img id="kiwi" src="../img/comentarios/kiwi.png">
    <img id="limon" src="../img/comentarios/limon.png">
    <img id="cereza3" src="../img/comentarios/cereza.png">
    <img id="mango" src="../img/comentarios/mango.png">
</body>
</html>