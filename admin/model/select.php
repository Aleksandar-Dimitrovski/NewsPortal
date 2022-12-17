<?php
require_once "../../lib/database_class.php";
//instance
$objDB = new Database();
$data = array();
$table_name = $_GET["table_name"];
switch($table_name){
    case "categories":
        require_once "dao/categoriesDAO.php";
        //Instance
        $objCategories = new CategoriesDAO($objDB);
        $records = $objCategories->selectCategories();

        foreach ($records as $row) {
            $data[] = array(
            "category_id" => $row["category_id"],
            "category_name" => $row["category_name"]);
        }
    break;

    case "news":
        require_once "dao/newsDAO.php";
        $objNews = new NewsDAO($objDB);
        $records = $objNews->selectNews();
        
        foreach ($records as $row) {
            $data[] = array(
            "news_id"=>$row["news_id"],
            "news_title"=>$row["news_title"],
            "news_content"=>$row["news_content"],
            "news_datetime"=>$row["news_datetime"],
            "news_image_path"=>$row["news_image_path"],
            "category_id"=>$row["category_id"]);
        }
    break;

    case "media":
        require_once "dao/mediaDAO.php";
        $objMedia = new MediaDAO($objDB);
        $records = $objMedia->selectMedia();
        foreach ($records as $row) {
            if ($row["media_image_path"]==""){
            $row["media_image_path"] = "noImage.jpg";
            }
            $data[] = array(
            "media_id"=>$row["media_id"],
            "media_title"=>$row["media_title"],
            "media_type"=>$row["media_type"],
            "media_datetime"=>$row["media_datetime"],
            "media_image_path"=>$row["media_image_path"],
            "category_id"=>$row["category_id"]);
        }
    break;

    case "customers":
        require_once "dao/customersDAO.php";
        $objCustomers = new CustomersDAO($objDB);
        $records = $objCustomers->selectCustomers();
        foreach ($records as $row) {
            $data[] = array(
            "customer_id" => $row["customer_id"],
            "customer_name" => $row["customer_name"],
            "tel" => $row["tel"],
            "email" => $row["email"],
            "address" => $row["address"]);
        }
    break;

    case "ads":
        require_once "dao/adsDAO.php";
        $objAds = new adsDAO($objDB);
        $records = $objAds->selectAds();
        foreach ($records as $row) {
            $data[] = array(
            "ads_id" => $row["ads_id"],
            "ads_customer_name" => $row["ads_customer_name"],
            "ads_starttime" => $row["ads_starttime"],
            "ads_endtime" => $row["ads_endtime"],
            "ads_price" => $row["ads_price"],
            "customer_id" => $row["customer_id"]

        );
        }
    break;

    default:
    echo "nema tabela";
    break;
}

echo json_encode($data);
?>