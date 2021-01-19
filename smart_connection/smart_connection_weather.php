<?php
include "../base_files/heads.php";
include "../base_files/header.php";
include "../base_files/smart_connection_nav.php"
?>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,900" rel="stylesheet">
<!DOCTYPE html>
<meta charset="utf-8">
<style>
    body {
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
        font-size: 1.3em;
        color: #fff;
        text-shadow: .1em .1em 0 rgba(0, 0, 0, 0.3);
        height: 100vh;
        align-items: center;
        justify-content: center;
        background-image: linear-gradient(to right top, #99bbcb, #a5c7d7, #b1d4e2, #bde0ee, #c9edfa);
    }

    h1 {
        margin: 0 auto;
        text-align: center;
        color: #fff;
        font-size: 5em;
    }

    body.sunny {
        background-image: linear-gradient(to right top, #ff4e50, #ff713e, #ff932b, #ffb41d, #f9d423);
    }

    body.cloudy {
        background-image: linear-gradient(to right top, #63747c, #71858e, #7f96a0, #8da8b2, #9bbac5);
    }

    body.rainy {
        background-image: linear-gradient(to right top, #637c7b, #718e8c, #7ea09e, #8db2b0, #9bc5c3);
    }
</style>
<body>
<section>
    <div class="container newcontainer">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h2>Bekijk hieronder het weer in: Nijmegen</h2>
                <hr>
                <div id="weather">
                    <div id="description"></div>
                    <h1 id="temp"></h1>
                    <div id="location"></div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
</section>
</body>
<script lang="js">
    function weatherBalloon(cityID) {
        var key = '542ffd081e67f4512b705f89d2a611b2';
        fetch('https://api.openweathermap.org/data/2.5/weather?id=' + cityID + '&appid=' + key)
            .then(function (resp) {
                return resp.json()
            }) // Convert data to json
            .then(function (data) {
                drawWeather(data); // Call drawWeather
            })
            .catch(function () {
// catch any errors
            });
    }

    window.onload = function () {
        weatherBalloon(2750053);
    };


    function drawWeather( d ) {
        var celcius = Math.round(parseFloat(d.main.temp)-273.15);
        var fahrenheit = Math.round(((parseFloat(d.main.temp)-273.15)*1.8)+32);
        var description = d.weather[0].description;

        document.getElementById('description').innerHTML = description;
        document.getElementById('temp').innerHTML = celcius + '&deg;';
        document.getElementById('location').innerHTML = d.name;

        if( description.indexOf('rain') > 0 ) {
            document.body.className = 'rainy';
        } else if( description.indexOf('cloud') > 0 ) {
            document.body.className = 'cloudy';
        } else if( description.indexOf('sunny') > 0 ) {
            document.body.className = 'sunny';
        }
    }


</script>
<?php
include "../base_files/scripts.php";
include "../base_files/footer.php";
?>
