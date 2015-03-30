<secti
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>

                <h3 class="section-subheading text-muted">If you have any questions or ideas contact us below</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" id="name" required
                                       data-validation-required-message="Please enter your name.">

                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" id="email" required
                                       data-validation-required-message="Please enter your email address.">

                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required
                                       data-validation-required-message="Please enter your phone number.">

                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" id="message" required
                                          data-validation-required-message="Please enter a message."></textarea>

                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-4 wow bounceInLeft">
            <br>

            <p class="mail"><i class="fa fa-map-marker"></i> &nbsp; Central Washington University, Ellensburg, WA</p>
            <!--                <p class="mail"><i class="fa fa-phone-square"></i>&nbsp; </p>-->
        </div>
    </div>
    <!--    Map goes here width="425" height="350"-->
    <div class="fluid-wrapper" id="map-canvas">

    </div>
</section>
