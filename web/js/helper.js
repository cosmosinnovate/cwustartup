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
        var teamMembers = data.members;

        for (var member in teamMembers) {
            $scope.image = teamMembers[member].imageURL;
            $scope.name = teamMembers[member].memberName;
            $scope.description = teamMembers[member].memberDescription;
        }

    }]);

})(window.angular);