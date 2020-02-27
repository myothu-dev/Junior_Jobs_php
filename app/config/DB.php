<?php
// Connect db without a singleton.
class DB {
  private $conn;
  
  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $db_name = "job_portal";
  private $connection;
   
  // Public constructor.
  public function __construct() {
      try{
          $this->connection = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username);
      }catch(PDOException $exception) {
          echo "Connection Error! ". $exception->getMessage();
      }
  }
   
  public function getConnection()
  {
    return $this->connection;
  }
}
$test = new DB();
$connection = $test->getConnection();
var_dump($connection);
var_dump($connection);
var_dump($connection);
var_dump($connection);