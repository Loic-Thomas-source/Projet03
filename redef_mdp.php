<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <link rel="stylesheet" href="accueil.css" />
        <title> connexion </title>
    </head>
   
    <body>
<?php
    // redef_mdp.php

    include_once("inc_bdd.php");

    extract($_GET);

    if
    (
        !empty($ID) AND !empty($token)
    )
    {
        $sql = "SELECT ID FROM membres
                WHERE ID = :ID AND token = :token";
        $query = $bdd -> prepare($sql);
        $query -> bindValue(":ID", $ID, PDO::PARAM_INT);
        $query -> bindValue(":token", $token, PDO::PARAM_STR);
        $query -> execute();

        $result = $query -> fetch();

        if(!empty($result))
        {
            ?>

                <form action="post_redef_mdp.php" method="POST">

            <center><div>
                        Nouveau mot de passe* :
                        <input type="password" name="motdepasse" required> <br>
                    
                        Confirmation* :  
                        <input type="password" name="motdepasse_rep" required> <br>
                    
                        <input type="hidden" name="ID" value="<?= $ID ?>">

                    
                        <button type="submit">Envoyer</button>
            </center></div>

                </form>

            <?php
        }
        else
        {
            echo "Erreur fatale 2";
        }
    }
    else
    {
        echo "Erreur fatale";
    }
?>
    </body>
</html>