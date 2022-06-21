<?php

class User{
  private $nom;
  private $prenom;
  private $tel;
  private $email;
  private $username;
  private $password;
  private $profil;
         
function __construct($nom,$prenom,$email,$tel,$password,$username){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->tel = $tel;
    $this->password = $password;
    $this->username = $username;


}




public function ajouter(){ 

    include('../includes/connect_db.php');
        
    if (isset($_POST['profil']) && $_POST['profil']=="enseignant"){
      
          
    $req = $bdd->exec("INSERT INTO `enseignant`(`nom_ens`, `prenom_ens`, `email_ens`, `telephone`, `password`, `username`) 
     VALUES ('$this->nom','$this->prenom','$this->email','$this->tel','$this->password','$this->username')");
          
          echo'<span class="message_envoyer">Compte creer avec succes</span>';
                   
             
    }
    elseif($_POST['profil'] && $_POST['profil']=="secretaire"){
      $req = $bdd->exec("INSERT INTO `secretaire`(`nom_sec`, `prenom_sec`, `email_sec`, `telephone`, `password`, `username`) 
     VALUES ('$this->nom','$this->prenom','$this->email','$this->tel','$this->password','$this->username')");
          
          echo'<span class="message_envoyer">Compte creer avec succes</span>';

    }
    elseif($_POST['profil'] && $_POST['profil']=="technicien"){
      $req = $bdd->exec("INSERT INTO `technicien`(`nom_t`, `prenom`, `email_t`, `telephone`, `password`, `username`) 
     VALUES ('$this->nom','$this->prenom','$this->email','$this->tel','$this->password','$this->username')");
          
          echo'<span class="message_envoyer">Compte creer avec succes</span>';

    }
  
    else
    echo'<span class="message_envoyer">choix profil obligatoire</span>';
        

   }


   public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `enseignant` SET  'nom_ens'='$this->nom','prenom_ens'='$this->prenom','email_ens'='$this->email','telephone'='$this->tel','password'='$this->password','username'='$this->username'
         WHERE id_client = $id");
        
        
        
        
}              
public function modifierpassword($password,$username){ 

  include('../includes/connect_db.php');

     $id=$bdd->exec(" select 'id_ens' from enseignant where 'username'= '$username' ");
      
      $r=$bdd->exec(" UPDATE `enseignant` SET `password`='$password' WHERE id_ens = $id");
      
      
      
}     
  

}

?>