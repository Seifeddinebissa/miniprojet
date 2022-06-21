<?php 

require_once('../model/Reponse.php');
$res=Reponse::refuser();
if($res>0)
header("Location:../consulter_demande.php?refuser=oui");
else
header("Location:../consulter_demande.php?refuser=non");

?>
				