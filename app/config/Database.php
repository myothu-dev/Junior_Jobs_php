<?php
namespace App\config;

use PDOException;
use PDO;
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "job_portal";
    private $connection;
    private static $instance = null;
    // public function getConnection() {
    //     $this->connection = null;
    //     try{
    //         $this->connection = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username);
    //     }catch(PDOException $exception) {
    //         echo "Connection Error! ". $exception->getMessage();
    //     }
    //     return $this->connection;
    // }
    private function __construct() {
        try{
            $this->connection = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username);
        }catch(PDOException $exception) {
            echo "Connection Error! ". $exception->getMessage();
        }
    }
    public static function getInstance() {
        if(!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    public function getConnection() {
        return $this->connection;
    }
}

// $test = Database::getInstance();
// $con = $test->getConnection();
// var_dump($con);
// var_dump($con);
// var_dump($con);
// var_dump($con);