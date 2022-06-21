<?php
require_once('../model/affectersallle.php');
$rpr = new ReponseRattrapage($_POST['idr'],$_POST['salle'],'valider');
$rpr->ajouter();

//header("location:../login.php?resultat=oui");

?>