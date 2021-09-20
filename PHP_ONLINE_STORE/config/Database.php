<?php

class Database{
    // DB parameters

    private $host = 'localhost';
    private $db_name = 'cnb_catalogue';
    private $username = 'root';
    private $password = 'R@faelaugustos';
    private $conn; 

    public function connect(){
        $this->connect= null;

        try{
                $this -> conn= new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this-> username, $this->password);
                $this -> conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo 'Connection error:' .$e->getMessage();

        }
        return $this->conn;
    }

}