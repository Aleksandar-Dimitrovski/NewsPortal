<?php
require_once "pojo/categories.php";
class CategoriesDAO extends Categories
{
    //class atttributes
    private $table_name = "categories";  //database table
    private $db_conn = null;
    //construct
    public function __construct($DB){
        $this->db_conn = $DB;
    }
    //methods CRUD
    public function selectCategories(){
        return $this->db_conn->selectRow($this->table_name);
    }
}
?>