<?php

// Controllers frontal, point d'accès

// Inclusion des fichiers de base de donnée (model) + controller
require 'model/connexion_bdd_info.php';
require 'model/connexion_bdd.php';
require 'model/stalkmeModel.php';
require 'controllers/stalkmeController.php';

// Définition des conditions permettant de rediriger en fonction de la requête utilisateur

// Si les aucun parametres n'est défini dans l'url, on appel la fonction du controlleur (kaamelottControler.php) permettant de renvoyer la page d'accueil avec toutes les citations
if (empty($_GET)){
    loginAction();
}

// Si le parametre "add" est défini dans l'url, on appel la fonction du controlleur (kaamelottControler.php) permettant de renvoyer la page d'accueil avec un formulaire d'ajout de citation


// Si le parametre "edit" est défini dans l'url, on appel la fonction du controlleur (kaamelottControler.php) permettant de renvoyer la page d'accueil avec un formulaire de modification de citation
// Attention, afin de modifier une citation, nous avons besoin de pouvoir l'identifier grâce à son id


// Si le parametre "delete" est défini dans l'url, on appel la fonction du controlleur (kaamelottControler.php) permettant de renvoyer la page d'accueil avec un formulaire de modification de citation
// Attention, afin de supprimer une citation, nous avons besoin de pouvoir l'identifier grâce à son id

