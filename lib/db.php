<?php
try{
	$db = new PDO('mysql:host=localhost;dbname=test_epsm','root','');
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 
}catch(Exception $e){
	echo 'Impossible de se connecter à la base de données';
	echo $e->getMessage();
	die();
}