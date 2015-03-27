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
        for (var team in teamMembers) {
            console.log(team.memberName);
        }

        for (var team in teamMembers) {
            $scope.image = teamMembers[team.imageURL];
            $scope.name = teamMembers[team.memberName];
            $scope.member = teamMembers[team.memberDescription];
        }

    }]);

})(window.angular);