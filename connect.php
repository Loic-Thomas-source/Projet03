<div class = "deco">
<!DOCTYPE html>
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

<center><p> <img src="profil.jpg" alt=""/> 
<?php
    if($connected)
    
    {
        echo  $_SESSION['nom']." ".$_SESSION['prenom'];
?>
</p></center>


<br>
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