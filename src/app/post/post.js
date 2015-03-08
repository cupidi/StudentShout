angular.module('post', ['selector', 'message'])

.config(['$routeProvider', function ($routeProvider) {
  $routeProvider.when('/post', {
    templateUrl:'app/post/post.html',
    controller:'PostCtrl',  	
  })}])

.controller('PostCtrl', ['$rootScope', '$scope', '$location', function ($rootScope, $scope, $location) {
	$rootScope.showAllCat = false;
}]);