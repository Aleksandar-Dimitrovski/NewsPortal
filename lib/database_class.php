<?php
class Database
{
	//class attributes
	private $servername 	= 	"localhost";//127.0.0.1
	private $username 		= 	"root";
	private $password 		= 	"";
	private $database_name	=	"dimitrovski_project";
	private $conn 			=	null;
	//construct
	public function __construct(){
	
		try {
		  $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database_name", $this->username, $this->password);
		  // set the PDO error mode to exception
		  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  //echo "Connected successfully";
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
	}
	//Methods
	public function insertRow($table_name, $columns_name, $columns_value){		
		$query="INSERT INTO $table_name ($columns_name) VALUES($columns_value)";
		$this->conn->exec($query);
	}
	public function deleteRow($table_name, $pk_name, $pk_value){
		$query="DELETE FROM $table_name WHERE $pk_name = $pk_value";
		$this->conn->exec($query);
	}
	public function selectRow($table_name){
		$query="SELECT * FROM $table_name";
		//$this->conn->exec($query);//NIKAKO
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		// set the resulting array to associtive
		$results= $stmt->FetchAll();
		return $results;
	}
	public function updateRow(){
	}
}

?>