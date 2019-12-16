<?php
    // post_connexion.php 

    include_once("inc_bdd.php");

    extract($_POST);

    if
    (
        !empty($username) AND !empty($motdepasse)
    )
    {
        $sql = "SELECT ID, nom, prenom, motdepasse FROM membres
                WHERE username = :username";
        $query = $bdd -> prepare($sql);
        $query -> bindValue(":username", $username, PDO::PARAM_STR);
        $query -> execute();

        $result = $query -> fetch();

        // si l'utilisateur existe (j'ai une ligne de résultat)
        if(!empty($result))
        {
            // recup du mdp en base
            $motdepasse_base = $result['motdepasse'];
            if($motdepasse === $motdepasse_base)
            {
                // je suis connecté
                session_start();
                $_SESSION = array(
                    'ID' => $result['ID'],
                    'nom' => $result['nom'],
                    'prenom' => $result['prenom']
                    );

                echo "Vous êtes connecté ! <a href='Test.php'> Accueil</a>";
                
                header("Refresh: 0;url=Test.php");
            }
            else
            {
                echo  "Mauvais mdp ou Username  <a href='javascript:history.back()'>Retour</a>";
            }
        }
        
    }
    else
    {
        echo "Erreur de formulaire : 
            <a href='javascript:history.back()'>Retour</a>";
    }
?>