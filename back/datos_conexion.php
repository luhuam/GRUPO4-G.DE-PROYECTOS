<?php    
	$db_host = "localhost"; //DIRECCION URL
	$db_nombre = "healthy2"; // BASE DE DATOS
	$db_usuario = "root"; //USUARIO DE LA BASE DE DATOS
	$db_contra = ""; //CONTRASEÑA POR DEFECTOS


	try {
	$conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
	} catch (PDOException $e) {
	die("PDO Connection Error: " . $e->getMessage());
	}
?>