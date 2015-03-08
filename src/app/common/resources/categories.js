angular.module('resources.categories', [])

.factory('Categories', function($http) {
    var promise;
    var myService = {
      async: function() {
        if ( !promise ) {
          promise = $http.get('test_jsons/categories.json').then(function (response) {
            return response.data;
          });
        }
        return promise;
      }
    };
    return myService;
});