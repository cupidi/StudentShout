angular.module('resources.posts', [])

.factory('Posts', function($http) {
    var promise;
    var myService = {
      async: function() {
		promise = $http.get('http://localhost:8888/studentShoutServer/get_posts.php').then(function (response) {
		return response.data;
		});
        return promise;
      }
    };
    return myService;
});