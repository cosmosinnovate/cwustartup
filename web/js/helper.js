/**
 * Created by Taban on 3/25/15.
 */


var items = {
    "about": "CWUSTARTUP dedicated to bring like minded students to come together and create \n" +
    "exciting technologies that solve problems around us.",
    "projects": [],
    "events": [],
    "teams": [
        "images/taban.jpg",
        "images/p2.jpg",
        "images/patrick.jpg",
        "images/elliot.jpg",
        "images/anderson.jpg"
    ],
    "carouselImages": []
}

angular.module("app", [])
.constructor("Controller", ["$scope", function($scope){
        $scope.name = items.about;
    }]);
