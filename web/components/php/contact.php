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
        <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://www.openstreetmap.org/#map=12/47.0000/-120.5422"
                style="border: 1px solid black"></iframe>
        <br/>
        <small><a href="http://www.openstreetmap.org/?mlat=47.6242&amp;mlon=-122.3070#map=12/47.0000/-120.5423">View
                Larger Map</a></small>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 wow bounceInLeft">
                <br>

                <p class="mail"><i class="fa fa-map-marker"></i> &nbsp; CWU Ellensburg WA</p>

<!--                <p class="mail"><i class="fa fa-phone-square"></i>&nbsp; </p>-->
            </div>
            <div class="col-md-8 col-sm-8 wow bounceInRight">

                <!-- Form starts here -->
                <form role="form" class="form" method="post" action="contactus.php">
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
                            <textarea name="Message" id="Message" class="form-control" rows="3"
                                      placeholder="Enter messages"></textarea>
                        </div>
                        <input type="submit" name="submit" value="Send Message"
                               class="btn btn-primary btn-lg btn-block btn-biru"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>