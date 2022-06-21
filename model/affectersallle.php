<?php

class ReponseRattrapage{
  private $id_rattrappage;
  private $num_salle;
  private $etat='valider';
  

  function __construct($id_rattrappage,$num_salle,$etat){
    $this->id_rattrappage = $id_rattrappage;
    $this->num_salle = $num_salle;
    $this->etat = $etat;
   
}
public function ajouter(){ 

    include('../includes/connect_db.php');
    $req = $bdd->exec("INSERT INTO `reponserattrapage`(`id_rattrappage`, `num_salle`, `etat`) 
            VALUES ('$this->id_rattrappage','$this->num_salle','$this->etat')");
             // return $req;
              echo'<span class="message_envoyer">Message envoyer avec succes</span>';

}
}