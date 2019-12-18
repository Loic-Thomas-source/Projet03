<?php
    // commentaire.php

    include_once("inc_bdd.php");

    $req = $bdd->prepare('SELECT ID, prenom, commentaire FROM  WHERE ID = ?');
    $req->execute(array($_GET['']));
    $donnees = $req->fetch();
    ?>
        <div class="news">
            echo $donnees['prenom']; ?>
            echo $donnees['date_creation'];
            echo $donnees['text']; 
        </div>
         
    <form method="post" action="commentaire_post.php?billet=<?php echo $donnees['id']; ?>">
        <label for="prenom"
        <label for="commentaire"
        <input type="submit" value="Envoyer" />
    </form>
     
    <?php
    $req->closeCursor();
     
    $req = $bdd->prepare('SELECT ID, prenom, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') 
    AS date FROM commentaires WHERE  = ? ORDER BY date_commentaire');
    $req->execute(array($_GET['']));
     
    while ($donnees = $req->fetch())
    {
    ?>
        <p>echo $donnees['prenom']; 
        <p>echo $donnees['date'];</p>
        <p>echo $donnees['commentaire']; </p>
    <?php
    }
    $req->closeCursor();