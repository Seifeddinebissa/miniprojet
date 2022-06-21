
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des secretaires</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <a href="ajout_sec.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>
        
        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>email</th>
                <th>telephone</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php 
                //inclure la page de connexion
                include_once "connexion.php";
                //requête pour afficher la liste des employés
                $req = mysqli_query($con , "SELECT * FROM secretaire");
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas des secretaires dans la base de données , alors on affiche ce message :
                    echo "Il n'y a pas encore dessecretaires ajouter !" ;
                    
                }else {
                    //si non , affichons la liste de tous les secretaires
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['nom']?></td>
                            <td><?=$row['prenom']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['telephone']?></td>

                            <!--Nous alons mettre l'id de chaque secretaire dans ce lien -->
                            
                            <td><a href="supp_sec.php?id=<?=$row['id']?>"><img src="images/trash.png"></a></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>
      
         
        </table>  
   
    </div>
</body>
</html>