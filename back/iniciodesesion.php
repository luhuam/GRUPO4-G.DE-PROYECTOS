<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/iniciarsesion.css">
    <title>Inicio de sesión</title>
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
                <h1>Inicia sesión en <strong>HEALTHYHOME</strong></h1>
        <div class="mensaje">
                <?php 
                    if(isset($_POST["submit"])){  
            
                if(!empty($_POST['email']) && !empty($_POST['password'])) {  
                $email=$_POST['email'];  
                $password=$_POST['password'];  
                $con=mysqli_connect('localhost','root','','healthy2') or die(mysql_error());  
                $query=mysqli_query($con, "SELECT * FROM usuario WHERE email='".$email."' AND password='".$password."'");  
                $numrows=mysqli_num_rows($query);  
                if($numrows!=0)  
                {  
                    while($row=mysqli_fetch_assoc($query))  
                    {  
                    $dbusername=$row['email'];  
                    $dbpassword=$row['password'];  
                    }  
            
                    if($email == $dbusername && $password == $dbpassword)  
                    {  
                        
                        $_SESSION['sess_user']=$email;  
                        echo "✅ Usted ha iniciado sesión";  
                      
                    }  
                } else {  
                    echo "❌ Usuario o password inválidos";  
                }  
            
                } else {  
                echo "🔁 Completar todos los campos";  
                }  
                }  
                ?>  
        </div>
        <div class="datos1">
            <form action="" method="POST">  
            <p >Ingrese su correo electronico</p>
            <input id="ingresar"  placeholder="Ingresar correo" class="inicio_cont" type="text" name="email">
            <p>Contraseña</p>
            <input id="ingresar" placeholder="Ingresar contraseña" class="inicio_cont" type="password" name="password">
            <input id="aceptar" type="submit" class="inicio_cont boton"  value="Iniciar" name="submit" >  
        </form> 
            </div>
        <div class="datos2">
            <a href="registrarcontraseña.php">¿Olvidaste tu Contraseña?</a>
            <p class="footer" href="index.html">¿Aún no tienes una cuenta? <a href="registrarse.php">Regístrate</a></p>
        </div>
        </div>
            </div>
</body>
</html>