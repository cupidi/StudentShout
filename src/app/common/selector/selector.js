angular.module('selector', ['resources.categories'])

.controller('SelectorCtrl', ['$scope', '$location', 'Categories', function ($scope, $location, Categories) {
	
	Categories.async().then(function(categories) {
		$scope.categories = categories;
	});
	
}]);