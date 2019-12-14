<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <link rel="stylesheet" href="accueil.css" />
        <title> inscription </title>
    </head>
    <body>

<?php
    // mdp_oublie.php
?>

<form action="post_mdp_oublie.php" method="POST">

    <div>
        Username* : <input type="text" name="username" required> <br> 

        Réponse à question secrète* : <input type="text" name="reponse" required> <br>

    
       <br> <button type="submit">Envoyer</button> 
    </div>

</form>
    </body>
</html>