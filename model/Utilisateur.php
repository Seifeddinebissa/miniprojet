<?php
class Utilisateur{
private $nom;
private $prenom;
private $email;
private $tel;
private $password;
private $username;
private $role;
private $statu;



function __construct($nom,$prenom,$email,$tel,$password,$username,$role,$statu){
$this->nom = $nom;
$this->prenom = $prenom;
$this->email = $email;
$this->tel = $tel;
$this->password = $password;
$this->username = $username;
$this->role = $role;
$this->statu = $statu;
}



public function ajouter(){ 

include('../includes/connect_db.php');
      if($this->role == "enseignant"){
        $res = $bdd->exec("INSERT INTO `enseignant`(`nom_ens`, `prenom_ens`,`email_ens`,`telephone`,`password`,`username`,`role`,`statu`) 
        VALUES ('$this->nom','$this->prenom','$this->email',$this->tel,'$this->password','$this->username','$this->role','$this->statu')");
      } else if($this->role == "technicien"){
        $res = $bdd->exec("INSERT INTO `technicien`(`nom_t`, `prenom`,`email_t`,`password`,`telephone`,`username`,`role`,`statu`) 
        VALUES ('$this->nom','$this->prenom','$this->email','$this->password',$this->tel,'$this->username','$this->role','$this->statu')");
      } else if($this->role == "secretaire"){
        $res = $bdd->exec("INSERT INTO `secretaire`(`nom_sec`, `prenom_sec`,`email_sec`,`password`,`telephone`,`username`,`role`,`statu`) 
        VALUES ('$this->nom','$this->prenom','$this->email','$this->password',$this->tel,'$this->username','$this->role','$this->statu')");
      }   
    return $res;         
}



/*public static function supprimer(){ 
    
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
}*/


}
?>