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
        <?php require "parts/time.php";?>
    
        <div id="waiting">Aguardando Ponto</div>
    
        <div class="registers">
            <?php
                $records = New Records;
                $records = $records->getRecordsDate($_SESSION['id_user'], date("d/m/Y"));
                if($records){
                    foreach($records as $item){
                        ?>
                            <p>Ponto registrado: <?=$item['hour'];?></p>
                        <?php
                    }
                }

                else {
                    ?>
                        <p>Não há registros para o dia de hoje</p>
                    <?php
                }

                
            ?>
        </div>
        <form action="saveRegister.php" method="post">
            <input type="hidden" name="date" id="date" value="<?= date("d/m/Y")?>">
            <input type="hidden" name="hour" id="hour" value="<?= date("H:i:s")?>">
            <input class="btn" type="submit" value="Registrar">
        </form>
    </div>
</div>

    <script>

    </script>
</body>
</html>