<?php
include_once 'modele.php';
class Rattrapage extends Modele
{
    private $id_rattrapage, $classe, $DateRatt,$module, $motif,$ens;
    function __construct($id_rattrapage = "", $classe = "", $DateRatt = "", $module = "", $motif = "",$ens="")
    {
        $this->id_rattrapage = $id_rattrapage;
        $this->classe = $classe;
       
        $this->DateRatt = $DateRatt;
        $this->module = $module;
        $this->motif = $motif;
        $this->ens = $ens;

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
    function listeR()
    {
        $query = "SELECT * FROM rattrapage ";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function listeRens()
    {
        $query = "SELECT * FROM rattrapage r, enseignant e WHERE 'r.id_ens' =  'e.id_ens' ";
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
