
<?php require_once 'components/php/header.php'; ?>

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
        <?php include_once'components/php/team.php'; ?>
        <!-- Blog Posts -->
        <?php include_once'components/php/blogpost.php'; ?>
        <?php include_once'components/php/contact.php'; ?>
      </main>
      
 <?php require_once 'components/php/footer.php'; ?>

?>
