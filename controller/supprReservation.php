<?php 

require_once('../model/Reponse.php');
$res=Reponse::supprimer();
header("Location:../consulter_demande.php?supprimer=$res");


?>
				