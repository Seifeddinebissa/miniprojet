<?php
  //connexion a la base de données
  include_once "connexion.php";
  //récupération de l'id dans le lien
  $id= $_GET['id_t'];
  //requête de suppression
  $req = mysqli_query($con , "DELETE FROM technicien WHERE id_t = $id");
  //redirection vers la page index.php
  header("Location:index_tech.html")
?>