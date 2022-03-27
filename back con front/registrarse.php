<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/iniciarsesion.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>HEALTHYHOME</title>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="menu" id="show-menu">
                <nav>
                    <p OnClick="location.href='../html/principal.html'" style="font-weight: 700; font-size: 24px;">HEALTHYHOME</p>
                    <ul style="font-weight: 500; font-size: 18px;">
                        <li OnClick="location.href='../html/principal.html'">Inicio</li>
                        <li>Funciones</li>
                        <li>Sobre nosotros</li>
                        <button>Iniciar sesión</button>
                    </ul>
                </nav>
                <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>
            </div>
        </div>
    </header> 
    <div class="container-all container" id="move-content">
            <div class="formulario">
                <img src="../img/iniciodesesion/icono.png">
                <h1>Registrarse</h1>
                <div class="datos1">
                    <form action="" method="POST">  
                        <h2>Ingrese su correo electrónico</h2>
                        <input id="ingresar" placeholder="Ingrese correo electronico" class="inicio_cont" type="text" name="correo">
                        <h2>Ingrese su nombre de usuario</h2>
                        <input id="ingresar" placeholder="Ingrese nombre de usuario" class="inicio_cont" type="text" name="nombre">
                        <h2>Contraseña</h2>
                        <input id="ingresar" placeholder="Ingrese contraseña" class="inicio_cont" type="password" name="contraseña">
                        <input id="aceptar" type="submit" value="Registrarse" class="inicio_cont boton" name="submit" />  
                    </form> 
                </div>
                <div class="datos2">
                    <p>¿Ya tienes cuenta?<a OnClick="location.href='../back/iniciarsesion.php'">Iniciar sesión</a></p>
                </div>
            </div>
    </div>
<?php  
if(isset($_POST["submit"])){
if(!empty($_POST['correo']) && !empty($_POST['nombre']) && !empty($_POST['contraseña'])) {
    $correo=$_POST['correo'];
    $nombre=$_POST['nombre'];
    $contraseña=$_POST['contraseña'];
    $con=mysqli_connect('localhost','root','','healthy2') or die(mysql_error());

    $query=mysqli_query($con,"SELECT * FROM usuario WHERE correo='".$correo."'");
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO usuario(nombre,correo,contraseña) VALUES('$nombre','$correo','$contraseña')";  
  
    $result=mysqli_query($con, $sql);  
        if($result){  
    echo "Cuenta de usuario creada";  
    } else {  
    echo "Error!";  
    }  
  
    } else {  
    echo "El usuario ingresado ya existe. Prueba algún otro";  
    }  
  
} else {  
    echo "Completar todos los campos";  
}  
}  
?> 
</body>

</html>
