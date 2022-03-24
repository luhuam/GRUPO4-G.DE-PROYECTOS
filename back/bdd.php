<?php
try
{
	$bdd = new PDO('mysql:host=localhost:3307;dbname=healthy;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}