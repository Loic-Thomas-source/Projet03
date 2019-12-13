<?php
    // post_inscription.php

    include_once("inc_bdd.php");

    extract($_POST);

    if(
        !empty($nom) AND !empty($prenom) AND !empty($username) AND !empty($motdepasse)
        AND !empty($motdepasse_rep) AND !empty($rgpd)
    )
    {
        // vérification de username
        $sql = "SELECT username FROM membres
                WHERE username = :username";
        $query = $bdd -> prepare($sql);
        $query -> bindValue(":username", $username, PDO::PARAM_STR);
        $query -> execute();

        $result = $query -> fetch();

        if(empty($result)) // si résultat vide = pas username                           pas d'username = continue l'inscription
        {
            if($motdepasse === $motdepasse_rep)                     // si les mots de passe sont identiques
            {
                
                // INSERTION EN BASE
                $reponse = $bdd -> prepare('INSERT INTO membres (nom, prenom, username, motdepasse, motdepasse_rep) VALUES (:nom, :prenom, :username, :motdepasse, :motdepasse_rep');
                $reponse -> execute(array(
                    'nom' => $nom,PDO::PARAM_STR,
                    'prenom' => $prenom,PDO::PARAM_STR,
                    'username' => $username,PDO::PARAM_STR,
                    'motdepasse' => $motdepasse,PDO::PARAM_STR,
                    'motdepasse_rep' => $motdepasse_rep,PDO::PARAM_STR
                    ));

                

                
                   
                

                echo "Vous êtes inscrit ! <a href='Accueil.php'> Accueil</a>";

                header("Refresh: 5;url=Accueil.php");
            }
            else
            {
                echo "Mots de passe différents.                 <a href='javascript:history.back()'>Retour</a>";
            }
        }
        else // si résultat = username
             // username = on s'arrête
        {
            echo "Ce username existe déjà. Voulez-vous vous <a href='connexion.php'>connecter</a> ?";
        }

    }
    else
    {
        echo "Erreur de formulaire : 
            <a href='javascript:history.back()'>Retour</a>";
    }
?>