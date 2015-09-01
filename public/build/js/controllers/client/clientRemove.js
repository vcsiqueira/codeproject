angular.module('app.controllers')
    .controller('ClientRemoveController',
    ['$scope','$location', '$routeParams','Client',function($scope, $location, $routeParams, Client){

        $scope.client = Client.get({id: $routeParams.id});

        $scope.remove = function(){
          //if ($scope.client.id.$touched) {
              $scope.client.$delete().then(function(){
                  $location.path('/clients');
              });
          //}
        };

    }]);/**
 * Created by vcsiqueira on 27/08/15.
 */
