<?php
class Customers
{
private $customer_id;
private $customer_name;
private $tel;
private $email;
private $address;
//construct
public function __construct(){
}
public function setCustomer_id($customer_id){
    $this->customer_id=$customer_id;
}
public function setCustomer_name($customer_name){
    $this->customer_name=$customer_name;
}
public function setTel($tel){
    $this->tel=$tel;
}
public function setEmail($email){
    $this->email=$email;
}
public function setAddress($address){
    $this->address=$address;
}
public function getCustomer_id(){
    return $this->customer_id;
}
public function getCustomer_name(){
    return $this->customer_name;
}
public function getTel(){
    return $this->tel;
}
public function getEmail(){
    return $this->email;
}
public function getAddress(){
    return $this->address;
}
}

?>