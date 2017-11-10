<?php require 'includes/header.php'; ?>

    <div class="container">

        <div align="center" class="row">
            <div class="birth">
                <h3 class="birthday_title"> It's
                    <?php 
                    // var_dump($users_birthday);

                    if (empty ($users_birthday)){ 
                        echo "nobody";
                    } 
                    else { 
                        foreach ($users_birthday as $user_birthday){
                            // var_dump($users_birthday);
                        echo ($user_birthday['username']);}} ?>'s birthday today! <img src="views/assets/img/party_hat_emoji.png" alt="party hat"></h3>
            </div>
            
            <div class="map">
                <h4>Who lives around me?</h4>
                <iframe
                    width="600"
                    height="450"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAlrC8OLY_RryeezvX5Lb0CVdg9woQZ-tM
                    &q=Wild+Code+School,Paris" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

<?php require 'includes/footer.php'; ?>
