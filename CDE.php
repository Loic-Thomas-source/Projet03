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
    <title>CDE</title>
    
    <div ID="logo">
            <p>
                <img src="logo_mini.jpg" alt="" />
            </p>
    </div>
</header>
<body>
        <center>
        <p> <img src = "CDE.png" alt = "" /> </p>
        </center>
<h2>
        LA CDE
</h2>
<p>
        La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation. 
        Son président est élu pour 3 ans par ses pairs, chefs d’entreprises et présidents des CDE.
</p>
</body>
</html>