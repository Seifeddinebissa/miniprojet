<?php
try {
		$bdd = new PDO('mysql:host=localhost;dbname=departement', 'root', '');

	} catch(Exception $e) {
		die('Erreur: '.$e->getMessage());
		
	}
	$bdd->query("SET NAMES UTF8")
?>