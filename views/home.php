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

                <div align="center" class="map">
            <script>
            function initMap() {

            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: {lat: 48.8490723, lng: 2.3504169}
            });

            var markers = locations.map(function(location, i) {
            return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
            });
            });

// Add a marker clusterer to manage the markers.
            var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
            }

            var locations = [
            {lat: 48.8490723, lng: 2.3504169}
            {lat: 48.866566, lng: 2.406896}
        
            ];

            </script>
            <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
            </script>
            <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlrC8OLY_RryeezvX5Lb0CVdg9woQZ-tM&content_copy&callback=initMap">
            </script>
        </div>
            </div>
        </div>
    </div>

<?php require 'includes/footer.php'; ?>
