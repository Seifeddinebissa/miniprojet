<?php
class Connection{
private $login_ad;
private $mdp_ad;

        
function __construct($login_ad,$mdp_ad){
$this->login_ad = $login_ad;
$this->mdp_ad = $mdp_ad;


}


public function verifier(){ 

    include('../includes/connect_db.php');
    $req = $bdd->query(" SELECT * FROM chef_departement WHERE username = '$this->login_ad' AND password = '$this->mdp_ad' AND role = 'admin'");
    $resultat = $req->fetch();
    $req1 = $bdd->query(" SELECT * FROM enseignant WHERE username = '$this->login_ad' AND password = '$this->mdp_ad' AND role = 'enseignant'");
    $resultat1 = $req1->fetch();
    $req2 = $bdd->query(" SELECT * FROM secretaire WHERE username = '$this->login_ad' AND password = '$this->mdp_ad' AND role = 'secretaire'");
    $resultat2 = $req2->fetch();
    $req3 = $bdd->query(" SELECT * FROM technicien WHERE username = '$this->login_ad' AND password = '$this->mdp_ad' AND role = 'technicien'");
    $resultat3 = $req3->fetch();

  /*if (!$resultat && !$resultat1 && !$resultat2 && !$resultat3)
{
  header('location:../login.php');
  
}*/
   if($resultat){
       session_start();

       $_SESSION['id_chef'] = $resultat['id_chef'];
       $_SESSION['nom_chef'] = $resultat['nom_chef'];
       $_SESSION['prenom_chef'] = $resultat['prenom_chef'];
       $_SESSION['email_chef'] = $resultat['email_chef'];       
       $_SESSION['username'] = $resultat['username'];
       $_SESSION['password'] = $resultat['password'];
       
	   
	header('location:../consulter_demande.php?chef');


}else if($resultat1){ 
  session_start();

       $_SESSION['id_ens'] = $resultat1['id_ens'];
       $_SESSION['nom_ens'] = $resultat1['nom_ens'];
       $_SESSION['prenom_ens'] = $resultat1['prenom_ens'];
       $_SESSION['email_ens'] = $resultat1['email_ens'];
       $_SESSION['telephone'] = $resultat1['telephone'];       
       $_SESSION['password'] = $resultat1['password'];
       $_SESSION['username'] = $resultat1['username'];

       header('location:../consulter_demande_ens.php?enseignant');
}else if($resultat2){ 
  session_start();

       $_SESSION['id_sec'] = $resultat2['id_sec'];
       $_SESSION['nom_sec'] = $resultat2['nom_sec'];
       $_SESSION['prenom_sec'] = $resultat2['prenom_sec'];
       $_SESSION['email_sec'] = $resultat2['email_sec'];      
       $_SESSION['password'] = $resultat2['password'];
       $_SESSION['telephone'] = $resultat2['telephone']; 
       $_SESSION['username'] = $resultat2['username'];
       
       header('location:../index.php?secritaire');
}elseif($resultat3){
  session_start();

       $_SESSION['id_t'] = $resultat3['id_t'];
       $_SESSION['nom_t'] = $resultat3['nom_t'];
       $_SESSION['prenom'] = $resultat3['prenom'];
       $_SESSION['email_t'] = $resultat3['email_t'];      
       $_SESSION['password'] = $resultat3['password'];
       $_SESSION['telephone'] = $resultat3['telephone']; 
       $_SESSION['username'] = $resultat3['username'];
       
       header('location:../liste_reclamation.php?technicien');
}else{
  header("location:../login.php");
}

}

}
$admin = new Connection($_POST['username'],$_POST['password']);
?>