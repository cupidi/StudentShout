angular.module('post.entry', [])

.directive('postEntry', function() {
  return {
    restrict: 'E',
    scope: {
      postInfo: '=info'
    },
    templateUrl: 'app/common/post-entry/post-entry.html'
  };
});