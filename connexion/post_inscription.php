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
                $sql = "INSERT INTO membres (nom, prenom, username, motdepasse)         VALUES (:nom, :prenom, :username, :motdepasse)";
                $query = $bdd -> prepare($sql);

                $query -> bindValue(":nom", $nom, PDO::PARAM_STR);
                $query -> bindValue(":prenom", $prenom, PDO::PARAM_STR);
                $query -> bindValue(":username", $username, PDO::PARAM_STR);
                $query -> bindValue(":motdepasse", $motdepasse, PDO::PARAM_STR);
                $query -> execute();

                echo "Vous êtes inscrit ! <a href='index.php'> Accueil</a>";
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

//Insertion du message à l'aide d'une requête préparée
$_req = $bdd->prepare('INSERT INTO membres (nom, prenom, username, motdepasse, date_inscription) VALUES(?, ?)');
$_req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['username'], $_POST['motdepasse'], $_POST['date_insciption']));

?>