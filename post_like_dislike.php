<?php
    // post_like_dislike.php

    include_once("inc_bdd.php");

    extract($_POST);

    // A vérifier 
    if(!empty($ID) AND (!empty($choixL) AND (!empty($choixD) AND (!empty($partenaires)))))
    {
        
        if(empty($result)) 
        {
            if($motdepasse === $motdepasse_rep)                     
            {
                
                // INSERTION EN BASE
                $sql = "INSERT INTO aime (choixL, choixD, partenaires)         VALUES (:choixL, :choixD, :partenaires)";
                $query = $bdd -> prepare($sql);
                $query -> bindValue(":ID", $ID, PDO::PARAM_INT);
                $query -> bindValue(":choixL", $choixL, PDO::PARAM_STR);
                $query -> bindValue(":choixD", $choixD, PDO::PARAM_STR);
                $query -> bindvalue(":partenaires", $partenaires, PDO::PARAM_STR);
                $query -> execute();
            {
            
            echo " <a href='protectpeople.php?'></a>";

            
            header("Refresh");
           
        }
        }
        else
        {
            echo "  Vous avez pas sélectionner votre choix <a href='javascript:history.back()'>Retour</a>";
        }

    }
    else
    {
        echo "Erreur de formulaire <a href='javascript:history.back()'>Retour</a>";
    }
    }
?>