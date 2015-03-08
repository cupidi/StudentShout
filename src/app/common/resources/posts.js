angular.module('resources.posts', [])

.factory('Posts', function($http) {
    var promise;
    var myService = {
      async: function() {
        if ( !promise ) {
          promise = $http.get('test_jsons/posts.json').then(function (response) {
            return response.data;
          });
        }
        return promise;
      }
    };
    return myService;
});