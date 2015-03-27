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
        var teamMembers = data.ID1;
        $scope.image = teamMembers.imageURL;
        $scope.name = teamMembers.memberName;
        $scope.description = teamMembers.memberDescription;

        var teamMember1 = data.ID2;
        $scope.image = teamMember1.imageURL;
        $scope.name = teamMember1.memberName;
        $scope.description = teamMember1.memberDescription;
    }]);

})(window.angular);