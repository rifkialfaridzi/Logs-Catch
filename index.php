
<!DOCTYPE html>
<html ng-app="app_filter">
<head>
  <title>Parse Data</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script type="text/javascript" src="js/angular.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/clipboard.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <style type="text/css">
    li{
      list-style: none;
    }
  </style>
</head>
<body>
  <div class="container" ng-controller="ini_controller">
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
          <span class="panel-title">Catching Logs Data</span>
          </div>

          <div class="panel-body">
            <div class="jumbotron">
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon1">Key</span>
                <input type="text" class="form-control" placeholder="Search for..." ng-model="hasil">
                <span class="input-group-btn">
                  <button class="btn btn-default" data-clipboard-action="copy" data-clipboard-target="#copyd"" type="button">Copy All</button>
                </span>
              </div><!-- /input-group -->
            </div>
            <div id="copyd">
              <p id="bar" ng-repeat="dn in ini_datanya | filter:hasil track by $index">{{dn}}</p>
            </div>
          </div>

        </div>

      </div>
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
    var clipboard = new ClipboardJS('.btn');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
   

  </script>
</body>
</html>
