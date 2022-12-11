<?php require "parts/header.php";

$user = new Users;
$records = new Records;

$data = $records->getAll();


if($data){
    ?>
    <h1>últimos acessos </h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>IP</th>
                <th>Foto</th>
            </tr>
        </thead>
    <?php
    foreach($data as $item){
        ?>
            <tbody>
                <tr>
                    <td> 
                        <?php
                            $infoUser = $user->getId( $item['id_user']); 
                            echo $infoUser['first_name'];
                        ?>
                    </td>
                    <td>
                        <?php
                            $infoUser = $user->getId( $item['id_user']); 
                            echo $infoUser['last_name'];
                        ?>
                    </td>
                    <td>
                        <?= $item['date'];?>
                    </td>
                    <td> 
                        <?= $item['hour'];?>
                    </td>
                    <td> 
                        <?= $item['latitude'];?> 
                    </td>
                    <td> 
                        <?= $item['longitude'];?> 
                    </td>
                    <td> 
                        <?= $item['ip'];?> 
                    </td>
                    <td> 
                        <?= $item['img'];?> 
                    </td>
                </tr>
            </tbody>
        <?php
    }
    ?>
        </table>
    <?php
}else{
    echo "Nenhum usuário com esse nome!";
} 