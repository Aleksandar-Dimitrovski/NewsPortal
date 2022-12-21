
var app = angular.module("myApp", ["ngRoute"]);
app.controller("myCtrl", function($scope, $http, $filter) {
  //Initialisation
  $scope.alertDanger = false;
  $scope.alertSuccess = false;
  $scope.error = function () {
  $scope.alertSuccess = false;
  $scope.alertDanger = true;
  }


//delete text from zoom chat start here Cas28
$scope.getPosition = -1;
	$scope.getId = function (index) {
		$scope.getPosition = index;
	}


$scope.deleteRow = function (table_name, pk_value) {
  var objDelete = [];
  objDelete.push(
    {
      "table_name": table_name,
      "pk_value": pk_value
    }
  )
  postData("delete", objDelete);
}
//delete text from zoom chat end here Cas28


//JSON
$scope.categories = [];
$http.get("model/select.php?table_name=categories") .then(function (response) {
  $scope.categories = response.data;
})

$scope.news = [];
$http.get("model/select.php?table_name=news") .then(function (response) {
  $scope.news = response.data;
})

$scope.media = [];
$http.get("model/select.php?table_name=media") .then(function (response) {
  $scope.media = response.data;
})

$scope.customers = [];
$http.get("model/select.php?table_name=customers") .then(function (response) {
  $scope.customers = response.data;
})

$scope.ads = [];
$http.get("model/select.php?table_name=ads") .then(function (response) {
  $scope.ads = response.data;
})



 //Form Functions

 function postData(file_name, dataObjPost) {
  $http({
    method: "POST",
    url: "model/" + file_name + ".php",
    data: dataObjPost
  })
}

 $scope.details_categories = function(category_name) 
 {
  var objCategories=[];
  objCategories.push({
    table_name: "categories",
    "category_name":category_name
  });
  console.log(objCategories);
  postData("insert", objCategories);
  $scope.alertDanger = false;
  $scope.alertSuccess = true;
 }

 $scope.details_news = function(news_title, news_content, news_datetime, news_image_path, category_id) 
 {
  var objNews=[];
  var news_datetime_format = $filter('date')(new Date(news_datetime),'yyyy-MM-dd H:m');
  objNews.push({
    table_name: "news",
    "news_title":news_title,
    "news_content":news_content,
    "news_datetime":news_datetime_format,
    "news_image_path":news_image_path,
    "category_id":category_id
  });
  console.log(objNews);
  postData("insert", objNews);
  $scope.alertDanger = false;
  $scope.alertSuccess = true;
 }

 $scope.details_media = function(media_title, media_type, media_datetime, media_image_path, category_id) 
 {
  var objMedia=[];
  var media_datetime_format = $filter('date')(new Date(media_datetime),'yyyy-MM-dd H:m');
  objMedia.push({
    table_name: "media",
    "media_title":media_title,
    "media_type":media_type,
    "media_datetime":media_datetime_format,
    "media_image_path":media_image_path,
    "category_id":category_id
  });
  console.log(objMedia);
  postData("insert", objMedia);
  $scope.alertDanger = false;
  $scope.alertSuccess = true;
 }

 $scope.details_ads = function(ads_customer_name, ads_starttime, ads_endtime, ads_price, customer_id) 
 {
  var objAds=[];
  var ads_starttime_format = $filter('date')(new Date(ads_starttime),'yyyy-MM-dd H:m');
  var ads_endtime_format = $filter('date')(new Date(ads_endtime),'yyyy-MM-dd H:m');

  objAds.push({
    table_name: "ads",
    "ads_customer_name":ads_customer_name,
    "ads_starttime":ads_starttime_format,
    "ads_endtime":ads_endtime_format,
    "ads_price":ads_price,
    "customer_id":customer_id
  });
  console.log(objAds);
  postData("insert", objAds);
  $scope.alertDanger = false;
  $scope.alertSuccess = true;
 }

 $scope.details_customers = function(customer_name, tel, email, address) 
 {
  var objCustomers=[];
  objCustomers.push({
    table_name: "customers",
    "customer_name":customer_name,
    "tel":tel,
    "email":email,
    "address":address
  });
  console.log(objCustomers);
  postData("insert", objCustomers);
  $scope.alertDanger = false;
  $scope.alertSuccess = true;
 }

});
