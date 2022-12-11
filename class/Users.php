<?php
class Users{
    private $pdo;
    public function __construct(){
         $this->pdo = new pdo("mysql:dbname=ponto_eletronico;host=localhost", "root", "");
    }

    public function getRegistration($registration){
        $sql = "SELECT * FROM users WHERE registration = :registration LIMIT 1";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":registration", $registration);
        $sql->execute();
        if($sql->rowCount() > 0){
            return $sql->fetch();
        } else{
            return false;
        }
    }

    public function getId($id){
        $sql = "SELECT * FROM users WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        if($sql->rowCount() > 0){
            return $sql->fetch();
        } else{
            return false;
        }
    }

}