/**
 * Created by Taban on 3/25/15.
 */

(function(angular) {
    'use strict';
    var myApp = angular.module('CWUSTARTUP', []);

    myApp.controller('About', ['$scope', function($scope) {
        $scope.about = data.about;

    }]);

    myApp.controller('Team', ['$scope', function($scope){
        var teamMembers = data;
        $scope.image = teamMembers.imageURL;
        for (var team in teamMembers) {
            $scope.name = team.memberName;
            $scope.member = team.memberDescription;
        }

    }]);

})(window.angular);