<?php
    // post_mdp_oublie.php
    include_once("inc_bdd.php");

    include_once("secur_connect.php")
?>
<!DOCTYPE html>
<html>
<header>
    <meta charset = "utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style_protect.css" />
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
     <!-- Pour ceux qui ont une résolution inférieure à 1280px -->
    <title>Protectpeople</title>

    <div ID="logo">
            <p>
                <a href="test.php"><img src="logo_mini.jpg" alt="" /></a>
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
            Protecpeople est ouvert à tous, sans considération d’âge ou d’état de santé.
            Nous garantissons un accès aux soins et une retraite.
            Chaque année, nous collectons et répartissons 300 milliards d’euros.
            Notre mission est double :
            <ul> 
            <li>sociale : nous garantissons la fiabilité des données sociales ;</li>
            <li>économique : nous apportons une contribution aux activités économiques.</li>
            </ul></p>
    
           <div class="conteneur">
                <h3>
                    Commentaires
                </h3>
               
	            <textarea rows="5" cols="auto" wrap="physique" name="commentaires"></textarea><br />
	           
	
               <p1><button type="submit">Nouveau<br> commentaire</button></p1>
               
               <form action="post_like_dislike.php" method="POST">
                    <p>Like/Dislike :</p>
                    
                    <div>
                        <input type="radio" id="3"
                        name="aime" value="aime">
                        <label for="like">Like</label>

                        <input type="radio" id="3"
                        name="aime" value="aimepas">
                        <label for="dislike">Dislike</label>

                    </div>
                    <div>
                    <button type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
            
       
    </body>

</html>        
            
            
                 
           
    
    
    
    
 