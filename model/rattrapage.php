<?php

class Rattrapage{
  private $classe;
  private $dater;
  private $module;
  private $motif;
  private $id_ens;
  private $planifi_date_abs;
  private $anterieure_date;

  function __construct($classe,$dater,$module,$motif,$id_ens,$planifi_date_abs,$anterieure_date){
    $this->classe = $classe;
    $this->dater = $dater;
    $this->module = $module;
    $this->motif = $motif;
    $this->id_ens = $id_ens;
    $this->planifi_date_abs =$planifi_date_abs;
    $this->anterieure_date =$anterieure_date;

 


}



  public function ajouter(){ 

    include('../includes/connect_db.php');
          
          $req = $bdd->exec("INSERT INTO `rattrapage`(`classe`, `DateRatt`, `module`, `motif`, `id_ens`,'planifi_date_abs','anterieure_date') 
        VALUES ('$this->classe','$this->dater','$this->module','$this->module','$this->motif','$this->id_ens','$this->planifi_date_abs','$this->anterieure_date')");
          
          echo'<span class="message_envoyer">Message envoyer avec succes</span>';
          /*
            $req = $bdd->exec("INSERT INTO `rattrapage`(`classe`, `DateRatt`, `module`, `motif`, `id_ens`) 
            VALUES ('$this->classe','$this->dater','$this->module','$this->motif','$this->id_ens')");
             // return $req;
              echo'<span class="message_envoyer">Message envoyer avec succes</span>';*/
         
             
    }
    
    

}
?>
   
