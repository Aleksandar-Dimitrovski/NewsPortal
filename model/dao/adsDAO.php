<?php
require_once "pojo/ads.php";
class AdsDAO extends Ads
{
    //class atttributes
    private $table_name = "ads";  //database table
    private $db_conn = null;
    //construct
    public function __construct($DB){
        $this->db_conn = $DB;
    }
    //methods CRUD    
    public function selectAds(){
        return $this->db_conn->selectRow($this->table_name);
    }
}
?>