<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/iniciarsesion.css">
    <title>Registrarse</title>
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
    <style>
        .mensaje{
            margin-bottom:10px;
        }
    </style>  
<div class="container-all container" id="move-content">
    <div class="formulario">
    <img src="../img/iniciodesesion/icono.png">
        <h1>Registrarse</h1>
        <div class="mensaje">
            <?php  

            if(isset($_POST["submit"])){
            if(!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['password'])) {
                $email=$_POST['email'];
                $name=$_POST['name'];
                $password=$_POST['password'];
                $con=mysqli_connect('localhost','root','','healthy2') or die(mysql_error());

                $query=mysqli_query($con,"SELECT * FROM usuario WHERE email='".$email."'");
                $numrows=mysqli_num_rows($query);  
                if($numrows==0)  
                {  
                $sql="INSERT INTO usuario(name,email,password) VALUES('$name','$email','$password')";  
            
                $result=mysqli_query($con, $sql);  
                    if($result){  
                echo "✅ Cuenta de usuario creada";  
                } else {  
                echo "Error!";  
                }  
            
                } else {  
                echo "🔁 El usuario ingresado ya existe. Prueba algún otro";  
                }  
            
            } else {  
                echo "📝 Completar todos los campos";  
            }  
            }  
            ?> 
        </div>
        <div class="datos1">
            <form action="" method="POST">  
        
                <h1 class="inicio_cont">Registrarse</h1>
                <p >Ingrese su correo electronico</p>
                <input id="ingresar" placeholder="Ingrese correo electronico" class="inicio_cont" type="text" name="email">
                <p >Ingrese su nombre de usuario</p>
                <input id="ingresar" placeholder="Ingrese nombre de usuario" class="inicio_cont" type="text" name="name">
                <p>Contraseña</p>
                <input id="ingresar" placeholder="Ingrese contraseña" class="inicio_cont" type="password" name="password">
                <input id="aceptar" type="submit" value="Registrarse" class="inicio_cont boton" name="submit" />              
            </form> 
        </div>
        <div class="datos2">
            <p class="footer">¿Ya tienes una cuenta? <a href="iniciodesesion.php">Iniciar sesión</a></p>
        </div>
        </div>
    </div>
</body>
</html>