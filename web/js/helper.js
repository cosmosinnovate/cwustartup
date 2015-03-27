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
        var teamMembers = data.teams;
        for (var teams in teamMembers) {
            $scope.image = teamMembers[teams.imageURL];
            $scope.name = teamMembers[teams.memberName];
            $scope.member = teamMembers[teamMembers.memberDescription];
        }

    }]);

})(window.angular);