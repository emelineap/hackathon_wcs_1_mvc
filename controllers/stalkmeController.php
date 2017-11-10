<?php
/**
 * Renvoie la page d'acceuil avec la liste de tous les users
 */
function loginAction(){
    // Déclarer une variable $user qui permttra de stocker tous les users
    // On récupère les users grâce à la fonction getAllUser() présente dans le model
    $user = getAllUser();
    $users_birthday = birthday_today();
    // Inclusion de la page d'accueil (home.php)
    include('views/home.php');
}
/**
 * Renvoie la page d'ajout de citation ou bien traite la requête d'enregistrement
 */
function addUserAction(){
    // Si aucun champ du formulaire n'est renseigné ou si le formulaire n'est pas soumis
    if (empty($_POST)){
        // On affiche le formulaire
        include('views/login.php');
    }
    // Sinon, on est dans le cas où le formulaire est envoyé
    else{
        // Vérification que tous les champs du formulaire sont bien renseignés, sinon on renvoie un message d'erreur
        if (
            empty($_POST['username']) ||
            empty($_POST['email']) ||
            empty($_POST['phone']) ||
            empty($_POST['birthday']) ||
            empty($_POST['zipcode']) ||
            empty($_POST['avatar'])
            ){
            // Si certains champs ne sont pas renseignés, on génère un message d'erreur puis on inclue la page du formulaire d'ajout avec le message d'erreur
            $errors = "All informations are required";
            include('views/login.php');
        }
        // Si tous les champs du formulaire sont renseignés, on stocke en base de données
        else{
            // Récupération des infos du formulaire
            // Sécurité : htmlspecialchars permet de remplacer les caractères spéciaux par leur équivalent HTML
            // Exemple: < passé dans la fonction htmlspecialchars renvoie &lt;
            // http://php.net/manual/fr/function.htmlspecialchars.php
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $birthday = htmlspecialchars($_POST['birthday']);
            $zipcode = htmlspecialchars($_POST['zipcode']);
            $avatar = htmlspecialchars($_POST['avatar']);
            // Appel du model ==> exécution de la requête d'enregistrement en base de données (addUser())
            addUser($username, $email, $phone, $birthday, $zipcode, $avatar);
            // Redirection vers le controller frontal index.php
            header ('Location: index.php');
        }
    }
}



