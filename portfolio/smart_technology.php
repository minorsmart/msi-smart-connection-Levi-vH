<?php
include "base_files/heads.php";
include "base_files/header.php";
?>
<!DOCTYPE html>
<body>
<section>
    <div class="container newcontainer">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h2>Smart Technologie</h2>
                <hr>
                <h4>Plant systeem</h4>
                <p>In this workshop we are going to make a smart-plant. Watering plants is boring and we often forget
                    it. To solve this problem you are going to make a system that monitors the climate a plant is in and
                    waters the plant when necessary.

                    You are going to connect a few sensors and actuators to the internet using a wifi Enabled
                    microcontroller (ESP32). Using an app called Blynk you can monitor the status (ground moisture-,
                    temperature-, light-levels) of your plant from anywhere on the world.</p>
                <h4>Uitleg video</h4>
                <hr>
                <p>In het begin van de video is te zien dat er een lichtsensor aangesloten is. Als ik mijn vinger op
                    deze sensor houd, gaat er een lamp aan. Dit laat zien dat als het donker is, dat de lamp dan
                    aangaat. Dit is nodig om de plant in leven te houden. Verder gaat in dit prototype elke 17 seconden
                    de waterpomp aan om de plant water te geven. Dit is normaal pas als de 'Moisture' sensor een te
                    'droge' grond meet. Elk halfuur wordt normaal de grond gemeten en dan gaat de pomp voor ongeveer 5
                    seconden water geven. </p>
                <video width="600" height="400" controls>
                    <source src="assets/img/plant.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</section>
<!-- /.container -->
<?php
include "base_files/footer.php";
include "base_files/scripts.php";
?>
</body>