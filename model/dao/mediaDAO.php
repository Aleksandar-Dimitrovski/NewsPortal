<?php
require_once "pojo/media.php";
class MediaDAO extends Media
{
    //class atttributes
    private $table_name="media";  //database table
    private $db_conn = null;
    //construct
    public function __construct($DB){
        $this->db_conn = $DB;
    }
    //methods CRUD
    public function selectMedia(){
        return $this->db_conn->selectRow($this->table_name);
    }
}
?>