angular.module('post', ['selector', 'message'])

.config(['$routeProvider', function ($routeProvider) {
  $routeProvider.when('/post', {
    templateUrl:'app/post/post.html',
    controller:'PostCtrl',  	
  })}])

.controller('PostCtrl', ['$scope', '$location', function ($scope, $location) {
	
}]);