<?php
require_once('../model/registre_model.php');
$user = new User($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['tel'],$_POST['password'],$_POST['username']);
$user->modifier();

header("location:../login.php?resultat=oui");

?>