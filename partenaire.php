<?php
    include("inc_bdd.php");

    include_once("secur_connect.php");




    if(isset($_GET['id']))
    {
        $query = $bdd -> prepare("SELECT * FROM partenaires WHERE id = :id");
        $query -> bindValue(":id", $_GET['id'], PDO::PARAM_INT);
        $query -> execute();
        
        $partenaire = $query -> fetch();
    }
    else
    {
        $partenaire = NULL;
    }

    // pour débugger
    // print_r($partenaire);


    if(!empty($partenaire))
    {
        
?>

<!DOCTYPE html>
<html>
<header>
    <meta charset = "utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style_partenaires.css" />
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
     <!-- Pour ceux qui ont une résolution inférieure à 1280px -->
    <title>Partenaires</title>
    
    <div ID="logo">
            <p>
            <a href="test.php"><img src="logo_mini.jpg" alt="" /></a>
            </p>
    </div>
</header>
</html>

<center>
<img src="partenaires/<?= $partenaire['image'] ?>" alt="">
</center>
<h2>
    <?= $partenaire['nom'] ?>
</h2>

<p>
    <?= $partenaire['description'] ?>
</p>

<div class="conteneur">
                <h3>
                    Commentaires
                </h3>

               <right><span><button type="submit">Nouveau<br> commentaire</button></span></right>
                
                <textarea rows="5" cols="auto" wrap="physique" name="commentaires"></textarea>
                    <div>
                    
                <form action="post_like_dislike.php" method="POST">
                    
                    
                    <div>
                        <input type="radio" id=""
                        name="partenaires" value="nblike">
                        <label for="like">Like</label>

                        <input type="radio" id=""
                        name="partenaires" value="nbdislike">
                        <label for="dislike">Dislike</label>

                    </div>
                    <button type="submit">Envoyer</button>
    
                    
                    </div>
	        </form>
            </div>   
	
               
               
               
<?php
    }
    else
    {
        echo "Pas de partenaire :(";
    }

