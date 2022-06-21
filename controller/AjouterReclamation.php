<?php
require_once('../model/Reclamation.php');
$reclamation = new Reclamation($_GET['id'],$_POST['numsalle'],$_POST['type'],$_POST['desc'],$_POST['per']);
$res=$reclamation->ajouter();
if($res>0)
header("location:../liste_reclamation_ens.php?resultat=oui");
else
header("location:/ajouter_reclamation.php?resultat=non");
?>