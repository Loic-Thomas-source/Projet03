<?php
    // index.php
    session_start();
    if(isset($_SESSION) AND !empty($_SESSION['ID']))
    {
      echo "Bonjour ". $_SESSION['nom'];
    }
    
?>

<?php
    if(isset($_SESSION) AND !empty($_SESSION['ID']))
    {
?>

<div class = "deco">
    <a href="deconnexion.php">SE DECONNECTER</a>
</div>

>
<?php
    }
    else
    {
?>

<center>
<div>
    <a href="inscription.php">S'INSCRIRE</a>
</div>
<div>
    <a href="connexion.php">SE CONNECTER</a>
</div> </center>
<?php
    }
?>

<!DOCTYPE html>
<html>
<header>
    <meta charset = "utf-8" />
    <link rel="stylesheet" href="style.css" />
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
    <div class = "présentation"><p>Le GBAF est le représentant de la profession bancaire et des assureurs sur tous
            les axes de la réglementation financière française. Sa mission est de promouvoir
            l'activité bancaire à l’échelle nationale.<br> C’est aussi un interlocuteur privilégié des
            pouvoirs publics.Pour remédier à cela, le GBAF souhaite proposer aux salariés des grands groupes
            français un point d’entrée unique, répertoriant un grand nombre d’informations
            sur les partenaires et acteurs du groupe ainsi que sur les produits et services
            bancaires et financiers.
            Chaque salarié pourra ainsi poster un commentaire et donner son avis.</p></div>
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
        
	
    </section>
    
    <section class = "grille"> <!-- On crée un tableau -->
        <article> <img src = "protectpeople1.png" alt="" /> <p> <a href = "protectpeople.html">Lire la suite </a></p>
            <p> Protectpeople finance la solidarité nationale.
            Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de 
            bénéficier d’une <br/>protection sociale, ouvert à tous.</p> </article>

        <article> <img src = "CDE1.png" alt="" /> <p> <a href = "CDE.html">Lire la suite </a></p> 
            <p> La CDE (Chambre Des Entrepreneurs)
            accompagne les entreprises dans
            leurs démarches de formation. 
            Son président est élu pour 3 ans par ses pairs, chefs d’entreprises   <br/>et présidents  des CDE.</p></article>

        <article> <img src = "Dsa_france1.png" alt="" /> <p> <a href = "DSA.html">Lire la suite</a></p> 
            <p> Dsa France accélère la 
            croissance du territoire et s’engage 
            avec les collectivités territoriales.
            Nous accompagnons les entreprises dans les étapes par clés de leur évolution.  <br/>
            Notre philosophie : s’adapter à chaque entreprise.</p></article>

        <article> <img src = "formationetco1.png" alt="" /> <p> <a href = "formation.html">Lire la suite</a></p> 
            <p> Formation&co est
            une association française présente sur
            tout le territoire.
            Nous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit<br/> et un accompagnement
            professionnel et personnalisé. </p></article>


             
    </section>

</body>

</html>