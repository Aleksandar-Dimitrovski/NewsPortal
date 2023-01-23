<?php
require_once "pojo/categories.php";
class CategoriesDAO extends Categories
{
    //class atttributes
    private $table_name = "categories";  //database table
    private $db_conn = null;
    //construct
    public function __construct($DB){
        $this->db_conn = $DB;
    }
    //methods CRUD
    public function insertCategories(){
        $category_name = parent::getCategory_name();
        $columns_value = "'$category_name'";
        $this->db_conn->callStoreProcedure("_insert_categories($columns_value)");
    }

    public function deleteCategories(){
       $category_id = parent::getCategory_id();
       $this->db_conn->deleteROW($this->table_name, "category_id", $category_id);
    }

    public function updateCategories(){
        $category_name = parent::getCategory_name();
        $category_id = parent::getCategory_id();
        $columns_value = "'$category_name',$category_id";
        $this->db_conn->callStoreProcedure("_update_categories($columns_value)");
    }

    public function selectCategories() {
        return $this->db_conn->selectRowStoreProcedure("_select_categories()");
    }
}