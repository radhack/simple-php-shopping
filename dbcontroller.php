<?php
class DBController {
	private $host = "localhost:3306";
	private $user = null;
	private $password = null;
	private $database = "testdb";
	private $conn;
	
	function __construct() {
                $this->user = getenv("DB_ADMIN");
                $this->password = getenv("DB_PASSWORD");
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>