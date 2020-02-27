<?php 
$host = "localhost";
$username = "root";
$password = "";
$db_name = "job_portal";

$connection = mysqli_connect($host,$username,$password,$db_name);
if(!$connection) {
	die('Database Connection Error'.mysqli_errors());
}



