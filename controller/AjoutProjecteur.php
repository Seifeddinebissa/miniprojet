<?php
require_once('../model/Projecteur.php');
$projecteur = new Projecteur($_POST['id'],$_POST['modele'],$_POST['etat']);
$res=$projecteur->ajouter();
if($res>0)
header("location:../liste_projecteur.php?resultat=oui");
else
header("location:/ajouter_projecteur.php?resultat=non");
?>