<?php
require_once('../model/Utilisateur.php');
$tel = intval($_POST['telephone']);
$utilisateur = new Utilisateur($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['password'],$tel,$_POST['username'],$_POST['role'],$_POST['statu']);
$res=$utilisateur->ajouter();
if($res>0)
header("location:../liste_reclamation_ens.php?resultat=oui");
else
header("location:/ajouter_reclamation.php?resultat=non");
?>