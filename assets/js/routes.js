
app.config(function($routeProvider){
  $routeProvider
  .when("/categories", {
    templateUrl : "view/categories.html",
    controller : "myCtrl"
  })
  .when("/details_categories", {
    templateUrl : "view/details_categories.html",
    controller : "myCtrl"
  })
  .when("/details_categories/:id", {
    templateUrl : "view/details_categories.html",
    controller : "myCtrl"
  })
  .when("/news", {
    templateUrl : "view/news.html",
    controller : "myCtrl"
  })
  .when("/details_news", {
    templateUrl : "view/details_news.html",
    controller : "myCtrl"
  })
  .when("/details_news/:id", {
    templateUrl : "view/details_news.html",
    controller : "myCtrl"
  })
  .when("/media", {
    templateUrl : "view/media.html",
    controller : "myCtrl"
  })
  .when("/details_media", {
    templateUrl : "view/details_media.html",
    controller : "myCtrl"
  })  
  .when("/customers", {
    templateUrl : "view/customers.html",
    controller : "myCtrl"
  })
  .when("/details_customers", {
    templateUrl : "view/details_customers.html",
    controller : "myCtrl"
  })
  .when("/ads_ads", {
    templateUrl : "view/ads_ads.html",
    controller : "myCtrl"
  })
  .when("/details_ads", {
    templateUrl : "view/details_ads.html",
    controller : "myCtrl"
  });
});