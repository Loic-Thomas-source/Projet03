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
    <title>Formation et co</title>
    
    <div ID="logo">
            <p>
                <img src="logo_mini.jpg" alt="" />
            </p>
    </div>
</header>
<body>
        <center>
            <p> <img src = "formationetco.jpg" alt = "" /> </p>
        </center>
        <h2>
                Formation&co
        </h2>
        <p>
                Formation&co est une association française présente sur tout le territoire.
                Nous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé.
                Notre proposition : 
                <ul>
                    <li> un financement jusqu’à 30 000€ ;</li>
                    <li> un suivi personnalisé et gratuit ;</li>
                    <li> une lutte acharnée contre les freins sociétaux et les stéréotypes.</li>
                </ul>
                Le financement est possible, peu importe le métier : coiffeur, banquier, éleveur de chèvres… .
                Nous collaborons avec des personnes talentueuses et motivées.
                Vous n’avez pas de diplômes ? Ce n’est pas un problème pour nous ! Nos financements s’adressent à tous.
        </p>
</body>
</html>
