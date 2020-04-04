<?php include("header.php"); ?>
	 <div class="page-title-area page-title-bg2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Contact</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact Info Area -->
        <section class="contact-info-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="flaticon-pin"></i>
                            </div>

                            <h3>Location</h3>
                            <span>20-06-24, Anjaiah Rd, Pandaripuram, Ongole, Andhra Pradesh 523001</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="flaticon-phone-call"></i>
                            </div>

                            <h3>Phone Number</h3>
                            <span>Mobile: 08592 - 283456 </span>
                            <span>Phone: +91 9493008505</span>
							<br>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>

                            <h3>Email Address</h3>
                            <span><a href="#">info@vdentist.com</a></span>
                            <span><a href="#">support@vdentist.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Contact Info Area -->

        <!-- Start Contact Area -->
        <section class="contact-area ptb-100">
            <div class="container">
                <div class="contact-inner">
                    <div class="row m-0">
                        <div class="col-lg-7 col-md-12 p-0">
                            <div class="contact-form">
                                <span class="sub-title">Message Us</span>
                                <h2>Drop us Message for any Query</h2>

                                <form id="contactForm">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label><i class="flaticon-user"></i></label>
                                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="YOUR NAME">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label><i class="flaticon-email"></i></label>
                                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="YOUR EMAIL">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label><i class="flaticon-phone-call"></i></label>
                                                <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="YOUR PHONE">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label><i class="flaticon-customer-support"></i></label>
                                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="YOUR SUBJECT">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label><i class="flaticon-list"></i></label>
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="YOUR MESSAGE"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="btn btn-primary">Send Message <i class="fas fa-paper-plane"></i></button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-12 p-0">
                            <div>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d480.56364190548425!2d80.03712702299858!3d15.510813564814462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4b01ed972890c9%3A0x7c9d854b4f041e76!2sV%20DENTIST%20SUPER%20SPECIALITITY%20DENTAL%20HOSPITAL!5e0!3m2!1sen!2sin!4v1585055959778!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-map"><img src="assets/img/bg-map.png" alt="image"></div>
        </section>
<?php include("footer.php"); ?>