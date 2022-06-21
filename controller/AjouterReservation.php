<?php
require_once('../model/Reservation.php');
$reservation = new Reservation($_GET['id'],$_POST['date'],$_POST['heure'],$_POST['radio'],$_POST['activite']);
$res=$reservation->ajouter();
if($res>0)
header("location:../consulter_demande_ens.php?resultat=oui");
else
header("location:../ajouter_reservation.php?resultat=non");
?>