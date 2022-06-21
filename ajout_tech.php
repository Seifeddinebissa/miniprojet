
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter technicien</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
       //vérifier que le bouton ajouter a bien été cliqué
       if(isset($_POST['button'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);
           //verifier que tous les champs ont été remplis
           if(isset($nom_t) && isset($prenom) && ($email) && isset ($password) && isset($telephone) ){
                //connexion à la base de donnée
                include_once "connexion.php";
                //requête d'ajout
                $req = mysqli_query($con , "INSERT INTO technicien VALUES(NULL, '$nom_t', '$prenom','$email', '$password','$telephone')");
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: index_tech.php");
                }else {//si non
                    $message = "Technicien non ajouté";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
    <div class="form">
        <a href="index_tech.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Ajouter un technicien</h2>
        <p class="erreur_message">
            <?php 
            // si la variable message existe , affichons son contenu
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Prénom</label>
            <input type="text" name="prenom">
            <label>email</label>
            <input type="number" name="age">
            <label>password</label>
            <input type="number" name="age">
            <label>telephone</label>
            <input type="number" name="age">

            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>