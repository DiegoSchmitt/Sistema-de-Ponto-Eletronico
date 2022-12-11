<?php

class Records{
    private $pdo;
    public function __construct(){
         $this->pdo = new pdo("mysql:dbname=ponto_eletronico;host=localhost", "root", "");
    }
    
    public function save($id_user, $date, $hour, $latitude, $longitude, $ip, $img){
        $sql = "INSERT INTO records (id_user, date, hour, latitude, longitude, ip, img)
        VALUES (:id_user, :date, :hour, :latitude, :longitude, :ip, :img)";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id_user", $id_user);
        $sql->bindValue(":date", $date);
        $sql->bindValue(":hour", $hour);
        $sql->bindValue(":latitude", $latitude);
        $sql->bindValue(":longitude", $longitude);
        $sql->bindValue(":ip", $ip);
        $sql->bindValue(":img", $img);
        $sql->execute();
        return true;
    }

    public function getAll(){
        $sql = "SELECT * FROM records LIMIT 100";
        $sql = $this->pdo->query($sql);
        if($sql -> rowCount() > 0){
            return $sql->fetchAll();
        }
        else{
            return array();
        }
    }

    public function getRecordsDate($id_user, $date){
        $sql = "SELECT * FROM records WHERE id_user = :id_user AND date = :date ";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id_user", $id_user);
        $sql->bindValue(":date", $date);
        $sql->execute();
        if($sql -> rowCount() > 0){
            return $sql->fetchAll();
        }
        else{
            return false;
        }
    }
}

