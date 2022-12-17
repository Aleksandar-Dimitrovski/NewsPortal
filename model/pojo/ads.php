<?php
class Ads
{
private $ads_id;
private $ads_customer_name;
private $ads_starttime;
private $ads_endtime;
private $ads_price;
private $customer_id;

//construct
public function __construct(){
}
public function setAds_id($ads_id){
    $this->ads_id=$ads_id;
}
public function setAds_customer_name($ads_customer_name){
    $this->ads_customer_name=$ads_customer_name;
}
public function setAds_starttime($ads_starttime){
    $this->$ads_starttime=$ads_starttime;
}
public function setAds_endtime($ads_endtime){
    $this->ads_endtime=$ads_endtime;
}
public function setAds_price($ads_price){
    $this->ads_price=$ads_price;
}
public function setCustomer_id($customer_id){
    $this->customer_id=$customer_id;
}
public function getAds_id(){
    return $this->ads_id;
}
public function getAds_customer_name(){
    return $this->ads_customer_name;
}
public function getAds_starttime(){
    return $this->ads_starttime;
}
public function getAds_endtime(){
    return $this->ads_endtime;
}
public function getAds_price(){
    return $this->ads_price;
}
public function getCustomer_id(){
    return $this->customer_id;
}

}

?>