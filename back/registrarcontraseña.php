
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.inicio.css">
    <link rel="shortcut icon" href="img/manzana_animado.png" type="image/x-icon"> 
    <title>Registrarse</title>
</head>
<body>
    <div class="inicio_cont">
        <div class="informacion">
        <form action="" method="POST">  
       
            <h1 class="inicio_cont">Crear Nueva contraseña</h1>
            <p >Ingrese su correo electronico</p>
            <input placeholder="Ingrese correo electronico" class="inicio_cont" type="text" name="correo">
            <p>Contraseña</p>
            <input placeholder="Ingrese contraseña" class="inicio_cont" type="password" name="contraseña">
            <input type="submit" value="CONFIRMAR" class="inicio_cont boton" name="submit" />  
            
          
</form> 
<button OnClick="location.href='index.html'" >Volver al inicio</button>
            
 
<?php  

if(isset($_POST["submit"])){
    if(!empty($_POST['correo']) && !empty($_POST['contraseña'])) {
        $correo=$_POST['correo'];
        $contraseña=$_POST['contraseña'];
        $con=mysqli_connect('localhost','root','','healthy2') or die(mysql_error());
    
        $query=mysqli_query($con,"SELECT * FROM usuario WHERE correo='".$contraseña."'");
        $numrows=mysqli_num_rows($query);  
        if($numrows==0)  
        {  
        $sql="INSERT INTO usuario(nombre,correo,contraseña) VALUES('null','$correo','$contraseña')";  
      
        $result=mysqli_query($con, $sql);  
            if($result){  
        echo "Nueva contraseña generada";  
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
            </div>
            <div class="imagen">
                <img src="img/imagenlogin_referencial.jpg">
            </div>
         <!--   <div class="icono">
                <img src="img/iconoblanco.png">
            </div> -->
        </div>
    </body>
    </html>