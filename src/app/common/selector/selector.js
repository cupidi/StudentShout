angular.module('selector', ['resources.categories'])

.controller('SelectorCtrl', ['$rootScope', '$scope', '$location', 'Categories', function ($rootScope, $scope, $location, Categories) {
	
	Categories.async().then(function(categories) {
		$scope.categories = angular.copy(categories);
		if ($rootScope.showAllCat) {
			$scope.categories.unshift( {
				"theme":"Сите",
				"value":"",
				"subtype":"1"
			});
		}
		$scope.selectedTheme = $scope.categories[0];
	});
	
	$scope.onSelected = function () {
		$rootScope.$broadcast('selected', $scope.selectedTheme);
	}
	
}]);