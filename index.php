<?php

// Controller frontal, point d'accès

// Inclusion des fichiers de base de données (model) + controller
require 'model/connexion_bdd_info.php';
require 'model/connexion_bdd.php';
require 'model/stalkmeModel.php';
require 'controllers/stalkmeController.php';

// Définition des conditions permettant de rediriger en fonction de la requête utilisateur

// Si aucun paramètre n'est défini dans l'url, on appelle la fonction du controller (stalkmeControler.php) permettant de renvoyer la page d'accueil
if (empty($_GET)){
    loginAction();
}

// Si le parametre "add" est défini dans l'url, on appelle la fonction du controller (stalkmeControler.php) permettant de renvoyer la page avec un formulaire d'ajout de user
elseif ($_GET['section'] == 'add'){
    addUserAction();
}