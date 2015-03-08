angular.module('selector', ['resources.categories'])

.controller('SelectorCtrl', ['$rootScope', '$scope', '$location', 'Categories', function ($rootScope, $scope, $location, Categories) {
	$scope.onSelected = function () {
		$rootScope.$broadcast('selected', $scope.selectedTheme);
	}
	
	Categories.async().then(function(categories) {
		$scope.categories = angular.copy(categories);
		if ($rootScope.showAllCat) {
			$scope.categories.unshift( {
				"name":"Сите",
				"value":"",
				"subtype":"1"
			});
		}
		$scope.selectedTheme = $scope.categories[0];
		
	});
	

	
}]);