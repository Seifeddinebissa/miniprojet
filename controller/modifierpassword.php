<?php
require_once('../model/registre_model.php');
$user = new User();
$user->modifierpassword($_POST['password'],$_POST['username']);

header("location:../login.php?resultat=oui");

?>