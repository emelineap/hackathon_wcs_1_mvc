<?php

<<<<<<< HEAD
// Création d'une connection à la base de base de donnée
=======
// Création d'une connection à la base de base de données
>>>>>>> 7851113e87e1a9541e9d8066807190393e72d144
$bdd = mysqli_connect(SERVER, USER, PASS, DB);

// Vérification que la connexion a fonctionné
if ($bdd == false){
	echo "Connection error: " . mysqli_error($bdd);
}
