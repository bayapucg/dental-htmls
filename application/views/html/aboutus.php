	<div class="page-title-area page-title-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>About Us</h2>
                            <ul>
                                <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->


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
		
        <section class="cta-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="cta-content">
                    <div class="icon">
                        <i class="flaticon-business-and-finance"></i>
                    </div>
                    <h2>Emergency Medical Care 24/7</h2>
                    <p>With access to 24 hour emergency assistance, It’s so important you can continue to help others.</p>
                    <a href="#" class="call-us"><i class="flaticon-phone-call"></i>&nbsp;<?php echo isset($contact_list['mobile_number'])?$contact_list['mobile_number']:''?>&nbsp;,&nbsp;<?php echo isset($contact_list['alert_mobile_number'])?$contact_list['alert_mobile_number']:''?></a>
                </div>
            </div>
        </section>
		
		
		
		<?php if(isset($testimonial_list) && count($testimonial_list)>0){?>
		 <!-- Start Testimonial Area -->
        <section class="testimonial-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Our Feedback</span>
                    <h2>What client says about us</h2>
                </div>

                <div class="testimonial-slides">
					<div class="client-feedback">
						<div>
							
							<?php foreach($testimonial_list as $list){?>
							<div class="item">
								<div class="single-feedback">
									<p><?php echo isset($list['paragraph'])?$list['paragraph']:'' ?></p>
								</div>
							</div>
							<?php }?>
							
							
							
							
							
							
							
                        </div>
                        
                        <button class="prev-arrow slick-arrow">
                            <i class='flaticon-back'></i>
                        </button>
                        
                        <button class="next-arrow slick-arrow">
                            <i class='flaticon-next-1'></i>
                        </button>
                    </div>
                    
                    <div class="client-thumbnails">
						<div>
						<?php foreach($testimonial_list as $list){?>
							<div class="item">
                                <div class="img-fill"><img src="<?php echo base_url('assets/testimonial/'.$list['image']); ?>" alt="client"></div>
                                
                                <div class="title">
                                    <h3><?php echo isset($list['name'])?$list['name']:'' ?></h3>
                                    <span><?php echo isset($list['designation'])?$list['designation']:'' ?></span>
                                </div>
							</div>
							<?php }?>
							
							
                            
						</div>
                    </div>
				</div>
            </div>
        </section>
		
        <?php }?>
