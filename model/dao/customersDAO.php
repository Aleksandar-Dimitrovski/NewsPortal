<?php
require_once "pojo/customers.php";
class CustomersDAO extends Customers
{
    //class atttributes
    private $table_name="customers";  //database table
    private $db_conn = null;
    //construct
    public function __construct($DB){
        $this->db_conn = $DB;
    }
    //methods CRUD
       public function selectCustomers(){
        return $this->db_conn->selectRow($this->table_name);
    }
}
?>