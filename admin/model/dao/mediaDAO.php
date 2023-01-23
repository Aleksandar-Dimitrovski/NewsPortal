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
    public function insertMedia(){
        $media_title = parent::getMedia_title();
        $media_type = parent::getMedia_type();
        $media_datetime = parent::getMedia_datetime();
        $media_image_path = parent::getMedia_image_path();
        $category_id = parent::getCategory_id();
        
        $columns_value = "'$media_title', '$media_type', '$media_datetime', '$media_image_path', $category_id";
        $this->db_conn->callStoreProcedure("_insert_media($columns_value)");


    }
    public function deleteMedia(){
        $media_id = parent::getMedia_id();
        $this->db_conn->deleteRow($this->table_name, "media_id", $media_id);
    }
    public function updateMedia(){
        $media_title = parent::getMedia_title();
        $media_type = parent::getMedia_type();
        $media_datetime = parent::getMedia_datetime();
        $media_image_path = parent::getMedia_image_path();
        $media_id = parent::getMedia_id();

    }
    public function selectMedia() {
        return $this->db_conn->selectRowStoreProcedure("_select_media()");
    }
}