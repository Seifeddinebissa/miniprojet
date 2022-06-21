<?php 

require_once('../model/Projecteur.php');
$projecteur = new Projecteur($_POST['id'],$_POST['modele'],$_POST['etat']);

$projecteur->modifier();

header("location:../liste_projecteur.php?resultat=oui");

?>
							