<?php
/**
 * Renvoie la page d'acceuil avec la liste de toutes les citations
 */
function loginAction(){
    // Déclarer une variable $user qui permttra de stocker toutes les citations
    // On récupèrera les citation grâce à la fonction getAllCitations() présente dans le model
    $user = getAllUser();
    $users_birthday = birthday_today();
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
            include('views/login.php');
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
            header ('Location: index.php');
        }
    }
}


// function birthday (){
//     $now = new DateTime;

//         if ($now->format('m-d') == ($current_birthday->format('m-d'))) {
//             return '$username';
//         }
//         else {
//             echo "nobody";
//         }
// }
// function current_birthday (){
//     $now = new DateTime();

//     if ($now ==  $user_birthday) {
//         return '$username';

//         }else {
//             echo "nobody";
//         }
// }


