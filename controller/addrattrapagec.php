<?php
require_once('../model/rattrapage.php');
$rattrapage = new Rattrapage($_POST['classe'],$_POST['dater'],$_POST['module'],$_POST['motif'],$_POST['ens'],$_POST['dateabs'],$_POST['dateant']);
$rattrapage->ajouter();

header("location:../login.php?resultat=oui");

?>