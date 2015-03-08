angular.module('resources.categories', [])

.factory('Categories', function($http) {
    var promise;
    var myService = {
      async: function() {
        if ( !promise ) {
          promise = $http.get('http://localhost:8888/studentShoutServer/get_themes.php').then(function (response) {
            return response.data;
          });
        }
        return promise;
      }
    };
    return myService;
});