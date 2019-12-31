<?php

    // inc_bdd.php

    // définition de constantes
    define("HOST", "localhost"); // adresse du serveur de BDD
    define("BDD", "auth");        // nom de la BDD
    define("NOM", "");            // Nom
    define("PRENOM", "");         // Prénom 
    define("USERNAME", "");       // Username
    define("USER", "root");      // nom d'utilisateur
    define("PASSWORD", "");      // mot de passe
    define("QUESTION", "");      // question secrète
    define("REPONSE", "");       // réponse secrète
    define("CHOIXL", "");          // Like
    define("CHOIXD", "");       // Dislike 
    define("PARTENAIRES", "");    // partenaires

    $db_options = array(

        // gestion des caractères accentués
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        // choix de récupération des données (assoc / numéroté)
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        // pour afficher toutes les erreurs SQL (à commenter en production)
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_WARNING
        // :: panayiim nekudotayim : opérateur de résolution de portée
    );

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', $db_options);
    }
    catch(Exception $e)
    {
        echo "[SQL] Erreur de connexion";
    }

        

?>