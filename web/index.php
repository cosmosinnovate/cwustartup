<?php require_once 'layout/header.php'; ?>

<body>
	<div id="page">
      <div class="site-navbar navbar navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="Logo"></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#main">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Mobile Apps</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="#blog">Login | resgister</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
          <!-- .nav-collapse -->
        </div>
      </div>
      <main id="main" class="site-main">
        <!-- Carousel -->
        <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators wow fadeInUp">
            <li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>
            <li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-captions" data-slide-to="2" class="active"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item">
              <img class="wow pulse" data-wow-duration="3s" alt="1" src="images/bg-1.jpg" alt="bg-1">
              <div class="carousel-caption">
                <h3 class="wow bounceInLeft" data-wow-duration="2s">Personalize the menu!</h3>
                <span class="wow bounceInRight" data-wow-duration="2s">You will use your device to make orders</span>
              </div>
            </div>
            <div class="item">
              <img class="wow pulse" data-wow-duration="3s" alt="2" src="images/bg-2.jpg" alt="bg-2">
              <div class="carousel-caption">
                <h3 class="wow bounceInLeft" data-wow-duration="2s">Learn more about the food and save time!</h3>
                <span class="wow bounceInRight" data-wow-duration="2s">This feature lets you make your own decision before going out to dine</span>
              </div>
            </div>
            <div class="item active">
              <img class="wow pulse" data-wow-duration="3s" alt="3" src="images/bg-3.jpg" alt="bg-3">
              <div class="carousel-caption">
                <h3 class="wow bounceInLeft" data-wow-duration="2s">Interact with Restaurant's menu on your device!</h3>
                <span class="wow bounceInRight" data-wow-duration="2s">Restaurants provides you with exclusive deals</span>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
          <span class="fa fa-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
          <span class="fa fa-chevron-right"></span>
          </a>
        </div>
        <!-- ABOUT -->
        <section id="about">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h3>About</h3>
              </div>
              <div class="col-md-6 col-sm-6 wow bounceInLeft">
                <p>What'sonplate is a platform designed to personalize your dining experience on your own device.</p>
                <p>You are new to a restaurant and you don't know what to order right? And when you finally make up your mind, 
                you have to wait countless minutes until service arrives to place your order! 
                </p>
                <p>Here is the good news! What'sonplate is built with the intentions to make ordering food simple.
               </p>
              </div>
              <div class="col-md-6 col-sm-6 wow bounceInRight">
                <p> Imagine knowing exactly what is on the menu or what you're going to order before even sitting down. </p>
                <p> We created a platform to make your dining experience pleasant and simple as possible</p>
                
                <p class="icon-about">
                  <a href="https://www.facebook.com/pages/Whatsonplatecom/290213461133438"><i class="fa fa-facebook-square"></i></a>
                  <a href="#"><i class="fa fa-twitter-square"></i></a>
                  <a href="#"><i class="fa fa-google-plus-square"></i></a>
                  <a href="#"><i class="fa fa-pinterest-square"></i></a>                           
                </p>
                
              </div>
            </div>
            </div>
          </div>
        </section>
        <!-- SERVICES -->
        <section id="services">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h3>Our Services</h3>
              </div>
               <div class="col-md-6 col-sm-6 wow bounceInLeft">
               <p><span><i class="fa fa-desktop"></i></span></p>
                <h4>Restaurants</h4>
               <p>We provide restaurants customers' suggestions to help the restaurant take customers' suggestions seriously.
               </p>
             </div>
           <div class="col-md-6 col-sm-6 wow bounceInUp">
             <p><span><i class="fa fa-mobile"></i></span></p>
               <h4>Application</h4>
                 <p>Our application informs customers of the menus, subsequently improving customer satisfaction and increse customer base for the restaurants.
               </p
                 </div>
             <!-- <div class="col-md-4 col-sm-4 wow bounceInRight">
                <p><span><i class="fa fa-thumbs-up"></i></span></p>
              </div>-->
            </div>
          </div>
        </section>
        <!-- portfolio -->
        <section id="portfolio">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h3>Available for</h3>
              </div>
              <div class="col-md-4 col-sm-4 wow bounceInLeft">
                <div class="imgport" data-toggle="modal" data-target="#modal-login">
                  <span class="wow fadeInDown">view</span>
                  <img src="images/1.jpg" alt="1">
                </div>
                <h4>Android</h4>
                <p></p>
              </div>
              <div class="col-md-4 col-sm-4 wow bounceInUp">
                <div class="imgport" data-toggle="modal" data-target="#modal-login">
                  <span class="wow fadeInDown">view</span>
                  <img src="images/2.jpg" alt="2">
                </div>
                <h4>iPhone</h4>
                <p></p>
              </div>
              <div class="col-md-4 col-sm-4 wow bounceInRight">
                <div class="imgport" data-toggle="modal" data-target="#modal-login">
                  <span class="wow fadeInDown">view</span>
                  <img src="images/3.jpg" alt="3">
                </div>
                <h4>Windows Phone</h4>
                <p></p>
              </div>
            </div>
          </div>
        </section>
        <!-- team -->
        <section id="team">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h3>Solid Team</h3>
              </div>
              <div class="col-md-3 col-sm-3 wow bounceInLeft">
                <div class="imgteam">
                  <ul class="wow fadeInUp">
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                  </ul>
                  <img src="images/p1.jpg" alt="p1">
                </div>
                <h4>Taban Cosmos</h4>
                      <p></p>
                    </div>
                    <div class="col-md-3 col-sm-3 wow bounceInLeft">
                      <div class="imgteam">
                        <ul class="wow fadeInUp">
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                        </ul>
                        <img src="images/p2.jpg" alt="p2">
                      </div>
                      <h4>Osmond Gunarso</h4>
                      <p></p>
                    </div>
                    <div class="col-md-3 col-sm-3 wow bounceInRight">
                      <div class="imgteam">
                        <ul class="wow fadeInUp">
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                        </ul>
                        <img src="images/p3.jpg" alt="p3">
                      </div>
                      <h4>Harsha Ravula</h4>
                      <p></p>
                    </div>
                    <div class="col-md-3 col-sm-3 wow bounceInRight">
                      <div class="imgteam">
                        <ul class="wow fadeInUp">
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                        </ul>
                        <img src="images/p4.jpg" alt="p4">
                      </div>
                      <h4>John Quicksall</h4>
                      <p></p>
                    </div>
                    <div class="col-md-3 col-sm-3 wow bounceInRight">
                      <div class="imgteam">
                        <ul class="wow fadeInUp">
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                        </ul>
                        <img src="images/p5.jpg" alt="p5">
                      </div>
                      <h4>Sahith Nareddy</h4>
                      <p></p>
                    </div>
                  </div>
                </div>        
          </section>
        <!-- Blog Posts -->
        <section id="blog">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h3>Login or Register</h3>
              </div>
              <div class="col-md-6 col-sm-6 wow bounceInLeft">
                <p>Under development</p>
                <h5>User your Facebook to signup</h5>
                <div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false"></div>
                 
                
              </div>
              <div class="col-md-6 col-sm-6 wow bounceInRight">
                <ul>
                  <li>
                   <p>Be among the first ones to get the app directly to you! </p>
                    <h5>Use your own email</h5>
                    <form role="form">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section id="contact">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h3>Contact</h3>
              </div>
            </div>
          </div>
          <div class="fluid-wrapper">
            <!-- IFRAME MAPS -->
            <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=-122.42305755615234%2C47.558920607496525%2C-122.19097137451172%2C47.68942806015855&amp;layer=mapnik&amp;marker=47.62421506209668%2C-122.30701446533202" style="border: 1px solid black"></iframe><br/><small><a href="http://www.openstreetmap.org/?mlat=47.6242&amp;mlon=-122.3070#map=12/47.6242/-122.3070">View Larger Map</a></small>
               </div>
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-4 wow bounceInLeft">
                <br>
                <p class="mail"> <i class="fa fa-map-marker"></i> &nbsp; Seattle WA</p>
                <p class="mail"> <i class="fa fa-phone-square"></i>&nbsp; 425 209 8052</p>
              </div>
              <div class="col-md-8 col-sm-8 wow bounceInRight">
                <form role="form" class="frm" method="post" action="contactus.php">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Name">Name *</label>
                      <input type="text" class="form-control" name="Name" id="Name" placeholder="Enter name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Email">Email *</label>
                      <input type="email" class="form-control" Name="Email" id="Email" placeholder="Enter email">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="Message">Messages *</label>
                      <textarea name="Message" id="Message" class="form-control" rows="3" placeholder="Enter messages"></textarea>
                    </div>
                    <input type="submit" name="submit" value="Send Message" class="btn btn-primary btn-lg btn-block btn-biru" />                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </main>
      
 <?php require_once 'layout/footer.php'; ?>