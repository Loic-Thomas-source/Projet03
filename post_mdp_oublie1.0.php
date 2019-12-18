<?php
 // post_mdp_oublie1.0.php

    include_once("inc_bdd.php");

    extract($_POST);
    // A vérifier le formulaire
    if(!empty($reponse) AND (!empty($question)))
    {
        //B vérifier réponse à question secrète
        $sql = "SELECT ID FROM membres 
                WHERE reponse = :reponse AND question = :question";
        $query = $bdd -> prepare($sql);
        $query -> bindValue(":reponse", $reponse, PDO::PARAM_STR);
        $query -> bindValue(":question", $question, PDO::PARAM_STR);
        $query -> execute();

        $result =$query -> fetch();

        if(!empty($result))
        {
            // C afficher un message 'On vous envoie un formulaire'
            $ID = $result['ID'];
            $token = uniqid( rand(), true ) ;

            $sql = "UPDATE membres
                    SET token = :token
                    WHERE ID = :ID";
            $query = $bdd -> prepare($sql);
            $query -> bindValue(":ID", $ID, PDO::PARAM_INT);
			$query -> bindValue(":token", $token, PDO::PARAM_STR);
			$query -> execute();

            echo "On vous renvoie vers un formulaire  ";
            echo "<a href='redef_mdp.php?ID=$ID&token=$token'>LIEN</a>";
            // $_GET['id'] ==> ?id=
            // $_GET['token'] ==> &token=
        }
        else
        {
            echo "réponse secrète invalide <a href='javascript:history.back()'>Retour</a>";
        }

    }
    else
    {
        echo "Erreur de formulaire <a href='javascript:history.back()'>Retour</a>";
    }
?>