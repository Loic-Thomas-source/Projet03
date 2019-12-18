<?php
    // post_mdp_oublie.php

    include_once("inc_bdd.php");

    extract($_POST);

    // A vérifier le formulaire
    if(!empty($username) AND (!empty($question)))
    {
        // B vérifier si username est dans la base
        $sql = "SELECT ID FROM membres
                WHERE username = :username";
        $query = $bdd -> prepare($sql);
        $query -> bindValue(":username", $username, PDO::PARAM_STR);
        $query -> execute();

        $result = $query -> fetch();

        
        $req = $bdd->prepare('SELECT ID FROM membres WHERE question = :question');
        $req->execute(array($_SESSION['question']));
     
        $donnees = $req->fetch();


        if(!empty($result))
        {
            
            echo "<a href='mdp_oublie1.0.php?'></a>";
            header("Refresh: 5;url=mdp_oublie1.0.php");
           
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