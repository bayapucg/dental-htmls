     <style>  
	 .twentytwenty-container img {
    max-width: 100%;
    position: relative;
    top: 0;
    display: block;
}
     </style>  
	   <div class="home-slides owl-carousel owl-theme">
            <?php if(isset($banners_list) && count($banners_list)>0){?>
           <?php  foreach($banners_list as $list ){?>
            <div class="main-banner"style="background-image: url(<?php echo base_url('assets/banners/'.$list['image']); ?>);">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="main-banner-content">
                                <span class="sub-title"><?php echo isset($list['title'])?$list['title']:'' ?></span>
                                <h1><?php echo isset($list['heading'])?$list['heading']:'' ?></h1>
                                <p><?php echo isset($list['description'])?$list['description']:'' ?></p>
                                <!--<div class="btn-box">
                                    <a href="#" class="btn btn-primary">Contact Us <i class="flaticon-next"></i></a>

                                    <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube">Watch Now <span><i class="flaticon-play-button"></i></span></a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		   <?php }?>
			 <?php }?>
			
        </div>
		
        <!-- End Main Banner Area -->

        <!-- Start Free Consultation Area -->
        <section class="free-consultation-area">
            <div class="container">
                <div class="free-consultation-content">
                    <span class="sub-title">Free Consultation</span>
                    <h2>Get the right Dentist Book your Doctor</h2>


                    <form id="add_group" method="post" action="<?php echo base_url('bookappointment/post'); ?>">
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
                                               <label><i class="flaticon-user"></i></label>
												<select  class="form-control"  name="services" id="services" required>
												
													<option value="">Select Services</option>
													<?php if(isset($services_list) && count($services_list)>0){ ?>
											<?php foreach($services_list as $list){ ?>
												<option value="<?php echo $list['services_name']; ?>"><?php echo $list['services_name']; ?></option>
												
											<?php } ?>
										<?php } ?>
												</select>
                                                <div class="help-block with-errors"></div>
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
                                                <input type="text" name="phone_number" id="phone_number" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required data-error="Please enter your number" class="form-control" placeholder="YOUR PHONE">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label><i class="flaticon-customer-support"></i></label>
                                                <input type="number" name="age" id="age" class="form-control" required data-error="Please enter your age" placeholder="AGE">
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
                                            <button type="submit" class="btn btn-primary">Make Your Appointment<i class="fas fa-paper-plane"></i></button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>

                    




                    
					
					
                </div>
            </div>
        </section>
		
		
		
        <!-- End Free Consultation Area -->

         <!-- Start About Area -->
	<?php if(isset($aboutus_list) && count($aboutus_list)>0){?>

        <section class="about-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
				<?php foreach($aboutus_list as $list){ ?>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-twentytwenty-image">
						
                            <div class="twentytwenty-container">
                                <img src="<?php echo base_url('assets/aboutus/'.$list['pic']); ?>" alt="">
                              <img src="<?php echo base_url('assets/aboutus/'.$list['image']); ?>" alt="">
                           
						   </div>
						
                            <div class="text">
                                <p><span><?php echo isset($list['years_experience'])?$list['years_experience']:'' ?></span> Years Experience</p>
                            </div>
						
                        </div>
                    </div>
<?php }?>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-content">
						<?php foreach($aboutus_list as $list){ ?>
                            <span class="sub-title"><?php echo isset($list['title'])?$list['title']:'' ?></span>
                            <h2><?php echo isset($list['heading'])?$list['heading']:'' ?></h2>
                            <p><?php echo isset($list['description'])?$list['description']:'' ?></p>

                            <ul class="features-list">
							<?php foreach($aboutus_list as $list){ ?>
								<?php if(isset($list['aboutus_type_list']) && count($list['aboutus_type_list'])>0){?>

							<?php foreach($list['aboutus_type_list'] as $lis){ ?>

                                <li><span><i class="fas fa-check"></i><?php echo isset($lis['type'])?$lis['type']:'' ?></span></li>
                                <?php }?>
								 <?php }?>
								   <?php }?>
                            </ul>

                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
			
        </section>
        <!-- End About Area -->
<?php }?>


       <?php if(isset($facts_list) && count($facts_list)>0){?>

        <!-- Start FunFacts Area -->
        <section class="funfacts-area ptb-100 bg-043d72">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="funfacts-content">
                            <span class="sub-title">Fun Facts</span>
                            <h2>Learn More About Our Success Stories</h2>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6 col-sm-3">
                                <div class="single-funfacts">
                                    <h3><span class="odometer" data-count="<?php echo isset($facts_list['happy_clients'])?$facts_list['happy_clients']:'' ?>">00</span><sup>+</sup></h3>
                                    <p>Happy Clients</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-6 col-sm-3">
                                <div class="single-funfacts">
                                    <h3><span class="odometer" data-count="<?php echo isset($facts_list['experts_doctors'])?$facts_list['experts_doctors']:'' ?>">00</span><sup>+</sup></h3>
                                    <p>Experts Doctors</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-6 col-sm-3">
                                <div class="single-funfacts">
                                    <h3><span class="odometer" data-count="<?php echo isset($facts_list['quality_work'])?$facts_list['quality_work']:'' ?>">00</span><sup>+</sup></h3>
                                    <p>Quality Work</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-6 col-sm-3">
                                <div class="single-funfacts">
                                    <h3><span class="odometer" data-count="<?php echo isset($facts_list['award_winners'])?$facts_list['award_winners']:'' ?>">00</span><sup>+</sup></h3>
                                    <p>Award Winners</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<?php }?>
		

        <!-- Start Services Area -->
        <section class="services-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="services-title-content">
                            <span class="sub-title">Services</span>
                            <h2>What We Offer for You to Our Patients to solve Cure</h2>
                         

                            <ul class="features-list">
                                <li><i class="fas fa-check"></i> Scientific Skills For getting a better result</li>
                                <li><i class="fas fa-check"></i> Communication Skills to getting in touch</li>
                                <li><i class="fas fa-check"></i> A Career Overview opportunity Available</li>
                            </ul>

                            <!--<a href="#" class="btn btn-primary">Learn More <i class="flaticon-next"></i></a>-->
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="row m-0">
                            

                            
							<?php if(isset($services_details)&& count($services_details)>0){?>
                             <?php foreach($services_details as $list){?>
                            <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                                <div class="single-services-box">
                                    <h3><i class="flaticon-tooth-1 color-043d72"></i> <?php echo isset($list['services_name'])?$list['services_name']:'' ?></h3>
                                    <br>
									<p> <?php echo substr (isset($list['text'])?$list['text']:'', 0, 100) ?></p>
                                    <a href="<?php echo base_url('services/name/'.base64_encode($list['s_id'])); ?>" class="read-more-btn">Read More <i class="flaticon-next"></i></a>
                                </div>
                            </div>
							 <?php }?>
                             <?php }?><?php if(isset($services_details)&& count($services_details)>0){?>
                             <?php foreach($services_details as $list){?>
                            <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                                <div class="single-services-box">
                                    <h3><i class="flaticon-tooth-1 color-043d72"></i> <?php echo isset($list['services_name'])?$list['services_name']:'' ?></h3>
                                    <br>
									<p> <?php echo substr (isset($list['text'])?$list['text']:'', 0, 100) ?></p>
                                    <a href="<?php echo base_url('services/name/'.base64_encode($list['s_id'])); ?>" class="read-more-btn">Read More <i class="flaticon-next"></i></a>
                                </div>
                            </div>
							 <?php }?>
                             <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Area -->
       <?php if(isset($homepage_list) && count($homepage_list)>0){?>

        <!-- Start Why Choose Us Area -->
        <section class="why-choose-us-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="why-choose-us-content">
                            <div class="content">
							<?php foreach($homepage_list as $list){ ?>
                                <span class="sub-title"><?php echo isset($list['title'])?$list['title']:'' ?></span>
                                <h2><?php echo isset($list['heading'])?$list['heading']:'' ?></h2>
                                <p><?php echo isset($list['description'])?$list['description']:'' ?></p>

                                <ul class="features-list">
								
                                  <?php foreach($homepage_list as $list){ ?>
								<?php if(isset($list['homepage_type_list']) && count($list['homepage_type_list'])>0){?>

							<?php foreach($list['homepage_type_list'] as $lis){ ?>
                                 
								 
								 <li>
                                        <div>
                                            <i class="flaticon-laboratory"></i>
                                            <span><?php echo isset($lis['type'])?$lis['type']:'' ?></span>
                                        </div>
                                    </li>
								  <?php }?>
								 <?php }?>
								   <?php }?>
								 
 
                                </ul>
								
								<?php }?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="divider"></div>
                        <div class="why-choose-us-slides owl-carousel owl-theme">
						<?php foreach($homepage_list as $list){ ?>
                            <div class="why-choose-us-image" style="background-image: url(<?php echo base_url('assets/homepage_images/'.$list['image']); ?>);">
                                <img src="<?php echo base_url('assets/homepage_images/'.$list['image']); ?>" alt="image">
                            </div>
                          <?php }?>
                           

                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Why Choose Us Area -->
<?php }?>
       <!-- Start Doctor Area -->
	          <?php if(isset($doctors_list) && count($doctors_list)>0){?>

        <section class="doctor-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Our Doctors</span>
                    <h2>Meet Our Qualified Doctors To Get Support</h2>
                </div>

                <div class="doctor-slides owl-carousel owl-theme">
                    <?php foreach($doctors_list as $list){ ?>
                    <div class="single-doctor-box">
                        <div class="image">
                            <img src="<?php echo base_url('assets/doctors/'.$list['image']); ?>" alt="image">
                        </div>
                        <div class="content">
                            <h3><?php echo isset($list['name'])?$list['name']:'' ?></h3>
                            <span><?php echo isset($list['designation'])?$list['designation']:'' ?></span>

                            
                        </div>
                    </div>
					<?php } ?>
					
                </div>
            </div>
        </section>
        <!-- End Doctor Area -->
<?php } ?>

        <section class="cta-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="cta-content">
                    <div class="icon">
                        <i class="flaticon-business-and-finance"></i>
                    </div>
                    <h2>Emergency Medical Care </h2>
                    <p>With access  emergency assistance, It’s so important you can continue to help others.</p>
                    <a href="#" class="call-us"><i class="flaticon-phone-call"></i>&nbsp;<?php echo isset($contact_list['mobile_number'])?$contact_list['mobile_number']:''?>&nbsp;,&nbsp;<?php echo isset($contact_list['alert_mobile_number'])?$contact_list['alert_mobile_number']:''?></a>
                </div>
            </div>
        </section>
        <!-- End CTA Area -->
       
  <?php if(isset($testimonial_list) && count($testimonial_list)>0){?>
        <!-- Start Feedback Area -->
        <section class="feedback-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Feedback</span>
                    <h2>What Customer Saying About us</h2>
                </div>

                <div class="feedback-slides owl-carousel owl-theme">
                    <?php foreach($testimonial_list as $list){?>
					<div class="single-feedback-item">
                        <p><?php echo isset($list['paragraph'])?$list['paragraph']:''?></p>

                        <div class="client-info">
                            <h4><?php echo isset($list['name'])?$list['name']:''?></h4>
                            <span><?php echo isset($list['designation'])?$list['designation']:''?></span>
                        </div>
                    </div>
					<?php }?>
                    
                    
                </div>
            </div>
        </section>
       <?php }?>
       

        <!-- Start Subscribe Area -->
        <div class="subscribe-area m-4">
            <div class="container">
                <div class="subscribe-inner">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-12">
                            <div class="subscribe-content">
                                <h2>Join Our Newsletter</h2>
                               
                            </div>
                        </div>
        
                        <div class="col-lg-7 col-md-12">
                            <div class="subscribe-form">
                                <form  id="" method="post"  action="<?php echo base_url('home/subscribe');?>" class="" >
                                    <input type="email" class="input-newsletter" placeholder="Enter your email address" name="email" required autocomplete="off">
        
                                    <button type="submit">Subscribe Now <i class="flaticon-next"></i></button>
                                    <div id="validator-newsletter" class="form-result"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <script>
    $(document).ready(function() {
    $('#add_group').bootstrapValidator({

        fields: {
				
			 services: {
                validators: {
                    notEmpty: {
                        message: ' Description is required ' 
                    }
                }
            },
			'name[]': {
                validators: {
                    notEmpty: {
                        message: ' Name is required ' 
                    }
                }
            },
			'designation[]': {
                validators: {
                    notEmpty: {
                        message: ' Designation is required ' 
                    }
                }
            },
            'image[]': {
                    validators: {
						notEmpty: {
                        message: ' Image is required ' 
                    },
                        regexp: {
                            regexp: "(.*?)\.(png|jpeg|jpg|gif|Png)$",
                            message: 'Uploaded file is not a valid. Only png,jpeg,jpg,gif files are allowed'
                        }
                    }
                },
			 
			
            }
        })

    });
</script>