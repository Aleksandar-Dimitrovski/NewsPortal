<?php
require_once "pojo/customers.php";
class CustomersDAO extends Customers
{
    //class atttributes
    private $table_name="customers";  //database table
    private $db_conn = null;
    //construct
    public function __construct($DB) {
        $this->db_conn = $DB;
    }

    //methods CRUD
    public function insertCustomers() {
        $customer_name = parent::getCustomer_name();
        $tel = parent::getTel();
        $email = parent::getEmail();
        $address = parent::getAddress();
        $columns_value = "'$customer_name', $tel, '$email', '$address'";
        echo $columns_value;
        $this->db_conn->callStoreProcedure("_insert_customers($columns_value)");
    }

    public function deleteCustomers() {
        $customer_id = parent::getCustomer_id();
        $this->db_conn->deleteRow($this->table_name, "customer_id", $customer_id);
    }

    public function updateCustomers() {
        $customer_name = parent::getCustomer_name();
        $tel = parent::getTel();
        $email = parent::getEmail();
        $address = parent::getAddress();
        $customer_id = parent::getCustomer_id();
        $columns_value = "'$customer_name', $tel, '$email', '$address', $customer_id";
        $this->db_conn->callStoreProcedure("_update_customers($columns_value)");
    }

    public function selectCustomers() {
        return $this->db_conn->selectRowStoreProcedure("_select_customers()");
    }
}