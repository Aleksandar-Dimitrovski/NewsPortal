<?php
 class Categories
 {
    //class atributes
    private $category_id;
    private $category_name;
    //construct
    public function __construct(){
    }
    //Setters
    public function setCategory_id($category_id){
        $this->category_id=$category_id;
    }
    public function setCategory_name($category_name){
        $this->category_name=$category_name;
    }
    //Getters
    public function getCategory_id(){
        return $this->category_id;
    }
    public function getCategory_name(){
        return $this->category_name;
    }

 }
