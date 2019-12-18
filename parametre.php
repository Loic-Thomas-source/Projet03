<?php
    // parametre.php

    include_once("secur_connect.php");
    include_once("inc_bdd.php");
?>    
<!DOCTYPE html>
<html>
<header>
     <meta charset = "utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style_connect.css" />
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
       <!-- Pour ceux qui ont une résolution inférieure à 1280px -->
       <title>GBAF</title>
    
    
	<div ID="logo">
        <p>
        <a href="test.php"><img src="logo_mini.jpg" alt="" /></a> <!--Logo GBAF -->
        </p>
    </div>

    <hr> <!-- Ligne de séparation -->

    <body>
	<section>
    <h1>Paramètre de compte</h1> <!-- Premier titre -->
    </section>
    </body>


    <?php
try
{
    
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
     
    if (isset($_SESSION['nom']) AND (isset($_SESSION['prenom'] )))
    {
        $req = $bdd->prepare('SELECT username FROM membres WHERE nom = :nom, prenom = :prenom, username = :username, motdepasse = :motdepasse, motdepasse_rep = :motdepasse_rep, question = :question, reponse = :reponse');
        $req -> execute( $_SESSION = array(
                        'nom' => $_POST['nom'],
                        'prenom' => $_POST['prenom'],
                        'username' => $_POST['username'],
                        'motdepasse' => $_POST['motdepasse'],
                        'motdepasse_rep' => $_POST['motdepassse_rep'],
                        'question' => $_POST['question'],
                        'reponse' => $_POST['reponse']
                    ));
     
        $donnees = $req->fetch();
         
        if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['username']) AND isset($_POST['motdepasse']) AND isset($_POST['motdepasse_rep']) AND isset($_POST['question']) AND isset($_POST['reponse']) AND 
        (empty($_POST['nom']) OR empty($_POST['prenom']) OR empty($_POST['username']) OR empty($_POST['motdepasse']) OR empty($_POST['motdepasse_rep'] OR empty($_POST['question'] OR empty($_POST['reponse'])))))
        {
            echo 'Vous avez laissé un ou plusieurs champs vide.';
        }
         
        elseif(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['username']) AND isset($_POST['motdepasse']) AND isset($_POST['motdepasse_rep']) AND isset($_POST['question']) AND isset($_POST['reponse']) AND 
        !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['username']) AND !empty($_POST['motdepasse']) AND !empty($_POST['motdepasse_rep']) AND !empty($_POST['question']) AND !empty($_POST['reponse']) )
        {
        $req_2 = $bdd->prepare('UPDATE membres SET nom = :nom, prenom = :prenom, username = :username, motdepasse = :motdepasse, motdepasse_rep = :motdepasse_rep, question = :question, reponse = :reponse
                                 WHERE username = :username');
        $req_2->execute(array(
         
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'username' => $_POST['username'],
        'motdepasse' => $_POST['motdepasse'],
        'motdepase_rep' => $_POST['motdepasse_rep'],
        'question' => $_POST['question'],
        'reponse' => $_POST['reponse']
        
        ));
         
        echo 'Vos informations de profil ont été correctement mis à jour';
         
        }
         
        ?>
        >
         
        <center><form method="post" action=".php">
         
        <label for="nom">Nom :</label><br>
        <input type="text" name="nom" id="nom" value="<?php echo $donnees['nom']; ?>"/><br>
         
        <label for="prenom">Prénom :</label><br>
        <input type="text" name="prenom" id="prenom" value="<?php echo $donnees['prenom']; ?>"/><br>
         
        <label for="username">Username :</label><br>
        <input type="text" name="username" id="username" value="<?php echo $donnees['username']; ?>"/><br>
         
        <label for="motdepasse">Mot de passe :</label><br>
        <input type="text" name="motdepasse" id="motdepasse" value="<?php echo $donnees['motdepasse']; ?>"/><br>

        <label for="motdepasse_rep">Répétition mot de passe :</label><br>
        <input type="text" name="motdepasse_rep" id="motdepasse_rep" value="<?php echo $donnees['motdepasse_rep']; ?>"/><br>

        <label for="question">Question secrète :</label><br>
        <input type="text" name="question" id="question" value="<?php echo $donnees['question']; ?>"/><br>

        <label for="reponse">Réponse secrète :</label><br>
        <input type="text" name="reponse" id="reponse" value="<?php echo $donnees['reponse']; ?>"/><br>


         
        <input type="submit" Value="Valider"/>
         
        </form></center>
         <br>
        <?php

            header("Refresh: 1;url=test.php");
         
         
    }
     
    else
    {
        echo 'Vous devez être connecté pour avoir accés à cette page';
    }
     
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

</header>
</html>


    
