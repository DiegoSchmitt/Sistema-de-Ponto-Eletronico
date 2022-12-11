<?php require "parts/header.php";?>
<body>
<div class="container">
        <div class="welcome">
            <div class="icon">
                <span class="material-symbols-outlined">
                    schedule
                </span>
            </div>
            <p>bem vindo</p>
            <h1>Registro de Ponto</h1>
        </div>
        <div class="box">
        <div class="access">
            <p>Insira sua matrícula</p>
            <form action="verifyRegistration.php" method="post">
                <input type="number" name="reg" id="reg">
                <input class="btn" type="submit" value="Registrar">
            </form>
        </div>
    </div>
</div>
</body>
</html>