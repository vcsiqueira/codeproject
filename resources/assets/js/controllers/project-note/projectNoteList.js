angular.module('app.controllers')
    .controller('ProjectNoteListController', ['$scope', '$routeParams','ProjectNote',
        function($scope, $routeParams, ProjectNote){
        $scope.projectNotes = ProjectNote.query({id: $routeParams.id});

    }]);/**
 * Created by vcsiqueira on 27/08/15.
 */
