<?php
class Projecteur{
private $id_vp;
private $modele;
private $etat;



function __construct($id_vp,$modele,$etat){
$this->id_vp = $id_vp;
$this->modele = $modele;
$this->etat = $etat;

}



public function ajouter(){ 

include('../includes/connect_db.php');
      
      $res = $bdd->exec("INSERT INTO `videoprojecteur`(`id_vp`, `modele`, `etat`) 
    VALUES ('$this->id_vp','$this->modele',$this->etat)");
    return $res;         
}



public static function supprimer(){ 
    
  include('../includes/connect_db.php');
  $id=$_GET['id'];
    $res = $bdd->exec("DELETE FROM videoprojecteur WHERE id_vp= $id"); 
 return $res;
 
 
}

public function modifier(){ 

    include('../includes/connect_db.php');
        $id=$_GET['id'];
        $res=$bdd->exec("UPDATE `videoprojecteur` SET `modele`='$this->modele',`etat`=$this->etat WHERE id_vp = $id");
        return $res;
        
        
        
}              



}