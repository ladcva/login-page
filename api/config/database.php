<?php
class Database{
 
    // specifk bay gio anh Thang ha 123nhom trn git roi do
    private $host = "127.0.0.1";
    private $db_name = "PHPLearning";
    private $username = "root";
    private $password = "zozazozin1";
    public $conn;
 
    // get the database connection - chinh sua cai gi do
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>