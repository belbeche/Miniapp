<?php
require 'result';


    $argent = $_POST["Argent"];
    $bonheur = $_POST["Bonheur"];
    $amour = $_POST["Amour"]; 
    $famille = $_POST["Famille"];
    $submit = $_POST["submit"];

    if (isset($argent) OR isset($bonheur) OR isset($amour) OR isset($famille)){
        echo (isset($submit);
    }
    else {
        echo "Une réponse obligatoire";
    }

?>