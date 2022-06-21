<?php 

require_once('../model/Reclamation.php');

$res = Reclamation::modifier();

header("location:../liste_projecteur.php?resultat=oui");

?>
							