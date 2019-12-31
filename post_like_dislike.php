<?php
    // post_like_dislike.php

    include_once("inc_bdd.php");

    extract($_POST);

    // A vérifier 
    if(!empty($ID) AND (!empty($nblike) AND (!empty($nbdislike) AND (!empty($partenaires)))))
    {
        
        $sql = "SELECT ID FROM membres 
                WHERE ID = :ID";
        $query = $bdd -> prepare($sql);
        $query -> bindvalue(":ID", $ID, PDO::PARAM_INT);
        $query -> execute();

        $result = $query -> fetch();

        
        
            if(empty($result))        
            {
                 // INSERTION EN BASE
                $req = "INSERT INTO partenaires (ID, nblike, nbdislike)    
                        VALUES (:ID, :nblike, :nbdislike)";
                $req = $bdd -> prepare($sql);

                $query -> bindValue(":ID", $ID, PDO::PARAM_INT);
                $query -> bindValue(":nblike", $nblike, PDO::PARAM_STR);
                $query -> bindValue(":nbdislike", $nbdislike, PDO::PARAM_STR);
                $query -> execute();
            
            
            echo "<a href='partenaires.php?'></a>";

            
            header("Refresh");
            }
        
        
        else
        {
            echo "Vous avez pas sélectionner votre choix <a href='javascript:history.back()'>Retour</a>";
        }

    }
    else
    {
        echo "Erreur de formulaire <a href='javascript:history.back()'>Retour</a>";
    }
    
?>