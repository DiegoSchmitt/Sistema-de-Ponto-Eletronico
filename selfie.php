<?php require "parts/header.php";?>
<body>
<div class="container">
    <div class="box box-selfie">
        <?php require "parts/time.php";?>

        <video autoplay></video>
        <canvas></canvas>

        <form action="savePhoto.php" method ="post">
            <input type="hidden" id="photo" name="photo">
            <input id="selfie" type="submit" value="Tirar foto">
        </form>
    </div>
</div>
    <script src="camera.js"></script>
</body>
</html>