<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>StalkMe.com</title>

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/assets/css/stylesheet.css">

</head>
<body>

    <nav class="navbar navbar-inverse stalkme-underline">

        <div class="navbar-header">
            <a class="navbar-brand stalkme-font" href="index.php"><img src="views/assets/img/stalk_me_logo_resize.png" alt="Stalk me!"></a>
            <!-- Brand and toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-right">

                <!-- Lien vers la page d'ajout de formulaire, ce dernier doit avoir une indication dans l'url permettant d'identifier la demande de l'utilisateur -->
                <a href="index.php?section=add" class="btn btn-stalkme" role="button">Stalk me please!</a>
                <a href="views/members.php" class="btn btn-stalkme" role="button">Stalk your friends!</a>
                <!-- End -->
                
            </form>
        </div>
    </nav>
