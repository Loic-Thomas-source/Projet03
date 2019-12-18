<?php
        
        // post_commentaire.php
    
        include_once("inc_bdd.php");
         
        $req = $bdd->prepare('INSERT INTO aime (prenom, commentaire, date_time) VALUES(?, ?, ?, NOW())');
        $req->execute(array($_POST['prenom'], $_POST['commentaire'], $_POST['date']));
        header('Location: commentaires.php');
    ?>