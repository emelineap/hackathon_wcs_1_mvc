<?php require 'includes/header.php'; ?>

<div class="container">

    <div align="center" class="row">
        <div class="birth">
            <h3 class="birthday_title"> It's
                <?php
                // var_dump($users_birthday);

                if (empty ($users_birthday)) {
                    echo "nobody";
                } else {
                    foreach ($users_birthday as $user_birthday) {
                        // var_dump($users_birthday);
                        echo($user_birthday['username']);
                    }
                } ?>'s birthday today! <img src="views/assets/img/party_hat_emoji.png" alt="party hat"></h3>
        </div>
        <div>
            <p>Send her or him <a href="#">an email</a>!</p>
        </div>

        <h2>Who lives around me?</h2>

        <div id="map">
            <script>

                function initMap() {

                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 12,
                        center: {lat: 48.8534, lng: 2.3488}
                    });


                    var labels = [
                        'Jenny',
                        'Emeline',
                        'Amandine',
                        'Old Jenny',
                        'Hélène',
                        'Cindy',
                        'La Mut',
                        'Wild Code School',
                        'Florian',
                        'Caroline',
                        'Cyrielle'];

                    var markers = locations.map(function (location, i) {
                        return new google.maps.Marker({
                            position: location,
                            label: labels[i % labels.length]
                        });
                    });


                    var markerCluster = new MarkerClusterer(map, markers,
                        {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
                }

                var locations = [
                    {lat: 48.866566, lng: 2.406896},
                    {lat: 48.8563346, lng: 2.4012463},
                    {lat: 48.8321329, lng: 2.315054},
                    {lat: 48.870528, lng: 2.3575778},
                    {lat: 48.8686372, lng: 2.4062495},
                    {lat: 48.8625304, lng: 2.3500327},
                    {lat: 48.8625304, lng: 2.3500327},
                    {lat: 48.849072, lng: 2.3504113},
                    {lat: 48.4234945, lng: 2.5416454},
                    {lat: 48.8425682, lng: 2.4333048},
                    {lat: 48.8693138, lng: 2.3516765},
                ]
            </script>
            <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
            </script>
            <script class="map" async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8GshAEmnL9ipPy1H68otXEHjyGpb1uBI&callback=initMap">
            </script>

        </div>

        <?php require 'includes/footer.php'; ?>
