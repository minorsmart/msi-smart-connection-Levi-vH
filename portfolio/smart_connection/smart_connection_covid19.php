<?php
include "../base_files/heads.php";
include "../base_files/header.php";
include "../base_files/smart_connection_nav.php"
?>
<!DOCTYPE html>
<body>
<section>
    <div class="container newcontainer">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h2>Bekijk hieronder de COVID-19 getallen van Nederland</h2>
                <hr>
                <h6>Aantal nieuwe doden:</h6>
                <div id="nieuwdoden"></div>
                <hr>
                <h6>Totaal aantal doden:</h6>
                <div id="totaaldoden"></div>
                <hr>
                <h6>Laatst bijgewerkt:</h6>
                <div id="datum"></div>
            </div>
        </div>
    </div>
</section>
</body>
<script lang="text/javascript">
    fetch('https://api.covid19api.com/summary')
        .then(function (resp) {
            return resp.json()
        })
        .then(function (data) {
            console.log(data)
            console.log(data.Countries[119].Country);
            console.log(data.Countries[119].TotalDeaths);
            document.getElementById("nieuwdoden").innerHTML = (data.Countries[119].NewDeaths)
            document.getElementById("totaaldoden").innerHTML = (data.Countries[119].TotalDeaths)
            document.getElementById("datum").innerHTML = (data.Countries[119].Date)
        })
        .catch(function () {
        })
</script>
<?php
include "../base_files/scripts.php";
include "../base_files/footer.php";
?>


