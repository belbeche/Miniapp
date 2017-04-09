/*
var prenom = String(prompt("Bienvenue dans la première salle , nom obligatoire :"));
alert("Bonjour, " + "" + prenom);


var saisie = prompt("Qu'elle age avez vous: "); // saisie est de type chaine

var nb = Number(saisie); //nb est de type nombre 

Number(alert("Votre age : " + nb));

alert("Bienvenue dans mon univers "  + ": " + prenom + " age :  " + nb); // j'affiche le résultat stoquer dans ces 2 variables
*/

function myFunction() {
    var input, text;

    // On récupere la valeur de l'input id
    input = document.getElementById("getAnswer").value;

    // Si le nombre est est égal à 1 ou à 160 alors OK 
    if (isNaN(input) || input < 1 || input > 160) {
        text = "Veuillez rentrez un chiffre compris entre 1 et 160";
    } else {
        text = "Age" + ":" + input;
    }
    document.getElementById("result").innerHTML = text;
}