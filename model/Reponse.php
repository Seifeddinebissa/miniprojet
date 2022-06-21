<?php
class Reponse{
private $id_reservation;
private $num_salle;
private $projecteur;



function __construct($id_reservation,$num_salle,$projecteur){
$this->id_reservation = $id_reservation;
$this->num_salle = $num_salle;
$this->projecteur = $projecteur;

}


public function modifier(){ 

  $d = intval($this->id_reservation);
  $p = intval($this->projecteur);
  include('../includes/connect_db.php');
      
    if($this->num_salle != ""){
      $res = $bdd->exec("UPDATE reservation SET num_salle = '$this->num_salle' WHERE id_reservation =  $d");
      $bdd->exec("UPDATE `reponsereservation` SET `etat` = 1 WHERE id_reservation =  $d");
      $bdd->exec("UPDATE `salle` SET `etat` = 1 WHERE num_salle = '$this->num_salle'");
      return $d;
    }else if($this->projecteur != 0){
      $res = $bdd->exec("UPDATE `reservation` SET `id_vp` = $p WHERE id_reservation =  $d");
      $bdd->exec("UPDATE `reponsereservation` SET `etat` = 1 WHERE id_reservation =  $d");
      $bdd->exec("UPDATE `videoprojecteur` SET `etat` = 1 WHERE id_vp =  $p");
      return $p;
    }
}              

public static function refuser(){
  include('../includes/connect_db.php');
  $id = $_GET['id'];
  $res = $bdd->exec("UPDATE `reponsereservation` SET `etat` = -1 WHERE id_reservation =  $id");
  return $res;
}

public static function supprimer(){
  include('../includes/connect_db.php');
  $id = $_GET['id'];
  $bdd->exec("DELETE FROM `reponsereservation` WHERE id_reservation = $id");
  $rs = $bdd->query("SELECT * FROM reservation WHERE id_reservation = $id");
  $res = $rs->fetch();
  if($res['id_vp']==NULL && $res['num_salle']==NULL){
    $bdd->exec("DELETE FROM `reponsereservation` WHERE id_reservation = $id");
    $bdd->exec("DELETE FROM `reservation` WHERE id_reservation = $id");
  }else{
    if($res['id_vp'] != NULL){
      $vp = $res['id_vp'];
      $bdd->exec("UPDATE videoprojecteur SET etat = 0 where id_vp = $vp");
    }else{
      $salle = $res['num_salle'];
      $bdd->exec("UPDATE salle SET etat = 0 where num_salle = '$salle'");
    }
    $bdd->exec("DELETE FROM `reponsereservation` WHERE id_reservation = $id");
    $bdd->exec("DELETE FROM `reservation` WHERE id_reservation = $id");
  }
  
}


}
?>