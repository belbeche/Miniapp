<?php 
require 'includes/connect.php';
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MiniApps</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="description" content="MiniApplications">
    <meta name="author" content="walid Belbeche">
    <link rel="icon" href="../../favicon.ico">
</head>

<body onload="checkCookie()">
    <nav>
        <ul class="navigation">
            <li class="sous_menu"><a href="index.php">Accueill</a></li>
            <li class="sous_menu"><a href="includes/about.php">Développeur</a></li>
            <li class="sous_menu"><a href="includes/real.php">Réalisations</a></li>
            <li class="sous_menu"><a href="includes/contact.php">Contact</a></li>
            <li class="sous_menu"><a href="includes/online.php">Gestion membre</a></li>
            <?php require 'includes/maintenance.php';?>
        </ul>
    </nav>
    <!-- Container 1 -->
    <div class="container marketing">
        <h1> Github: belbeche</h1>
        <h3>Under construction</h3>
        <p>MiniApps _ freeOpenSource Project</p>
     </div>
    <!-- /Container 1 -->
   
    <!-- Annonces -->
    <div class="container marketing">
        <h2> Connecté(e) sous le nom de : <span id="replay"><p></p></span><br/></h2>
        <br/>
        <h2> 
            Avant de faire le test il est nécéssaire de vous découvrir
        </h2>
        
        <div class="row">
            <!-- Level 1  -->
            <div class="col-lg-4"> <img class="img-circle" src="css/image/nv1.png" alt="Generic placeholder image" width="140" height="140">
                <p>Etage 1 : Cette salle est ouverte .</p>
                <br/>
                <p>Que ce passe t'il derrîere ? </p>
                <p><a class="btn btn-default" href="games/html/level1.php" role="button">Commençais l'aventure &raquo;</a></p>
            </div>
            <!--  / Level 1  -->
            <!-- Level 2 -->
            <div class="col-lg-4"> <img class="img-circle" src="css/image/nv2.png" alt="Generic placeholder image" width="140" height="140">
                <h2>Etage 2 : Tu veut en savoir d'avantage ?</h2>
                <br/>
                <p>Alors ne tarde pas trop.</p>
                <p><a class="btn btn-default" href="games/html/level2.php" role="button">Level 2 &raquo;</a></p>
            </div><!-- Level 2 -->
            <!-- Level 3 -->
            <div class="col-lg-4"> <img class="img-circle" src="css/image/nv3.png" alt="Generic placeholder image" width="140" height="140">
                <h2>Etage 3</h2>
                <br/>
                <p>Description etape.</p>
                <p><a class="btn btn-default" href="games/html/level3.php" role="button">Level 3 &raquo;</a></p>
            </div><!-- Level 3 -->
        </div><!-- Fin class row -->
    </div><!-- Fin annonces -->
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
</body>

</html>