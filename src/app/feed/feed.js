angular.module('feed', ['selector'])

.config(['$routeProvider', function ($routeProvider) {
  $routeProvider.when('/feed', {
    templateUrl:'app/feed/feed.html',
    controller:'FeedCtrl',  	
  })}])

.controller('FeedCtrl', ['$scope', '$location', function ($scope, $location) {
	
}]);