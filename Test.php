<?php
    //test.php
    include_once("secur_connect.php");    
    
    include("inc_bdd.php");
?>

<!DOCTYPE html>
<html>
<header>
    <meta charset = "utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style_connect.css" />
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
     <!-- Pour ceux qui ont une résolution inférieure à 1280px -->
    <title>GBAF</title>
     
	<div ID="logo">
        <p>
            <img src="logo_mini.jpg" alt="" /> <!--Logo GBAF -->
        </p>
    </div>

    <hr> <!-- Ligne de séparation -->

</header>
<body>
	<section>
    <h1>LE GBAF</h1> <!-- Premier titre -->
    <div class = "présentation"><p1><strong>Le GBAF est le représentant de la profession bancaire et des assureurs sur tous
            les axes de la réglementation financière française. Sa mission est de promouvoir
            l'activité bancaire à l’échelle nationale.<br> C’est aussi un interlocuteur privilégié des
            pouvoirs publics.Pour remédier à cela, le GBAF souhaite proposer aux salariés des grands groupes
            français un point d’entrée unique, répertoriant un grand nombre d’informations
            sur les partenaires et acteurs du groupe ainsi que sur les produits et services
            bancaires et financiers.
            Chaque salarié pourra ainsi poster un commentaire et donner son avis.</p1></strong></div>
            
        <a>
            <img src = "image.jpg" width="1890px" height="300px" alt= "illustration" /> <!-- Photo illustration -->
        </a>

	    <hr> <!-- Ligne de séparation -->
    
        <h2> <!-- Deuxième titre -->
            Nos acteurs partenaires : 
        </h2>
            
        <ul>
            <li>Formation&co est une association française présente sur tout le territoire.</li>
            <li>Protectpeople finance la solidarité nationale.</li>
            <li>Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales.</li>
            <li>La CDE accompagne les entreprises dans leurs démarches de formation. </li>
        </ul>
    </body>
</html>

<?php
 
$reponse = $bdd->query('SELECT * FROM partenaires');

$donnees = $reponse->fetchAll();
 
foreach($donnees as $partenaire)

{
    echo '<table><td>'. $partenaire['image'].$partenaire['description'].'<span><a href="partenaire.php">Lire la suite</a></span>'.'</td></table>'; 
}
 
?>
    
 
    



