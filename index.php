<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script  src="js/angular.min.js"></script>
	

</head>
<body>
	<div ng-app="myApp" ng-controller="myCtrl">
	<input type="text" id="serie" ng-model="serie">
	<input type="text" id="titulo" ng-model="titulo">
	<input type="button" value="submit" ng-click="insertdata()">
	</div>

<script>

var app = angular.module("myApp", []);

app.controller("myCtrl", function($scope,$http) {
    $scope.insertdata = function()
    {
    	$http.post("insert.php", {'serie':$scope.serie, 'titulo':$scope.titulo}).success(function(data, status, headers, config) {
        // this callback will be called asynchronously
        // when the response is available
        console.log("echo todo bien");
      }).
      error(function(data, status, headers, config) {
      	console.log("echo todo mal");
        // called asynchronously if an error occurs
        // or server returns response with an error status.
      });
    }
});

</script>
	
</body>
</html>