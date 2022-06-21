<?php 

require_once('../model/Reponse.php');
$reponse = new Reponse($_POST['idt'],$_POST['salle'],$_POST['vp']);

$res = $reponse->modifier();

header("location:../consulter_demande.php?resultat=$res");

?>
							