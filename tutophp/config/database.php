<?php
class Database{
    // specify your database credentials
    private $host = "localhost";
    private $db_name = "tutophp";
    private $username = "root";
    private $password = "";
	  private $db_type = "mysql"; //dblib || mysql
    public $conn;

    // get the database connection
    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO($this->db_type .":host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
