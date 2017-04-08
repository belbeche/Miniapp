/* Ton défault */ 
var utilisateur = String(prompt("Player"));

alert("Bonjour, " + utilisateur + " Tu vas savoir si tout va bien\n" + "Ou pas");

alert("Donne un chiffre entre 0 et 20");

var question_1 = Number(prompt("En argent: "));

var reponse_1 = alert("En argent " + question_1);

var question_2 = Number(prompt("Et le bonheur dans tout ça ?"));

var reponse_2 = alert("En bonheur" + " " + question_2);

var question_3 = Number(prompt("Et concernant le travail ?"));

var reponse_3 = alert("Stay strong" + " " + question_3);

var question_4 = Number(prompt("Sinon comment va la famille ?"));

var reponse_4 = alert("Votre famille" + " " + question_4);

var questionPlus = question_1 + question_2 + question_3 + question_4;

var questionTotal = questionPlus * 20 / 100;

var memoireTotal =  questionTotal / 4; 

var showResult = memoireTotal + questionTotal;

alert("La moyenne de : " + utilisateur + "\n est de : " + showResult);

if (showResult < 9 )
{
	alert("Votre humeur ne vous convient pas " + "\n Tout comme vous j’essaie d'être meilleure que la veuille , courage ! :)");
}
else if(showResult >= 10 )
{
	alert("D’après nos calculs , vous êtes plutôt en forme à vous de vous divertir !!! " + " \n En avant " + " " +  utilisateur + "\n  pour une nouvelle L");
}