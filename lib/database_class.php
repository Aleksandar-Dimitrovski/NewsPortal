<?php
class Database
{
	//class attributes
	private $servername 	= 	"localhost";
	private $username 		= 	"root";
	private $password 		= 	"";
	private $database_name	=	"dimitrovski_project";
	private $conn 			=	null;
	//construct
	public function __construct() {
	
		try {
		  $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database_name", $this->username, $this->password);
		  // set the PDO error mode to exception
		  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  //echo "Connected successfully";
		} catch (PDOException $e) {
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
	public function selectRow($table_name) {
		$query = "SELECT * FROM $table_name";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		// set the resulting array to associtive
		$result = $stmt->FetchAll();
		return $result;
	}
	public function updateRow(){
	}

	public function selectRowStoreProcedure($storeProcedure)
	{
		$query = "CALL $storeProcedure";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();
		return $result;
	}

	public function callStoreProcedure($storeProcedure)
	{
		$query = "CALL $storeProcedure";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
	}
	// -------------ovaa funkcija ja insertiram za da prikazi category_name vo news i vo media-------
	public function selectColumns($table_name, $columns)
	{
		$query = "SELECT $columns FROM $table_name";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		$result = $stmt->fetchAll();
		return $result;
	}

	// -----funkcija selektiram po kategorija-----
	public function selectNewsByCategory($category) {
		$sql = "SELECT * FROM news INNER JOIN categories ON news.category_id = categories.category_id
		WHERE categories.category_name = :category
		ORDER BY news.news_datetime DESC LIMIT 16";
		$stmt = $this->db_conn->prepare($sql);
		$stmt->bindParam(':category', $category, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
