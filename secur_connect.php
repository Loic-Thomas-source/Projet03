<div class = "deco">
<!DOCTYPE html>
<meta charset = "utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style_connect.css" />
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
     <!-- Pour ceux qui ont une résolution inférieure à 1280px -->
<html>
<header>
<?php
    
    session_start();
    $connected = false;
    if(isset($_SESSION) AND !empty($_SESSION['ID']) AND !empty($_SESSION['prenom']))
    {
        $connected = true;
      
    }

    if(!$connected)
    {
        header("Location: accueil.php");
    }
    
?>

<center><p> <a href = "parametre.php"><img src="profil.jpg" alt=""/></a>
<?php
    if($connected)
    
    {
        echo  $_SESSION['nom']." ".$_SESSION['prenom'];
?>
</p></center>


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
</header>
</html>