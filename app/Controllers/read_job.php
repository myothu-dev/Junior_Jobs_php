<?php 
namespace app\Controllers;
require('../../vendor/autoload.php');
use App\config\Database;
use App\Models\Job;
$db = Database::getInstance();
$connection = $db->getConnection();
$job = new Job($connection);
$result = $job->getData();
return $result;