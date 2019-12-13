<?php
    // post_mdp_oublie.php

    include_once("inc_bdd.php");

    extract($_POST);

    // A vérifier le formulaire
    if(!empty($Username))
    {
        // B vérifier si username est dans la base
        $sql = "SELECT ID FROM membres
                WHERE Username = :Username";
        $query = $bdd -> prepare($sql);
        $query -> bindValue(":Username", $Username, PDO::PARAM_STR);
        $query -> execute();

        $result = $query -> fetch();
        if(!empty($result))
        {
            // C afficher un message 'On vous envoie un mail'
            $id = $result['ID'];
            $token = md5( uniqid( rand(), true ) );

            $sql = "UPDATE membres
                    SET token = :token
                    WHERE Username = :Username";
            $query = $bdd -> prepare($sql);
			$query -> bindValue(":Username", $Username, PDO::PARAM_STR);
			$query -> bindValue(":token", $token, PDO::PARAM_STR);
			$query -> execute();

            echo "On vous renvoie vers un  ";
            echo "<a href='redef_mdp.php?Username=$Username&token=$token'>LIEN</a>";
            // $_GET['id'] ==> ?id=
            // $_GET['token'] ==> &token=
        }
        else
        {
            echo "Username invalide <a href='javascript:history.back()'>Retour</a>";
        }

    }
    else
    {
        echo "Erreur de formulaire <a href='javascript:history.back()'>Retour</a>";
    }

    
?>