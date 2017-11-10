<?php

// Création d'une connexion à la base de données
$bdd = mysqli_connect(SERVER, USER, PASS, DB);

// Vérification que la connexion a fonctionné
if ($bdd == false){
	echo "Connection error: " . mysqli_error($bdd);
}
