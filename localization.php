<?php require "parts/header.php";?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>
    <title>Geolocalização</title>
    <style>
        #map { 
            height: 300px; 
            width: 70%;
        }
    </style>
    <body>
    <div class="container">
        <div class="box box-map">
            <?php require "parts/time.php";?>
            <h4>Obtenha sua localização</h4>
            <p>Permita acesso no seu navegador</p>

            <div id="map"></div>

            <p>Devido ao não uso em celular, a localização pode não ser apresentada de forma correta</p>
            <form action="saveConfirm.php" method="post">
                <input type="hidden" name="lat" id="lat" value="3">
                <input type="hidden" name="long" id="long" value="2">
                <input class="btn" type="submit" value="Confirmar">
            </form>
        </div>
    </div>
    <script>
    function success(pos){
        let lat = document.querySelector("#lat")
        let long = document.querySelector("#long")
        lat.value = pos.coords.latitude
        long.value = pos.coords.longitude
    }
    navigator.geolocation.getCurrentPosition(success)
    </script>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
crossorigin=""></script>
<script src="assets/js/localization.js"></script>
<script src="assets/js/horaAtual.js"></script>
</body>
</html>