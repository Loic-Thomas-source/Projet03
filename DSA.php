<div class = "deco">
<?php
    // index.php
    session_start();
    if(isset($_SESSION) AND !empty($_SESSION['ID']))
    {
      echo  $_SESSION['nom'].$_SESSION['prenom'];
    }
    
?>
<br>
<?php
    if(isset($_SESSION) AND !empty($_SESSION['ID']) AND !empty($_SESSION['prenom']))
    {
?>


    <a href="deconnexion.php"><button type="submit">SE DECONNECTER</button> </a>
</div>

<?php
    }
    else
    {
?>
<?php
    }
?>
<!DOCTYPE html>
<html>
<header>
    <meta charset = "utf-8" />
    <link rel="stylesheet" href="style_protect.css" />
    <title>DSA_France</title>
    
    <div ID="logo">
            <p>
                <img src="logo_mini.jpg" alt="" />
            </p>
    </div>
</header>
<body>
        <center>
            <p> <img src = "Dsa_france.png" alt = "" /> </p>
        </center>
        <h2>
                DSA France
        </h2>
        <p>
                Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales.
                Nous accompagnons les entreprises dans les étapes clés de leur évolution.
                Notre philosophie : s’adapter à chaque entreprise.
                Nous les accompagnons pour voir plus grand et plus loin et proposons des solutions de financement adaptées
                à chaque étape de la vie des entreprises
        </p>
</body>
</html>