<?php
    // inscription.php
?>

<form action="post_inscription.php" method="POST">

    <!-- nom, prenom, username, mot de passe X 2, case RGPD -->

    <div>
        Nom* : <input type="text" name="nom" required>
    </div>
    <div>
        Prénom* : <input type="text" name="prenom" required>
    </div>
    <div>
        UserName* : <input type="text" name="username" required>
    </div>
    <div>
        Mot de passe* : <input type="password" name="motdepasse" required>
    </div>
    <div>
        Répétition mdp* : <input type="password" name="motdepasse_rep" required>
    </div>
    <div>
        RGPD* : <input type="checkbox" name="rgpd" required>
        J'accepte la collecte de mes données personnelles 
        par le biais de ce formulaire et accepte parallèlement 
        le traitement et l'utilisation de celles-ci.
    </div>

    <button type="submit">S'inscrire</button>

</form>

<?php
// Récupération des 25 dernier username
$reponse = $bdd->query('SELECT nom, prenom, username, motdepasse, date_inscription FROM membres WHERE ID DESC LIMIT 0, 25');

// Affichage de chaque username ( toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
    echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>