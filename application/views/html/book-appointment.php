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

                                <form id="" method="post" action="<?php echo base_url('bookappointment/post'); ?>">
                                    <div class="row">
                                        
										<div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label><i class="flaticon-user"></i></label>
                                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="YOUR PATIENT NAME">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                            <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                               
												<select class="form-control" name="services" required>
												
													<option value="">Select Services</option>
													<?php if(isset($services_list) && count($services_list)>0){ ?>
											<?php foreach($services_list as $list){ ?>
												<option value="<?php echo $list['services_name']; ?>"><?php echo $list['services_name']; ?></option>
												
											<?php } ?>
										<?php } ?>
												</select>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label><i class="flaticon-user"></i></label>
                                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="YOUR  EMAIL">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label><i class="flaticon-phone-call"></i></label>
                                                <input type="text" name="phone_number" id="phone_number" pattern="[1-9]{1}[0-9]{9}" maxlength="10"  required data-error="Please enter your number" class="form-control" placeholder="YOUR PHONE">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label><i class="flaticon-customer-support"></i></label>
                                                <input type="number" name="age" id="age" class="form-control"  required data-error="Please enter your age" placeholder="AGE">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label><i class="flaticon-list"></i></label>
                                                <textarea name="address" class="form-control" id="address" cols="30" rows="6" required data-error="Write your message" placeholder="ADDRESS"></textarea>
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
       
      
