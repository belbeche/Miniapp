<!doctype html>

<html>

    <head>
        <meta charset="utf-8">
        <title> Résultat total </title>
        <link rel="stylesheet" type="text/css" href="../css/styles.css"/>
    </head>
    
    <body>
        <?php require 'header.php' ;?>
    <h1 id="titre">J'espère que tout s'est passé pour le mieux !</h1>
        <p id="description">En attendant si l'envie vous prend afin d'agir alors je vous invite à renseignez votre souhait</p>
    
        <label for="reponse"> Quel changement pour 2017 ?</label>
            <input list="reponse" type="text" id="choix_reponse" placeholder="A,B,A,F"/>
                <datalist id="resolution">
                    <option value="Argent"></option>
                    <option value="Bonheur"></option>
                    <option value="Amour"></option>
                    <option value="Famille"></option>
                </datalist>
        
       <!-- <div id="answer">
            <form action="answer.php" method="post">
                <input type="submit" value="validez ma réponse"/>
                <p>Argent:</p><input type="radio" placeholder="Argent" name="Argent"/>
                <p>Bonheur:</p><input type="radio" placeholder="Bonheur" name="Bonheur"/>
                <p>Amour:</p><input type="radio" placeholder="Amour" name="Amour"/>
                <p>Famille:</p><input type="radio" placeholder="Famille" name="Famille"/>
                <br/>
            </form>   
        </div> -->    
    </body>

</html>