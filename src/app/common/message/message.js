angular.module('message', [])

.controller('MessageCtrl', ['$scope', '$location', '$http', function ($scope, $location, $http) {
	
	$scope.radioModel = 1;
	$scope.themeID = 1;
		
	$scope.$on('selected', function(event, theme) {
	    $scope.showCat = theme.type == 2;
		$scope.themeID = theme.theme_id;
	  });
	  
	$scope.submitButton = function () {
		
		var typeID = 0;
		if ($scope.showCat) {
			typeID = $scope.radioModel;
		}

		$http.post('http://localhost:8888/studentShoutServer/post_posts.php', {
			"theme_id":$scope.themeID,
			"content":$scope.message,
			"type":typeID
		}).
		success(function(data, status, headers, config) {
		}).
		error(function(data, status, headers, config) {
		});
		
		$location.path("");
	}
	  
	
}]);