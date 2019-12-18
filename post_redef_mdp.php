<?php
    // post_redef_mdp.php

    include_once("inc_bdd.php");

    extract($_POST);

    if(
        !empty($motdepasse) AND !empty($motdepasse_rep)
        AND !empty($ID)
    )
    {
        if($motdepasse === $motdepasse_rep)
        {
            

            $sql = "UPDATE membres
                    SET motdepasse = :motdepasse, motdepasse_rep = :motdepasse_rep, token = NULL
                    WHERE ID = :ID";

            $query = $bdd -> prepare($sql);
            $query -> bindValue(":ID", $ID, PDO::PARAM_INT);
            $query -> bindValue(":motdepasse", $motdepasse, PDO::PARAM_STR);
            $query -> bindValue(":motdepasse_rep", $motdepasse_rep, PDO::PARAM_STR);
            $query -> execute();

            echo "Le mot de passe est modifié ! <a href='Accueil.php'> Accueil</a>";
            header("Refresh: 1;url=accueil.php");

        }
        else
        {
            echo "Mots de passe différents";
        }
    }
    else
    {
        echo "Erreur de formulaire";
    }
?>