<?php
require_once "../../lib/database_class.php";
//instance
$DB = new Database();
$table_name = "categories";
switch ($table_name){
    case "categories":
        require_once "dao/categoriesDAO.php";  //file_path
        //instance
        $objCategories = new CategoriesDAO($DB);
        //POJO-set
        $objCategories->setCategory_name();
        //DAO-crud=insertCategories
        $objCategories->updateCategories();
    break;
    case "news":
        require_once "dao/newsDAO.php";  //file_path
        //instance
        $objNews = new NewsDAO($DB);
        //POJO-set
        $objNews->setNews_title();
        $objNews->setNews_content();
        $objNews->setNews_datetime();
        //DAO-crud=insertCategories
        $objNews->updateNews();
    break;
    case "media":
        require_once "dao/mediaDAO.php";  //file_path
        //instance
        $objMedia = new MediaDAO($DB);
        //POJO-set
        $objMedia->setMedia_title();
        $objMedia->setMedia_type();
        $objMedia->setMedia_datetime();
        $objMedia->setMedia_path();
        //DAO-crud=insertCategories
        $objMedia->updateMedia();
    break;
    case "customers":
        require_once "dao/customersDAO.php";  //file_path
        //instance
        $objCustomers = new CustomersDAO($DB);
        //POJO-set
        $objCustomers->setCustomer_name();
        $objCustomers->setTel();
        $objCustomers->setEmail();
        $objCustomers->setAddress();
        //DAO-crud=insertCategories
        $objCustomers->updateCustomers();
    break;
    case "ads":
        require_once "dao/adsDAO.php";  //file_path
        //instance
        $objAds = new AdsDAO($DB);
        //POJO-set
        $objAds->setAds_customer_name();
        $objAds->setAds_starttime();
        $objAds->setAds_endtime();
        $objAds->setAds_price();
        //DAO-crud=insertCategories
        $objAds->updateAds();
    break;
    default:
    echo "nema tabela";
    break;
}

?>