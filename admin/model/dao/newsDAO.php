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
    public function insertNews(){
        $news_title = parent::getNews_title();
        $news_content = parent::getNews_content();
        $news_datetime = parent::getNews_datetime();
        $news_image_path = parent::getNews_image_path();
        $category_id = parent::getCategory_id();
        
        $columns_value = "'$news_title', '$news_content', '$news_datetime', '$news_image_path', $category_id";
        $this->db_conn->callStoreProcedure("_insert_news($columns_value)");

    }
    public function deleteNews(){
        $news_id = parent::getNews_id();
        $this->db_conn->deleteRow($this->table_name, "news_id", $news_id);
    }
    public function updateNews(){
        $news_title = parent::getNews_title();
        $news_content = parent::getNews_content();
        $news_datetime = parent::getNews_datetime();
        $news_image_path = parent::getNews_image_path();
        $news_id = parent::getNews_id();
    }
    public function selectNews(){
        return $this->db_conn->selectRowStoreProcedure("_select_news()");
    }
}