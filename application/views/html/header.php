<!doctype html>
<html>
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/bootstrap.min.css">
		    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/bootstrapValidator.min.css">

        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">
        <!-- FontAwesome Min CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome.min.css">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
        <!-- MeanMenu CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/meanmenu.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flaticon.css">
        <!-- Magnific Popup Min CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.min.css">
        <!-- Odometer Min CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/odometer.min.css">
        <!-- TwentyTwenty Min CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/twentytwenty.min.css">
        <!-- Slick Min CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.min.css">
        <!-- Nice Select Min CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nice-select.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
     <link href="<?php echo base_url(); ?>assets/vendor/css/custom.css" rel="stylesheet" type="text/css" /> 

        <title>V Dentist | Super Speciality Dental Hospital</title>

        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
    </head>
<?php if($this->session->flashdata('success')): ?>
				<div class="alert_msg1 animated slideInUp bg-succ">
				<?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
			<?php if($this->session->flashdata('error')): ?>
				<div class="alert_msg1 animated slideInUp bg-warn">
				<?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-warning ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Header Area -->
        <header class="header-area">

            <!-- Start Top Header -->
            <div class="top-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12">
                            <ul class="header-contact-info">
                                <li><i class="far fa-clock"></i><?php echo isset($contact_list['timing'])?$contact_list['timing']:''?></li>
                                <li><i class="fas fa-phone"></i> <a href="#">+91 <?php echo isset($contact_list['mobile_number'])?$contact_list['mobile_number']:''?></a></li>
                                <li><i class="far fa-paper-plane"></i> <a href="#"><?php echo isset($contact_list['email_address'])?$contact_list['email_address']:''?></a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="header-right-content">
                                <ul class="top-header-social">
                                    <li><a target="_blank" href="<?php echo isset($contact_list['facebook_link'])?$contact_list['facebook_link']:'' ?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a target="_blank" href="<?php echo isset($contact_list['twitter_link'])?$contact_list['twitter_link']:'' ?>"><i class="fab fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="<?php echo isset($contact_list['linkedIn_link'])?$contact_list['linkedIn_link']:'' ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a target="_blank" href="<?php echo isset($contact_list['instagram_link'])?$contact_list['instagram_link']:'' ?>"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Header -->

            <!-- Start Navbar Area -->
            <div class="navbar-area">
               <div class="v-responsive-nav">
                    <div class="container">
                        <div class="v-responsive-menu">
                            <div class="logo">
                                <a href="<?php echo base_url(''); ?>">
                                    <img src="<?php echo base_url(); ?>assets/img/white-logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="v-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="<?php echo base_url(''); ?>">
                                <img src="<?php echo base_url(); ?>assets/img/white-logo.png" alt="logo">
                            </a>

                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a href="<?php echo base_url('home'); ?>" class="nav-link <?php if($this->uri->segment(1)=='home'){ echo "active";} ?>">Home </a>
                                      
                                    </li>

                                    <li class="nav-item"><a href="<?php echo base_url('aboutus'); ?>" class="nav-link <?php if($this->uri->segment(1)=='aboutus'){ echo "active";} ?>">About Us</a>
                                       
                                    </li>

                                    <li class="nav-item"><a href="#" class="nav-link <?php if($this->uri->segment(1)=='services'){ echo "active";} ?>">Services <i class="fas fa-chevron-down"></i></a>
									<ul class="dropdown-menu">
	                        <?php if(isset($services_list) && count($services_list)>0){?>
									<?php foreach($services_list as $list){?>
									<li class="nav-item"><a href="<?php echo base_url('services/name/'.base64_encode($list['s_id'])); ?>" class="nav-link"><?php echo isset($list['services_name'])?$list['services_name']:''?></a></li>
									<?php }?>
									<?php }?>
								</ul>
                                        
                                    </li>

                                    <li class="nav-item"><a href="<?php echo base_url('gallery');?>" class="nav-link <?php if($this->uri->segment(1)=='gallery'){ echo "active";} ?>">Gallery</a>
                                     
                                    </li>

                                  

                                    <li class="nav-item"><a href="<?php echo base_url('contact');?>" class="nav-link <?php if($this->uri->segment(1)=='contact'){ echo "active";} ?>">Contact</a></li>
                                    <li class="nav-item"><a href="<?php echo base_url('bookappointment');?>" class="nav-link <?php if($this->uri->segment(1)=='bookappointment'){ echo "active";} ?>"><span class="badge badge-success">Book Appointment</span>
									</a></li>
                                </ul>
								 
                               
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Navbar Area -->

        </header>
        <!-- End Header Area -->
        <!-- End Header Area -->