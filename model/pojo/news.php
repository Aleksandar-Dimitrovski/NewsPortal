<?php
class News
{
    private $news_id;
    private $news_title;
    private $news_content;
    private $news_datetime;
    private $category_id;

    public function __construct(){
    }
    public function setNews_id($news_id){
        $this->news_id=$news_id;
    }
    public function setNews_title($news_title){
        $this->news_title=$news_title;
    }
    public function setNews_content($news_content){
        $this->news_content=$news_content;
    }
    public function setNews_datetime($news_datetime){
        $this->news_datetime=$news_datetime;
    }
    public function setCategory_id($category_id){
        $this->category_id=$category_id;
    }
    
    public function getNews_id(){
        return $this->news_id;
    }
    public function getNews_title(){
        return $this->news_title;
    }
    public function getNews_content(){
        return $this->news_content;
    }
    public function getNews_datetime(){
        return $this->news_datetime;
    }
    public function getCategory_id(){
        return $this->category_id;
    }
  }

?>