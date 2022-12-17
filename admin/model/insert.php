<?php
$data = json_decode(file_get_contents("php://input"));
var_dump($data);
require_once "../../lib/database_class.php";
//instance
$objDB = new Database();
$table_name = $data[0]->table_name;
switch ($table_name){
    case "categories":
        require_once "dao/categoriesDAO.php";  //file_path
        //instance
        $objCategories = new CategoriesDAO($objDB);
        //POJO-set
        $objCategories->setCategory_name($data[0]->category_name);
        //DAO-crud=insertCategories
        $objCategories->insertCategories();
    break;
    case "news":
        require_once "dao/newsDAO.php";
        $objNews = new NewsDAO($objDB);
        //POJO-set
        $objNews->setNews_title($data[0]->news_title);
        $objNews->setNews_content($data[0]->news_content);
        $objNews->setNews_datetime($data[0]->news_datetime);
        $objNews->setNews_image_path($data[0]->news_image_path);
        $objNews->setCategory_id($data[0]->category_id);
                //DAO-crud=insertCategories
        $objNews->insertNews();
    break;
    case "media":
        require_once "dao/mediaDAO.php";
        $objMedia = new MediaDAO($objDB);
        //POJO-set
        $objMedia->setMedia_title($data[0]->media_title);
        $objMedia->setMedia_type($data[0]->media_type);
        $objMedia->setMedia_datetime($data[0]->media_datetime);
        $objMedia->setMedia_image_path($data[0]->media_image_path);
        $objMedia->setCategory_id($data[0]->category_id);
        //DAO-crud=insertCategories
        $objMedia->insertMedia();
    break;
    case "customers":
        require_once "dao/customersDAO.php";
        $objCustomers = new CustomersDAO($objDB);
        //POJO-set
        $objCustomers->setCustomer_name($data[0]->customer_name);
        $objCustomers->setTel($data[0]->tel);
        $objCustomers->setEmail($data[0]->email);
        $objCustomers->setAddress($data[0]->address);
        //DAO-crud=insertCategories
        $objCustomers->insertCustomers();
    break;
    case "ads":
        require_once "dao/adsDAO.php";
        $objAds = new AdsDAO($objDB);
        //POJO-set
        $objAds->setAds_customer_name($data[0]->ads_customer_name);
        $objAds->setAds_starttime($data[0]->ads_starttime);
        $objAds->setAds_endtime($data[0]->ads_endtime);
        $objAds->setAds_price($data[0]->ads_price);
        $objAds->setCustomer_id($data[0]->customer_id);

        //DAO-crud=insertCategories
        $objAds->insertAds();
    break;
    default:
    echo "nema tabela";
    break;
}
 
?>