angular.module('post.entry', [])

.directive('post-entry', function() {
  return {
    restrict: 'E',
    scope: {
      postInfo: '=info'
    },
    templateUrl: 'post-entry.html'
  };
});