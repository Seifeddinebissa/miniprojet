<?php
class Reclamation{
private $id_ens;
private $numsalle;
private $type;
private $desc;
private $per;



function __construct($id_ens,$numsalle,$type,$desc,$per){
$this->id_ens = $id_ens;
$this->numsalle = $numsalle;
$this->type = $type;
$this->desc = $desc;
$this->per = $per;

}



public function ajouter(){ 

include('../includes/connect_db.php');
      
      $res = $bdd->exec("INSERT INTO `reclamation`(`numsalle`, `type`, `description`,`perioritee`,`etat`,`id_ens`) 
    VALUES ('$this->numsalle','$this->type','$this->desc','$this->per','en cours de traitement',$this->id_ens)");
    return $res;         
}



public static function supprimer(){ 
    
  include('../includes/connect_db.php');
  $id=$_GET['id'];
  $res = $bdd->exec("DELETE FROM reclamation WHERE id_reclamation= $id"); 
 return $res;
 
 
}

             
public static function modifier(){
  include('../includes/connect_db.php');
  $id=$_GET['id'];
  $res = $bdd->exec("UPDATE `reclamation` SET etat = 'terminee' WHERE id_reclamation = $id");
  return $res;
}


}
?>