<?php
//emeno od chat
$data = json_decode(file_get_contents("php://input"));
var_dump($data);
require_once "../../lib/database_class.php"; // database file_path
//INSTANCE
$objDB = new Database();
$table_name = $data[0]->table_name;
$pk_value = $data[0]->pk_value;




require_once "../../lib/database_class.php";
//instance
$objDB = new Database();
$table_name = "categories";
switch ($table_name){
    case "categories":
        require_once "dao/categoriesDAO.php";  //file_path
        //instance
        $objCategories = new CategoriesDAO();
        //POJO-set
        $objCategories->setCategory_id();
        //DAO-crud=insertCategories
        $objCategories->deleteCategories();
    break;
    case "news":
        require_once "dao/newsDAO.php";  //file_path
        //instance
        $objNews = new NewsDAO();
        //POJO-set
        $objNews->setNews_id();
        //DAO-crud=insertCategories
        $objNews->deleteNews();
    break;
    case "media":
        require_once "dao/mediaDAO.php";  //file_path
        //instance
        $objMedia = new MediaDAO();
        //POJO-set
        $objMedia->setMedia_id();
        //DAO-crud=insertCategories
        $objMedia->deleteMedia();
    break;
    case "customers":
        require_once "dao/customersDAO.php";  //file_path
        //instance
        $objCustomers = new CustomersDAO();
        //POJO-set
        $objCustomers->setCustomer_id();
        //DAO-crud=insertCategories
        $objCustomers->deleteCustomers();
    break;
    case "ads":
        require_once "dao/adsDAO.php";  //file_path
        //instance
        $objAds = new AdsDAO();
        //POJO-set
        $objAds->setAds_id();
        //DAO-crud=insertCategories
        $objAds->deleteAds();
    break;
    default:
    echo "nema tabela";
    break;
}

?>