<?php
class ConDB{
    private $host,$db,$user,$pass;
    public $conn;

    public function ConDB(){
        $this->host = 'localhost';
        $this->user = 'root'; 
        $this->pass = '12345678'; 
        $this->db = 'player'; 
    }

    public function connect(){
        try{
            $this->conn = new PDO("mysql:host=localhost;dbname=player","root","12345678");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
} 
?>