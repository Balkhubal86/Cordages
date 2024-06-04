window.onbeforeunload = function() {
    // Envoyer une requête AJAX pour déconnecter l'utilisateur
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/deconnexion', true);
    xhr.send();
};