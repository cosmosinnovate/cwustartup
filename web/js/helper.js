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
        var a = data.members.length;
        for (var i = 0; i <= a; i++) {
            $scope.image = data.members.imageURL;
            $scope.name = data.members.memberName;
            $scope.description = data.members.memberDescription;
        }


    }]);


})(window.angular);