angular.module('studentShout', ['ngRoute', 'ui.bootstrap', 'feed', 'selector', 'resources.categories', 'message', 'post', 'post.entry', 'resources.posts']);

angular.module('studentShout').config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {
  $routeProvider.otherwise({redirectTo:'/feed'});
}]);
