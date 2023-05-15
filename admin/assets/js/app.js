
var app = angular.module("myApp", ["ngRoute"]);
app.controller("myCtrl", function($scope, $http, $filter, $routeParams) {
  //Initialisation
  $scope.url_param = $routeParams.id;
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


$scope.details_categories = function(category_name, url_param) 
{
  var objCategories = [];
  var postTo = "insert";
  var pk_value = -1;

  if (url_param !== undefined && url_param !== -1) {
    postTo = "update";
    pk_value = $scope.categories[url_param].category_id;
  }

  objCategories.push({
    "category_name": category_name, 
    "table_name": "categories", 
    "pk_value": pk_value
  });
  postData(postTo, objCategories);  
  $scope.alertDanger = false;
  $scope.alertSuccess = true;
}


$scope.details_news = function(news_title, news_content, news_datetime, news_image_path, category_id, url_param) 
 {
  var objNews=[];
  var postTo = "insert";
  var pk_value = -1;
  var news_datetime_format = $filter('date')(new Date(news_datetime),'yyyy-MM-dd H:m');
  if (url_param !== undefined && url_param !== -1) {
    postTo = "update";
    pk_value = $scope.news[url_param].news_id;
  }
  
  objNews.push({
    "news_title":news_title,
    "news_content":news_content,
    "news_datetime":news_datetime_format,
    "news_image_path":news_image_path,
    "category_id":category_id,
    "table_name":"news",
    "pk_value":pk_value
  });
  console.log(url_param);
  postData(postTo, objNews);
  $scope.alertDanger = false;
  $scope.alertSuccess = true;
 }



 $scope.details_media = function(media_title, media_type, media_datetime, media_image_path, category_id, url_param) 
 {
   var objMedia=[];
   var postTo = "insert";
   var pk_value = -1;
   var media_datetime_format = $filter('date')(new Date(media_datetime),'yyyy-MM-dd H:m');
   console.log("url_param:", url_param);
   if (typeof url_param !== 'undefined' && url_param !== -1) {
     postTo = "update";
     pk_value = $scope.media[url_param].media_id;
     console.log("pk_value:", pk_value);
   }
   objMedia.push({
     "media_title":media_title,
     "media_type":media_type,
     "media_datetime":media_datetime_format,
     "media_image_path":media_image_path,
     "category_id":category_id,
     "table_name": "media",
     "pk_value":pk_value
   });
   console.log("objMedia:", objMedia, objMedia.length);
   postData(postTo, objMedia);
   $scope.alertDanger = false;
   $scope.alertSuccess = true;
 }
 
 

 $scope.details_ads = function(ads_customer_name, ads_starttime, ads_endtime, ads_price, customer_id, url_param) 
 {
  var objAds=[];
  var ads_starttime_format = $filter('date')(new Date(ads_starttime),'yyyy-MM-dd H:m');
  var ads_endtime_format = $filter('date')(new Date(ads_endtime),'yyyy-MM-dd H:m');
  var postTo = "insert";
  var pk_value = -1;

  if (url_param !== undefined && url_param !== -1) {
    postTo = "update";
    pk_value = $scope.ads[url_param].ads_id;
  }

  objAds.push({
    "ads_customer_name":ads_customer_name,
    "ads_starttime":ads_starttime_format,
    "ads_endtime":ads_endtime_format,
    "ads_price":ads_price,
    "customer_id":customer_id,
    "table_name": "ads",
    "pk_value":pk_value
  });
  console.log(url_param);
  postData(postTo, objAds);
  $scope.alertDanger = false;
  $scope.alertSuccess = true;
 }




 $scope.details_customers = function(customer_name, tel, email, address, url_param) 
 {
   var objCustomers=[];
   var postTo = "insert";
   var pk_value = -1;
   console.log(url_param);
   if (typeof url_param !== 'undefined' && url_param !== -1) {
     postTo = "update";
     pk_value = $scope.customers[url_param].customer_id;
   }
   objCustomers.push({
     "customer_name":customer_name,
     "tel":tel,
     "email":email,
     "address":address,
     "table_name": "customers",
     "pk_value":pk_value
   });
   postData(postTo, objCustomers);
   $scope.alertDanger = false;
   $scope.alertSuccess = true;
 }

});
