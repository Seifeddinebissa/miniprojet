<?php 

require_once('../model/Reclamation.php');
$res=Reclamation::supprimer();
if($res>0)
header("Location:../liste_reclamation_ens.php?resultat=oui");
else
header("Location:../liste_reclamation_ens.php?resultat=non");
?>
				