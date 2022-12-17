<?php
require_once "pojo/news.php";
class NewsDAO extends News
{
    //class atttributes
    private $table_name="news";  //database table
    private $db_conn = null;
    //construct
    public function __construct($DB){
        $this->db_conn = $DB;
    }
    //methods CRUD
    public function selectNews(){
        return $this->db_conn->selectRow($this->table_name);
    }
}
?>