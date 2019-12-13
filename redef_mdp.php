<?php
    // redef_mdp.php

    include_once("inc_bdd.php");

    extract($_GET);

    if(
        !empty($Username) AND !empty($token)
    )
    {
        $sql = "SELECT Username FROM membres
                WHERE Username = :Username AND token = :token";
        $query = $bdd -> prepare($sql);
        $query -> bindValue(":Username", $Username, PDO::PARAM_STR);
        $query -> bindValue(":token", $token, PDO::PARAM_STR);
        $query -> execute();

        $result = $query -> fetch();

        if(!empty($result))
        {
            ?>

                <form action="post_redef_mdp.php" method="POST">

                    <div>
                        Nouveau mot de passe* :
                        <input type="password" name="motdepasse" required>
                    </div>
                    <div>
                        Confirmation* :  
                        <input type="password" name="motdepasse_rep" required>
                    </div>
                    <input type="text" name="Username" value="<?= $Username ?>">

                    <div>
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