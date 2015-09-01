/**
 * Created by vcsiqueira on 27/08/15.
 */
angular.module('app.services')
.service('Client', ['$resource', 'appConfig', function($resource, appConfig){
        return $resource(appConfig.baseUrl + '/client/:id', {id: '@id'},{
            update: {
                method: 'PUT'
            },
            //query: {
            //    method: 'GET',
            //    isArray: true,
            //    transformResponse: function(data, header){
            //
            //        var dataJson = JSON.parse(data);
            //
            //        dataJson = dataJson.data;
            //
            //        return dataJson;
            //
            //    }
            //
            //}
        });
    }]);