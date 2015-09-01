angular.module('app.controllers')
    .controller('ClientNewController', ['$scope','$location', 'Client',function($scope, $location, Client){
        $scope.client = new Client();

        $scope.save = function(){
          if ($scope.form.$valid) {
              $scope.client.$save().then(function () {
                  $location.path('/clients');
              });
          }
        };

    }]);/**
 * Created by vcsiqueira on 27/08/15.
 */
