angular.module('app.controllers')
    .controller('ProjectNoteShowController', ['$scope', 'Client',function($scope, Client){
        $scope.clients = Client.query();
        console.log($scope.clients);

    }]);/**
 * Created by vcsiqueira on 27/08/15.
 */
