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
    public function insertCustomers(){
        $customer_name = parent::getCustomer_name();
        $tel = parent::getTel();
        $email = parent::getEmail();
        $address = parent::getAddress();
        
        $columns_name = "customer_name, tel, email, address";
        $columns_value = "'$customer_name', '$tel', '$email', '$address'";
        $this->db_conn->insertRow($this->table_name, $columns_name, $columns_value);
    } 
    public function deleteCustomers(){
        $customer_id = parent::getCustomer_id();
        $this->db_conn->deleteRow($this->table_name, "customer_id", $customer_id);
    }
    public function updateCustomers(){
        $customer_name = parent::getCustomer_name();
        $tel = parent::getTel();
        $email = parent::getEmail();
        $address = parent::getAddress();
        $customer_id = parent::getCustomer_id();
    }
    public function selectCustomers(){
        return $this->db_conn->selectRow($this->table_name);
    }
}

?>