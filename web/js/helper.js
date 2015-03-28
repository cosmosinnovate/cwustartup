/**
 * Created by Taban on 3/25/15.
 */

//(function (angular) {
//    'use strict';
//    var myApp = angular.module('CWUSTARTUP', []);
//
//    myApp.controller('About', ['$scope', function ($scope) {
//        $scope.about = data.about;
//    }]);
//
//    myApp.controller('Team', ['$scope', function ($scope) {
//
//        for (var i = 0; i <= 2; i++) {
//            $scope.image = data.members.imageURL;
//            $scope.name = data.members.memberName;
//            $scope.description = data.members.memberDescription;
//        }
//
//
//    }]);
//
//
//})(window.angular);

(function(angular) {
    var app = angular.module('CWUSTARTUP', []);

    //Create a service
    app.service("cwustartupService", function ($http, $q)
    {
        var deferred = $q.defer();
        $http.get('data.json').then(function (data)
        {
            deferred.resolve(data);
        });
        this.getTeamData = function ()
        {
            return deferred.promise;
        }
    })
        .controller('About', function($scope, cwustartupService){
            var promise = cwustartupService.getTeamData();
            promise.then(function(data){
                $scope.about = data;
            });
        })
        .controller("Team", function ($scope, cwustartupService)
        {
            var promise = cwustartupService.getTeamData();
            promise.then(function (data)
            {

                $scope.members = data.data;
                console.log($scope.members);
            });
        })
})(window.angular);