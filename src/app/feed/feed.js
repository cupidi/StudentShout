angular.module('feed', ['selector'])

.config(['$routeProvider', function ($routeProvider) {
  $routeProvider.when('/feed', {
    templateUrl:'app/feed/feed.html',
    controller:'FeedCtrl',  	
  })}])

.controller('FeedCtrl', ['$rootScope', '$scope', '$location', 'Posts', function ($rootScope, $scope, $location, Posts) {
	
	$rootScope.showAllCat = true;
	
	Posts.async().then(function(posts) {
		$scope.posts = posts;
	});
	
	$scope.$on('selected', function(event, theme) {
	    $scope.selectedTheme = theme.value;
	  });
	
}]);