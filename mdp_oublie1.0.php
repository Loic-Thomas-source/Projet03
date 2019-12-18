<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <link rel="stylesheet" href="accueil.css" />
        <title> Mdp oublier </title>
    </head>
    <body>

<?php
    // mdp_oublie1.0.php
?>

<form action="post_mdp_oublie1.0.php" method="POST">

    <div>
                                            
        Question secrète* : <input type="text" name="question" id="question" value="<?php echo $donnees['question']; ?>"/>
                            
        

        Réponse à question secrète* : <input type="text" name="reponse" required>

        

       <br> <button type="submit">Envoyer</button> 
    </div>

</form>
    </body>
</html>