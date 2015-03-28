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

        var memberLists = document.getElementsByClassName('imgteam');
        for (var member in teamMembers) {

            var image = '< img' + teamMembers[member].imageURL + '>';
            var name = '<h4>' + teamMembers[member].memberName + '</h4>';
            var description = '<p>' + teamMembers[member].memberDescription + '</p>';
            $scope.memberList = image + name + description;
        }

    }]);

})(window.angular);