<?php 
namespace App\Controllers;
require($_SERVER["DOCUMENT_ROOT"].'/vendor/autoload.php');
use App\config\Database;
use App\Models\Category;
$db = Database::getInstance();
$connection = $db->getConnection();
$category = new Category($connection);
$result = $category->getData();
return $result;