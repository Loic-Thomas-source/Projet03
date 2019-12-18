<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <link rel="stylesheet" href="accueil.css" />
        <title> inscription </title>
    </head>
    <body>

<?php
    // inscription.php
?>

<form action="post_inscription.php" method="POST">

    <!-- nom, prenom, username, mot de passe X 2, case RGPD -->

    <div>
        Nom* :  <input type="text" name="nom" required> 
    
        Prénom* : <input type="text" name="prenom" required> <br>
    
        UserName* : <input type="text" name="username" required> <br>
    
        Mot de passe* : <input type="password" name="motdepasse" required> <br>
    
        Répétition mdp* : <input type="password" name="motdepasse_rep" required> <br>

        Question secrète* : <input type="text" name="question" required> <br>
                           

        Réponse à question secrète* : <input type="text" name="reponse" required> <br>
    
        RGPD* : <input type="checkbox" name="rgpd" required> 
        J'accepte la collecte de mes données personnelles 
        par le biais de ce formulaire et accepte parallèlement 
        le traitement et l'utilisation de celles-ci. <br>
    

    <button type="submit">S'inscrire</button>
    </div>
</form>



    </body>
</html>

