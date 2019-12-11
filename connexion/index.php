<?php
    // index.php
    session_start();
    if(isset($_SESSION) AND !empty($_SESSION['id']))
    {
        echo "Bonjour ". $_SESSION['username'];
    }
?>

<?php
    if(isset($_SESSION) AND !empty($_SESSION['id']))
    {
?>

<div>
    <a href="deconnexion.php">SE DECONNECTER</a>
</div>

<?php
    }
    else
    {
?>
<div>
    <a href="inscription.php">S'INSCRIRE</a>
</div>
<div>
    <a href="connexion.php">SE CONNECTER</a>
</div>
<?php
    }
?>