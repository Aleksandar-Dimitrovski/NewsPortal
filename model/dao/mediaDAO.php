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
        return $this->db_conn->selectRow("media INNER JOIN categories ON media.category_id = categories.category_id",
        "media.media_id, media.media_title, media.media_type, media.media_datetime, media.media_image_path, categories.category_id, categories.category_name");
    }
}

?>