<?php
class Media
{
    private $media_id;
    private $media_title;
    private $media_type;
    private $media_datetime;
    private $category_id;
    private $media_image_path;

    public function __construct() {
    }
    //Setters
    public function setMedia_id($media_id){
        $this->media_id=$media_id;
    }
    public function setMedia_title($media_title){
        $this->media_title=$media_title;
    }
    public function setMedia_type($media_type){
        $this->media_type=$media_type;
    }
    public function setMedia_datetime($media_datetime){
        $this->media_datetime=$media_datetime;
    }
    public function setCategory_id($category_id){
        $this->category_id=$category_id;
    }
    public function setMedia_image_path($media_image_path){
        $this->media_image_path=$media_image_path;
    }
    //Getters    
    public function getMedia_id(){
        return $this->media_id;
    }
    public function getMedia_title(){
        return $this->media_title;
    }
    public function getMedia_type(){
        return $this->media_type;
    }
    public function getMedia_datetime(){
        return $this->media_datetime;
    }
       public function getCategory_id(){
        return $this->category_id;
    }
    public function getMedia_image_path(){
        return $this->media_image_path;
    }
}