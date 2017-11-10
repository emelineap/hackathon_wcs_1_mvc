<?php
/**
 * Récupère tous les users de la base
 * @return [array] Tableau des users
 */
function getAllUser(){
    // Récuperation de la connexion à la base de données
    // Rappel : pour récupérer une variable définie en dehors de la fonction, on préfixera la variable par "global"
    global $bdd;
    // Requête qui récupère tous les users
    $req = mysqli_query($bdd, 'SELECT * FROM user');
    // Traitement du résultat retourné par la requête
    $user = mysqli_fetch_all($req, MYSQLI_ASSOC);
    // Renvoie un tableau contenant tous les users
    return $user;
}
/**
 * Permet d'ajouter une citation
 * @param [string] $username Auteur de la citation
 * @param [string] $email Chapitre de la citation
 * @param [int] $phone Contenu de la citation
 * @param [int] $zipcode Date de la citation
 * @param [date] $birthday Image de la citation
 * @param [string] $avatar
 */
function addUser($username, $email, $phone, $zipcode, $birthday, $avatar){
    // Récuperation de la connection à la base de donnée
    // Rappel: pour récupérer une variable défini en dehors de la fonction, on préfixera la variable par "global"
    global $bdd;
    // Requete d'ajout en base de donnée
    mysqli_query($bdd, "INSERT INTO user (username, email, telephone, zipcode, birthday, avatar) VALUES ('$username', '$email', '$phone', '$zipcode', '$birthday', '$avatar')");

}

/**
 * Récupère un user précis
 * @param  [int] $id id du user
 * @return [array] Retourne le user
 */
function getUser($id){
    // On récupère la connexion à la BDD
    global $bdd;
    // Requête de récupération d'un user précis en BDD
    $req = mysqli_query($bdd, "SELECT * FROM user WHERE id = '$id'");
    // Traitement du résultat de la requête et stockage
    $user = mysqli_fetch_assoc($req);
    // La fonction renvoie le résultat
    return $user;
}

/**
 * Récupère le(s) user(s) dont c'est l'anniversaire
 * @return [array] Retourne un tableau contenant tous les users dont c'est l'anniversaire
 */
function birthday_today() {
    global $bdd;
    $req_birthday = mysqli_query($bdd, "SELECT * FROM user WHERE MONTH(birthday) = MONTH(NOW()) AND DAY(birthday) = DAY(NOW())");
    $user_birthday = mysqli_fetch_all($req_birthday, MYSQLI_ASSOC);
    return $user_birthday;
}
