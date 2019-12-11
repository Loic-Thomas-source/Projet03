<?php
    // connexion.php
?>

<form action="post_connexion.php" method="POST">

    <div>
        Username* : <input type="username" name="username" required>
    </div>
    <div>
        Mot de passe* : <input type="password" name="motdepasse" required>
    </div>
    <div>
        <a href="mdp_oublie.php">Mot de passe oublié ?</a>
    </div>

    <div>
        <button type="submit">Se connecter</button>
    </div>

</form>