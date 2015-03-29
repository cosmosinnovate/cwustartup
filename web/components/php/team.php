<section id="team" ng-controller="Team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">The people who make cwu startup be cwu startup.</h3>
            </div>
        </div>
        <div class="row">
            <div class="team-member ng-repeat="array in arrayData">
                <div class="imgteam">
                    <img class="img-responsive img-circle" ng-src='{{array.image}}' alt="p1"/>
                    <h4 id="name">{{array.name}}</h4>
                    <h5>{{array.title}}</h5>
                    <p>{{array.description}}</p>
                </div>
            </div>
        </div>
    </div>
</section>