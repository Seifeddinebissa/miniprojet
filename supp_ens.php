<?php
  //connexion a la base de données
  include_once "connexion.php";
  //récupération de l'id dans le lien
  $id= $_GET['id_ens'];
  //requête de suppression
  $req = mysqli_query($con , "DELETE FROM enseignant WHERE id_ens = $id");
  //redirection vers la page index.php
  header("Location:index_ens.php")
?>