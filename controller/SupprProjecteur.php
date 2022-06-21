<?php 

require_once('../model/Projecteur.php');
$res=Projecteur::supprimer();
if($res>0)
header("Location:../liste_projecteur.php?resultat=oui");
else
header("Location:../liste_projecteur.php?resultat=non");
?>
				