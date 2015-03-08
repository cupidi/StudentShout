angular.module('message', [])

.controller('MessageCtrl', ['$scope', '$location', function ($scope, $location) {
	
	$scope.$on('selected', function(event, theme) {
	    $scope.showCat = theme.subtype == 2;
	  });
	
}]);