 <!-- Start Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="logo">
                                <a href="#"><img src="<?php echo base_url(); ?>assets/img/footer-logo.png" alt="image"></a>

                                <p>We believe that everyone can have a healthy smile for life and with our help it’s easier than you think! We are passionate about helping patients to live better quality lives thanks to good oral health.</p>
                            </div>

                            <ul class="social">
                               <li><a  target="_blank" href="<?php echo isset($contact_list['facebook_link'])?$contact_list['facebook_link']:'' ?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a target="_blank" href="<?php echo isset($contact_list['twitter_link'])?$contact_list['twitter_link']:'' ?>"><i class="fab fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="<?php echo isset($contact_list['linkedIn_link'])?$contact_list['linkedIn_link']:'' ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a target="_blank" href="<?php echo isset($contact_list['instagram_link'])?$contact_list['instagram_link']:'' ?>"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Quick Links</h3>

                            <ul class="footer-quick-links">
                                <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="<?php echo base_url('aboutus'); ?>">About Us</a></li>
                                
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="<?php echo base_url('gallery'); ?>">Our Gallery</a></li>
                                <li><a href="<?php echo base_url('contact'); ?>">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-sm-3 offset-md-3">
                        <div class="single-footer-widget">
                            <h3>Contact Info</h3>

                            <ul class="footer-contact-info">
                                <li><span><?php echo isset($contact_list['location'])?$contact_list['location']:''?></span></li>
                                <li><span>Email:</span><?php echo isset($contact_list['email_address'])?$contact_list['email_address']:''?>&nbsp;,&nbsp;<?php echo isset($contact_list['alert_email_address'])?$contact_list['alert_email_address']:''?></li>
                                <li><span>Phone:</span> <?php echo isset($contact_list['mobile_number'])?$contact_list['mobile_number']:''?>&nbsp;,&nbsp;<?php echo isset($contact_list['alert_mobile_number'])?$contact_list['alert_mobile_number']:''?></li>
                                
                                <li><a href="https://goo.gl/maps/hxf7gpcS2qXUgwBx7" target="_blank">View Location on GoogleMap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                
            </div>
        </footer>
        <!-- End Footer Area -->

        <div class="go-top"><i class="fas fa-chevron-up"></i><i class="fas fa-chevron-up"></i></div>
        
        <!-- jQuery Min JS -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <!-- Popper Min JS -->
        <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <!-- Parallax Min JS -->
        <script src="<?php echo base_url(); ?>assets/js/parallax.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
        <!-- Slick Min JS -->
        <script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
        <!-- MeanMenu JS -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.meanmenu.js"></script>
        <!-- Appear Min JS -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.appear.min.js"></script>
        <!-- Odometer Min JS -->
        <script src="<?php echo base_url(); ?>assets/js/odometer.min.js"></script>
        <!-- Event Move Min JS -->
        <script src="<?php echo base_url(); ?>assets/js/event.move.min.js"></script>
        <!-- TwentyTwenty Min JS -->
        <script src="<?php echo base_url(); ?>assets/js/twentytwenty.min.js"></script>
        <!-- Nice Select Min JS -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
        <!-- Magnific Popup Min JS -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
        <!-- WOW Min JS -->
        <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
        <!-- AjaxChimp Min JS -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="<?php echo base_url(); ?>assets/js/form-validator.min.js"></script>
        <!-- Contact Form Min JS -->
        <script src="<?php echo base_url(); ?>assets/js/contact-form-script.js"></script>

        <!-- Main JS -->
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    </body>
</html>