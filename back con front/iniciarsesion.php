<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/iniciarsesion.css">
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
            </div>
        </div>
    </header> 
    <div class="container-all container" id="move-content">
            <div class="formulario">
                <img src="../img/iniciodesesion/icono.png">
                <h1>Inicia sesión en <strong>HEALTHYHOME</strong></h1>
                <div class="datos1">
                    <form action="" method="POST">  
                        <h2>Nombre de usuario o correo</h2>
                        <input id="ingresar" placeholder="Ingrese correo electronico" class="inicio_cont" type="text" name="correo">
                        <h2>Contraseña</h2>
                        <input id="ingresar" placeholder="Ingrese contraseña" class="inicio_cont" type="password" name="contraseña">
                        <input id="aceptar" type="submit" value="Iniciar sesión" class="inicio_cont boton" name="submit" />  
                    </form> 
                </div>
                <div class="datos2">
                    <p>¿Aún no tienes una cuenta?<a OnClick="location.href='../back/registrarse.php'">Regístrate</a></p>
                </div>
            </div>
    </div>
<?php  

if(isset($_POST["submit"])){
if(!empty($_POST['correo']) && !empty($_POST['contraseña'])) {
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$con=mysqli_connect('localhost','root','','healthy2') or die(mysql_error());

$query=mysqli_query($con,"SELECT * FROM usuario WHERE correo='".$correo."'");
$numrows=mysqli_num_rows($query);  
if($numrows==0)  
{  
$sql="INSERT INTO usuario(correo,contraseña) VALUES('$correo','$contraseña')";  

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
