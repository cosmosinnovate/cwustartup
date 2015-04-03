<!-- About Section -->
<section id="about" ng-controller="About">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">About</h2>
                <h3 class="main-intro">{{about}}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li ng-repeat="item in timelineItems">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" ng-src="{{item.image}}" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>{{item.heading}}</h4>
                                <h4 class="subheading">{{item.subheading}}</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                                    {{item.body}}
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Be Part
                                <br>Of Our
                                <br>Story!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
