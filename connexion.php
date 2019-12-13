<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <link rel="stylesheet" href="accueil.css" />
        <title> connexion </title>
    </head>
   
    <body>

<?php
    // connexion.php
?>

<form action="post_connexion.php" method="POST">

    <div>
        Username* : <input type="Username" name="username" required> <br>
    

        Mot de passe* : <input type="password" name="motdepasse" required> <br>
    
    
        <a href="mdp_oublie.php">Mot de passe oublié ?</a>
    

    
        <button type="submit">Se connecter</button>
    </div>

</form>
    </body>
</html>