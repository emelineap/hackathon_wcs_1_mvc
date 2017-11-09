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
    mysqli_query($bdd, "INSERT INTO user (username, email, phone, zipcode, birthday, avatar) VALUES ('$username', '$email', '$phone', '$zipcode', '$birthday', '$avatar')");
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
/**
 * Modification d'une citation
 * @param [int] $id id de la citation à supprimer
 * @param [string] $author Auteur de la citation
 * @param [string] $chapter Chapitre de la citation
 * @param [string] $content Contenu de la citation
 * @param [string] $date Date de la citation
 * @param [string] $image Image de la citation
 */
function updateUser($id, $username, $email, $phone, $zipcode, $birthday, $avatar){
    // On récupère la connection à la BDD
    global $bdd;
    // Requete d'update d'une citation précise en BDD
    mysqli_query($bdd, "UPDATE user SET username = '$username', email = '$email', phone = '$phone', zipcode = '$zipcode', birthday = '$birthday', avatar = '$avatar' WHERE id = '$id'");
}
/**
 * Suppression d'une citation
 * @param  [int] $id Id de la citation
 */
function deleteUser($id){
    // On récupère la connection à la BDD
    global $bdd;
    // Requete de suppression d'une citation précise en BDD
    mysqli_query($bdd, "DELETE FROM user WHERE id = '$id'");
}