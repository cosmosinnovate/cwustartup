/**
 * Created by Taban on 3/25/15.
 */

(function (angular) {
    'use strict';
    var myApp = angular.module('CWUSTARTUP', []);

    myApp.controller('About', ['$scope', function ($scope) {
        $scope.about = data.about;
    }]);

    myApp.controller('Team', ['$scope', function ($scope) {
        var a = data.members;
        console.log(a);
        $scope.arrayData = data.members;

    }]);


})(window.angular);

//(function(angular) {
//    var app = angular.module('CWUSTARTUP', []);
//
//    //Create a service
//    app.service("cwustartupService", function ($http, $q)
//    {
//        var deferred = $q.defer();
//        $http.get('cwuMember.js').then(function (data)
//        {
//            deferred.resolve(data);
//        });
//        this.getTeamData = function ()
//        {
//            return deferred.promise;
//        }
//    })
//        .controller('About', function($scope, cwustartupService){
//            var promise = cwustartupService.getTeamData();
//            promise.then(function(data){
//                $scope.aboutUs = data.about;
//            });
//        })
//        .controller("Team", function ($scope, cwustartupService)
//        {
//            var promise = cwustartupService.getTeamData();
//            promise.then(function (data)
//            {
//                console.log(data);
//                $scope.members = data;
//
//            });
//        })
//})(window.angular);