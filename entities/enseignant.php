<?php
include_once 'modele.php';
class Enseignant extends Modele
{
    private $id_ens, $nom_ens, $prenom_ens,$email_ens, $password, $telephone,$username;
    function __construct($idu = "", $nom_ens = "", $prenom_ens = "", $email_ens = "", $telephone = "",$password= "",$username="")
    {
        $this->idu = $idu;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email_ens = $email_ens;
        $this->telephone = $telephone;
        $this->password = $password;
        $this->username = $username;
        parent::__construct();
    }
   /* function insert($nom, $prenom, $adresse, $telephone)
    {
        $query = "INSERT INTO utilisateur (nom, prenom, adresse, telephone) VALUES (?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($nom, $prenom, $adresse, $telephone));
    }
    function modify($nom, $prenom, $adresse, $telephone, $idu)
    {  
        $query = "UPDATE utilisateur SET nom = ?, prenom = ?, adresse = ?, telephone =  ? WHERE idu = ?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($nom, $prenom, $adresse, $telephone, $idu));
    }
    function display()
    {
        $query = "SELECT * FROM utilisateur";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function display_user($idu)
    {
        $query = "SELECT * FROM utilisateur WHERE idu = $idu";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }*/
    function nomens()
    {
        $query = "SELECT * FROM enseignant ";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

   /* function DeleteUser($idu){
        $query = "DELETE FROM utilisateur WHERE idu = ?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idu));    
    }*/
}
