<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.inicio.css">
    <link rel="shortcut icon" href="img/manzana_animado.png" type="image/x-icon"> 
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="inicio_cont">
        <div class="informacion">
            <form action="" method="POST">  
            <h1 class="inicio_cont">Inicio de sesión</h1>
            <p >Ingrese su correo electronico</p>
            <input placeholder="Ingresar correo" class="inicio_cont" type="text" name="correo">
            <p>Contraseña</p>
            <input placeholder="Ingresar contraseña" class="inicio_cont" type="password" name="contraseña">
            <input type="submit" class="inicio_cont boton"  value="Iniciar" name="submit" >  
        </form> 
                <?php 
                    if(isset($_POST["submit"])){  
            
                if(!empty($_POST['correo']) && !empty($_POST['contraseña'])) {  
                $correo=$_POST['correo'];  
                $contraseña=$_POST['contraseña'];  
            
                $con=mysqli_connect('localhost','root','','healthy2') or die(mysql_error());  
            
                $query=mysqli_query($con, "SELECT * FROM usuario WHERE correo='".$correo."' AND contraseña='".$contraseña."'");  
                $numrows=mysqli_num_rows($query);  
                if($numrows!=0)  
                {  
                    while($row=mysqli_fetch_assoc($query))  
                    {  
                    $dbusername=$row['correo'];  
                    $dbpassword=$row['contraseña'];  
                    }  
            
                    if($correo == $dbusername && $contraseña == $dbpassword)  
                    {  
                        
                        $_SESSION['sess_user']=$correo;  
                        echo "Usted ha iniciado sesión";  
                      
                    }  
                } else {  
                    echo "Usuario o password inválidos";  
                }  
            
                } else {  
                echo "Completar todos los campos";  
                }  
                }  
                ?>  

            <button OnClick="location.href='index.html'">Volver al inicio</button>
           
            <p class="footer" href="index.html">¿Aún no tienes una cuenta? <a href="registrarse.php">Regístrate</a></p>

        </div>
        <div class="imagen">
            <img src="img/imagenlogin_referencial.jpg">
        </div>
       <!-- <div class="icono">
            <img src="img/iconoblanco.png">
        </div>-->
    </div>
</body>
</html>