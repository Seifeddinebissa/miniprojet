<?php
class Reservation{
private $id_ens;
private $date;
private $heure;
private $type;
private $activite;



function __construct($id_ens,$date,$heure,$type,$activite){
$this->id_ens = $id_ens;
$this->date = $date;
$this->heure = $heure;
$this->type = $type;
$this->activite = $activite;

}

public function ajouter(){ 

include('../includes/connect_db.php');
      
      $res = $bdd->exec("INSERT INTO `reservation`(`date`, `heure`,`activite`, `type`,`id_ens`) VALUES ('$this->date','$this->heure','$this->activite','$this->type',$this->id_ens)");
      
      $stmt = $bdd->query("SELECT LAST_INSERT_ID()");
      $lastId = $stmt->fetchColumn();
      $res1 = $bdd->exec("INSERT INTO `reponsereservation`(`id_reservation`,`etat`) VALUES ($lastId,0)");
    return $res;         
}



public function supprimer(){ 
    
  include('../includes/connect_db.php');
  $id=$_GET['id'];
    $res = $bdd->exec("DELETE FROM reservation WHERE id_reservation= $id"); 
 return $res;
 
 
}

public function modifier(){ 

    include('../includes/connect_db.php');
        
        
}              



}