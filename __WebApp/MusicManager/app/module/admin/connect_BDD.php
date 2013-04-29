<?php
try
{

	$bdd = new PDO('mysql:host=localhost; dbname=musicmanagerv1', 'admin', 'admin');
	//$bdd = new PDO('mysql:host=localhost; dbname=music_manager', 'root', 'root');
	//$bdd = new PDO('mysql:host=localhost; dbname=EGVv5dO7', 'EGVv5dO7', 'admin');
}
catch(Exception $e)
{
	die('Erreur : '. $e->getMessage());
	echo "Erreur lors de la connection";
}
?>