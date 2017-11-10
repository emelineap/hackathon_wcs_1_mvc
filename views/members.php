<?php include '../views/includes/header.php'; ?>

<div class="row">

            <!-- Le bloc ci dessous permet d'afficher les card avec chaque citation, ce dernier devra se répéter pour toutes les citations -->
            <?php foreach ($users as $user){ ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="img-box">

                            <!-- Ici devra s'afficher l'image -->
                            <img class="stalkme-underline" src="<?php echo $user['avatar']; ?>" alt="<?php echo $user['username']; ?>">
                            <!-- End -->

                        </div>
                        <div class="quote">
                            <blockquote>

                                <!-- Ici devra s'afficher le contenu de la citation -->
                                <p><?php echo $user['birthday']; ?></p>
                                <!-- End -->

                            </blockquote>
                            <p class="source">

                                <!-- Ici devra s'afficher l'auteur de la citation -->
                                <?php echo $user['zipcode']; ?>
                                <!-- End -->

                                <!-- Ici devra s'afficher le chapitre de la citation -->
                                <i><?php echo $user['telephone']; ?></i>
                                <!-- End -->

                                <!-- Ici devra s'afficher le chapitre de la citation -->
                                <i><?php echo $user['email']; ?></i>
                                <!-- End -->


                            </p>
                            <span class="hider"></span>
                        </div>
                       
                    </div>
                </div>
            <?php } ?>
            <!-- End block card citation -->
        </div>
    </div>

<?php include '../views/includes/footer.php'; ?>
