	 <div class="page-title-area page-title-bg2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Contact</h2>
                            <ul>
                                <li><a href="<?php echo base_url('home');?>">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
	<?php if(isset($contact_list) && count($contact_list)>0){?>

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
                            <span><?php echo isset($contact_list['location'])?$contact_list['location']:''?></span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="flaticon-phone-call"></i>
                            </div>

                            <h3>Phone Number</h3>
                            <span>Mobile: <?php echo isset($contact_list['mobile_number'])?$contact_list['mobile_number']:''?></span>
                            <span>Phone: <?php echo isset($contact_list['alert_mobile_number'])?$contact_list['alert_mobile_number']:''?></span>
							<br>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="contact-info-box">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>

                            <h3>Email Address</h3>
                            <span><a href="#"><?php echo isset($contact_list['email_address'])?$contact_list['email_address']:''?></a></span>
                            <span><a href="#"><?php echo isset($contact_list['alert_email_address'])?$contact_list['alert_email_address']:''?></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	<?php }?>
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

	<form id="add_group" method="post" action="<?php echo base_url('contact/post');?>" enctype="multipart/form-data">
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
                                                <input type="text" name="phone_number" id="phone_number" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required data-error="Please enter your number" class="form-control" placeholder="YOUR PHONE">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label><i class="flaticon-customer-support"></i></label>
                                                <input type="text" name="subject" id="subject" class="form-control" required data-error="Please enter your subject" placeholder="YOUR SUBJECT">
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
            
            <div class="bg-map"><img src="<?php echo base_url();?>assets/img/bg-map.png" alt="image"></div>
        </section>
