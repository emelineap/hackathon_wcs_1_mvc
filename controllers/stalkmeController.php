<?php
/**
 * Renvoie la page d'acceuil avec la liste de toutes les citations
 */
function loginAction(){
    // Déclarer une variable $user qui permttra de stocker toutes les citations
    // On récupèrera les citation grâce à la fonction getAllCitations() présente dans le model
    $user = getAllUser();
    // Inclusion de la page d'accueil (home.php)
    include('views/home.php');
}
/**
 * Renvoie la page d'ajout de citation ou bien traite la requete d'enregistrement
 */
function addUserAction(){
    // Si aucun champs du formulaire n'est renseigné ou encore si le formulaire n'est pas soumis
    if (empty($_POST)){
        // On affiche le formulaire
        include('views/login.php');
    }
    // Sinon, on est dans le cas ou le formulaire est envoyé
    else{
        // Vérification que tous les champs du formumaire sont bien renseignés, sinon on renvoie un message d'erreur
        if (
            empty($_POST['username']) ||
            empty($_POST['email']) ||
            empty($_POST['phone']) ||
            empty($_POST['birthday']) ||
            empty($_POST['zipcode']) ||
            empty($_POST['avatar'])
            ){
            // Si certain champs ne sont pas renseigné, on génère un message d'erreur puis on inclut la page du formulaire d'ajout avec le message d'erreur
            $errors = "All informations are required";
            include('views/includes/login.php');
        }
        // Si tous les champs du formulaire sont renseignés, on stock en base de donnée
        else{
            // Récupération des infos du formulaire
            // Sécurité: htmlspecialchars permet de remplacer les caractères spéciaux par leur équivalent HTML
            // Exemple: < passé dans la fonction htmlspecialchars renvoie &lt;
            // http://php.net/manual/fr/function.htmlspecialchars.php
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $birthday = htmlspecialchars($_POST['birthday']);
            $zipcode = htmlspecialchars($_POST['zipcode']);
            $avatar = htmlspecialchars($_POST['avatar']);
            // Appel du modele ==> execution de la requete d'enregistrement en base de donné (addCitation())
            addUser($username, $email, $phone, $birthday, $zipcode, $avatar);
            // Redirection vers le controllers frontal index.php
            header('Location: views/success.php');
        }
    }
}
/**
 * Edition d'une citation
 * Redirige vers le formulaire d'update ou vers la page d'accueil si validation de modification
 */
function editUserAction(){
    // Récupération de l'id de la citation à supprimer
    $id = $_GET['id'];
    // Vérification que le paramètre id est bien un nombre (sécurité)
    // Si c'est bien un nombre, on traitre la demande
    if (is_numeric($id)){
        // Si aucun champs du formulaire n'est renseigné ou encore si le formulaire n'est pas soumis
        if (empty($_POST)){
            // On récupère la citation ciblé grâce à son id et a la fonction définit dans le modèle (getCitation())
            $user = getUser($id);
            // On renvoie la vue du formulaire de modification, les champs de ce dernier seront auto-complété
            include('views/editUser.php');
        }
        else{
             // Récupération des infos du formulaire
            // Sécurité: htmlspecialchars permet de remplacer les caractères spéciaux par leur équivalent HTML
            // Exemple: < passé dans la fonction htmlspecialchars renvoie &lt;
            // http://php.net/manual/fr/function.htmlspecialchars.php
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $zipcode = ($_POST['zipcode']);
            $birthday = ($_POST['birthday']);
            $avatar = ($_POST['avatar']);
            // On les ajoute à la base de donnée grace à la fonction définit dans notre modèle (updateCitation())
            updateUser($id, $username, $email, $phone, $zipcode, $birthday, $avatar);
            // On redirige vers la page d'accueil
            header('Location: index.php');
        }
    }
    // Si l'id n'est pas un nombre, on rédirige vers la page d'accueil
    else{
        header('Location: index.php');
    }
}
/**
 * Suppression d'une citation
 */
function deleteUserAction(){
    // Récupération de l'id de la citation à supprimer
    $id = $_GET['id'];
    // Vérification que le paramètre id est bien un nombre (sécurité)
    // Si c'est bien un nombre, on traitre la demande
    if (is_numeric($id)){
        // Appel de la fonction du model permettant de supprimer une citation précise
        deleteUser($id);
        // On redirige vers la page d'accueil
        header('Location: index.php');
    }
    // Si l'id n'est pas un nombre, on redirige vers la page d'accueil
    else{
        header('Location: index.php');
    }
}
