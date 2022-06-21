<?php
include_once 'modele.php';
class Salle extends Modele
{
    private $num_salle, $nom_salle, $etat;
    function __construct($num_salle="", $nom_salle="", $etat="")
    {
        $this->num_salle = $num_salle;
        $this->nom_salle = $nom_salle;
        $this->etat = $etat;
      
        parent::__construct();
    }
   
    function nomsalle()
    {
        $query = "SELECT * FROM salle  WHERE etat = 1";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

  
}
