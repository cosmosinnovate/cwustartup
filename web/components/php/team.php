<!--<section id="team" ng-controller="Team">-->
<!--    <div class="container">-->
<!--        <div class="row headingTop">-->
<!--            <div class="col-lg-12 text-center">-->
<!--                <h3>Our Amazing Team</h3>-->
<!--                <h4></h4>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row" >-->
<!--            <div class="team-member col-md-3 col-sm-3 wow" ng-repeat="array in arrayData">-->
<!--                    <img class="img-responsive img-circle" ng-src="{{array.image}}" alt="p1"/>-->
<!--                    <div class="team-member panel panel-default">-->
<!--                        <div class="panel-heading">-->
<!--                            <h4 id="name">{{array.name}}</h4>-->
<!--                            <h5>{{array.title}}</h5>-->
<!--                        </div>-->
<!--                        <div class="panel-body">-->
<!--                            <p>{{array.description}}</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    </div>-->
<!--</section>-->

<!-- Team Section-->
<section id="team" class="bg-light-gray" ng-controller="Team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Amazing Team</h2>

                <h3 class="section-subheading text-muted">The people who make cwu startup be cwu startup.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 " ng-repeat="array in arrayData">
                <div class="team-member">
                    <img class="img-responsive img-circle" ng-src='{{array.image}}' alt="p1"/>

                    <div class="team-member panel panel-default">
                        <div class="panel-heading">
                            <h4 id="name">{{array.name}}</h4>
                            <h5>{{array.title}}</h5>
                        </div>
                        <div class="panel-body">
                            <p>{{array.description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
