<?php include("header.php"); ?>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
	 <div class=" mt-4 mb-4" style="background:#f9f9f9">
	 
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="contact-form">
                                
                                <h2>Book Appointment</h2>

                                <form id="contactForm">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                               
												<select class="form-control">
													<option>Select Deparment</option>
													<option>Laser Root Canal</option>
													<option>Dental Implants</option>
													<option>Crowns And Caps</option>
													<option>Braces And Aligners</option>
												</select>
                                                
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label><i class="flaticon-user"></i></label>
                                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="YOUR PATIENT NAME">
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
                                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="AGE">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label><i class="flaticon-list"></i></label>
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="ADDRESS"></textarea>
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
                </div>
            </div>
        </div>
       
      
<?php include("footer.php"); ?>