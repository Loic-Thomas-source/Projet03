<?php
    // redef_mdp.php

    include_once("inc_bdd.php");

    extract($_GET);

    if(
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

                    <div>
                        Nouveau mot de passe* :
                        <input type="password" name="motdepasse" required> <br>
                    
                        Confirmation* :  
                        <input type="password" name="motdepasse_rep" required> <br>
                    
                        <input type="hidden" name="ID" value="<?= $ID ?>">

                    
                        <button type="submit">Envoyer</button>
                    </div>

                </form>

            <?php
        }
        else
        {
            echo "Erreur fatale";
        }
    }
    else
    {
        echo "Erreur fatale";
    }
?>