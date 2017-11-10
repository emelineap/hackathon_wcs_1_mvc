<?php
/**
 * Récupère toutes les citations de la base
 * @return [array] Tableau de citations
 */
function getAllUser(){
    // Récuperation de la connection à la base de donnée
    // Rappel: pour récupérer une variable défini en dehors de la fonction, on préfixera la variable par "global"
    global $bdd;
    // Requete qui récupère toutes les citations
    $req = mysqli_query($bdd, 'SELECT * FROM user');
    // Traitement du resultat retourné par la requete
    $user = mysqli_fetch_all($req, MYSQLI_ASSOC);
    // Renvoie du tableau contenant toutes les citations
    var_dump($user); die ();
    return $user;
}
/**
 * Permet d'ajouter une citation
 * @param [string] $author Auteur de la citation
 * @param [string] $chapter Chapitre de la citation
 * @param [string] $content Contenu de la citation
 * @param [string] $date Date de la citation
 * @param [string] $image Image de la citation
 */
function addUser($username, $email, $phone, $zipcode, $birthday, $avatar){
    // Récuperation de la connection à la base de donnée
    // Rappel: pour récupérer une variable défini en dehors de la fonction, on préfixera la variable par "global"
    global $bdd;
    // Requete d'ajout en base de donnée
    mysqli_query($bdd, "INSERT INTO user (username, email, telephone, zipcode, birthday, avatar) VALUES ('$username', '$email', '$phone', '$zipcode', '$birthday', '$avatar')");

}
/**
 * Récupère une citation précise
 * @param  [int] $id id de la citation
 * @return [array] Retourne la citation
 */
function getUser($id){
    // On récupère la connection à la BDD
    global $bdd;
    // Requete de récupération d'une citation précise en BDD
    $req = mysqli_query($bdd, "SELECT * FROM user WHERE id = '$id'");
    // Traitement du résultat de la requête et stockage
    $user = mysqli_fetch_assoc($req);
    // La fonction renvoie le résultat
    return $user;
}

function birthday_today() {
    global $bdd;
    $req_birthday = mysqli_query($bdd, "SELECT * FROM user WHERE MONTH(birthday) = MONTH(NOW()) AND DAY(birthday) = DAY(NOW())");
    $user_birthday = mysqli_fetch_all($req_birthday, MYSQLI_ASSOC);
    return $user_birthday;
}
