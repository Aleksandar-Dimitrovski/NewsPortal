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
        return $this->db_conn->selectColumns("news INNER JOIN categories ON news.category_id = categories.category_id", 
        "news.news_id, news.news_title, news.news_content, news.news_datetime, news.news_image_path, categories.category_id, categories.category_name");
    }
    
    // -----funkcijata za prikazuvanje news spored category-----
    public function selectNewsByCategory($category) {
        return $this->db_conn->selectNewsByCategory($category);
    }
}

?>