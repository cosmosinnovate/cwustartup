<section id="team" ng-controller="Team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>CWUSTARTUP OFFICIALS</h3>
            </div>
            <div class="col-md-3 col-sm-3 wow bounceInLeft">
                <div class="imgteam" ng-repeat="member in teamMembers">
                    <img ng-src="{{memeber.image}}" alt="p1"/>
                    <h4 id="name">{{member.name}}</h4>
                    <p>{{member.description}}</p>
                </div>

            </div>
<!--            <div class="col-md-3 col-sm-3 wow bounceInRight">-->
<!--                <div class="imgteam">-->
<!--                    <img ng-src="{{image}}" alt="p1"/>-->
<!--                    <h4 id="name">{{name}}</h4>-->
<!--                    <p>{{description}}</p>-->
<!--                </div>-->
<!---->
<!--            </div>-->

            <!--            <div class="col-md-3 col-sm-3 wow bounceInLeft">-->
            <!--                <div class="imgteam">-->
            <!--                    <img src="images/p2.jpg" alt="p2">-->
            <!--                </div>-->
            <!--                <h4>Tommy Mathan</h4>-->
            <!--                    <ul class="wow fadeInUp">-->
            <!--                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
            <!--                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>-->
            <!--                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>-->
            <!--                    </ul>-->
            <!---->
            <!--                <p></p>-->
            <!--            </div>-->
        </div>
    </div>
</section>