<?php 
namespace App\Models;
use PDO;
class Job {
	public $con;
	public function __construct($db) {
		$this->con = $db;
	}
	public function getData() {
		$sql = "SELECT * FROM jobs";
		$smt = $this->con->prepare($sql);
		$smt->execute();
		$num_rows = $smt->rowCount();
		if($num_rows > 0) {
			$result_array = [];
			while($row = $smt->fetch(PDO::FETCH_ASSOC)) {
				extract($row);
				$job_attr = array('id'=>$id,'name'=>$name,'name_mm'=>$name_mm);
				array_push($result_array,$job_attr);
			}
			echo json_encode($result_array);
		}
	}
}