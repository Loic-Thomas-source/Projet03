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
    <title>Protectpeople</title>

    <div ID="logo">
            <p>
                <img src="logo_mini.jpg" alt="" />
            </p>
    </div>
</header>

    <body>
    <center>
    <p> <img src = "protectpeople.jpg" alt = "" /> </p>
    </center>

    <h2>Protectpeople</h2>
            <p> Protectpeople finance la solidarité nationale.
            Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale.
            
            Chez Protectpeople, chacun cotise selon ses moyens et reçoit selon ses besoins.
            Proectecpeople est ouvert à tous, sans considération d’âge ou d’état de santé.
            Nous garantissons un accès aux soins et une retraite.
            Chaque année, nous collectons et répartissons 300 milliards d’euros.
            Notre mission est double :
            <ul> 
            <li>sociale : nous garantissons la fiabilité des données sociales ;</li>
            <li>économique : nous apportons une contribution aux activités économiques.</li>
            </ul></p>
    </body>
</html>