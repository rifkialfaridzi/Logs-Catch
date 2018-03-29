
<!DOCTYPE html>
<html ng-app="app_filter">
<head>
  <title>Parse Data</title>
  <script type="text/javascript" src="js/angular.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <style type="text/css">
    li{
      list-style: none;
    }
  </style>
</head>
<body>
  <div class="container" ng-controller="ini_controller">
    <div class="col-md-12">
       <input type="text" ng-model="hasil">
         <p ng-repeat="dn in ini_datanya | filter:hasil track by $index">{{dn}}</p>         
    </div>
  </div>

 <script>
  
   var app = angular.module('app_filter',[]);

   app.controller('ini_controller',function($scope,$http){
      
      $http.get("config.php").then(function(response){ // Get data Json
        console.log(response);
        $scope.ini_datanya=response.data;
      });
    
   });
   

  </script>
</body>
</html>
