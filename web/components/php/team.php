<section id="team" ng-controller="Team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>CWUSTARTUP OFFICIALS</h3>
            </div>
            <div class="col-md-3 col-sm-3 wow bounceInLeft" ng-repeat="array in arrayData">
                <div class="imgteam panel panel-default">
                    <img ng-src='{{array.image}}' alt="p1"/>
                    <h4 id="name">{{array.name}}</h4>
                    <h5>{{array.title}}</h5>
                    <p>{{array.description}}</p>
                </div>
            </div>
        </div>
    </div>
</section>