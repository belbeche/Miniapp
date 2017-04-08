/*var visiteur = String(prompt("Vous êtes ?", "Nom pendant la navigation")); 
    var utilisateur = visiteur;
    document.getElementById("replay").innerHTML = "Good Job !";
    document.getElementById("replay").innerHTML = "" + utilisateur;
*/

//Création cookie JavaScript 
// nom du cookie = cuser , valeur cookie = cvaleur
// Nombre jours avant expiration = exdays
function setCookie(cuser, cvaleur, exdays) {
    var date = new Date();
    date.setTime(date.getTime() + (exdays*24*60*60*1000));
    
    var expires = "expires le=" + date.toGMTString();
    document.cookie = cuser + "=" + cvaleur + ";" + expires + ";path=/";
}

// On récupere le cookie name en tant que parametre(cuser)
// Var name = avec le texte à rechercher (cname + < = >)
// Gerer les caractere spéciaux

function getCookie(cuser) {
    var name = cuser + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substr(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }   
    }
    return "";
}

function checkCookie() {
    var username = getCookie("username");
    if (username != "") {
        document.getElementById("replay").innerHTML =  username;
    } else {
        username = prompt("Entrez votre nom:", "");
        if (username != "" && username != null){
            setCookie("username", username, 365);
        }
    }
}

