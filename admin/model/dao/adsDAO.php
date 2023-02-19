<?php
require_once "pojo/ads.php";
class AdsDAO extends Ads
{
    //class atttributes
    private $table_name = "ads";  //database table
    private $db_conn = null;
    //construct
    public function __construct($DB) {
        $this->db_conn = $DB;
    }

    //methods CRUD
    public function insertAds() {
        $ads_customer_name = parent::getAds_customer_name();
        $ads_starttime = parent::getAds_starttime();
        $ads_endtime = parent::getAds_endtime();
        $ads_price = parent::getAds_price();
        $customer_id = parent::getCustomer_id();
        
        $columns_value = "'$ads_customer_name', '$ads_starttime', '$ads_endtime', $ads_price, $customer_id";
        //echo $columns_value;
        $this->db_conn->callStoreProcedure("_insert_ads($columns_value)");
    }

    public function deleteCategories() {
        $ads_id = parent::getAds_id();
        $this->db_conn->deleteRow($this->table_name, "ads_id", $ads_id);
    }

    public function updateAds() {
        $ads_customer_name = parent::getAds_customer_name();
        $ads_starttime = parent::getAds_starttime();
        $ads_endtime = parent::getAds_endtime();
        $ads_price = parent::getAds_price();
        $customer_id = parent::getCustomer_id();
        $ads_id = parent::getAds_id();

        $columns_value = "'$ads_customer_name', '$ads_starttime', '$ads_endtime', $ads_price, $customer_id, $ads_id";
        $this->db_conn->callStoreProcedure("_update_ads($columns_value)");
    }

    public function selectAds() {
        return $this->db_conn->selectRowStoreProcedure("_select_ads()");
    }
}