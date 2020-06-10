<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('dashboard'); ?>"><img src="<?php echo base_url(); ?>assets/vendor/admin/img/white-logo.png" alt="Prachatech"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?php echo base_url('dashboard'); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
              
				<li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i>Gallery</a>
                    <ul class="sub-menu children dropdown-menu">
   
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('gallery/add');?>"> Add  </a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('gallery/lists');?>"> List</a></li>
                    </ul>
                </li>
				<li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i>Aboutus</a>
                    <ul class="sub-menu children dropdown-menu">
   
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('aboutus/add');?>"> Add  </a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('aboutus/lists');?>"> List</a></li>
                    </ul>
                </li>
				<li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i>Services</a>
                    <ul class="sub-menu children dropdown-menu">
   
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('services/add');?>"> Add  </a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('services/lists');?>"> List</a></li>
                    </ul>
                </li>
				
				<li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i>Banners</a>
                    <ul class="sub-menu children dropdown-menu">
   
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('banners/add');?>"> Add  </a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('banners/lists');?>"> List</a></li>
                    </ul>
                </li>
				
				<li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i>Testimonial</a>
                    <ul class="sub-menu children dropdown-menu">
   
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('testimonial/add');?>"> Add  </a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('testimonial/lists');?>"> List</a></li>
                    </ul>
                </li>
				
				<li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i>Homepage</a>
                    <ul class="sub-menu children dropdown-menu">
   
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('homepage/add');?>"> Add  </a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('homepage/lists');?>"> List</a></li>
                    </ul>
                </li>
				
				
				<li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i>Servicesname</a>
                    <ul class="sub-menu children dropdown-menu">
   
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('servicesnamewise/add');?>"> Add  </a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('servicesnamewise/lists');?>"> List</a></li>
                    </ul>
                </li>
				<li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i>Doctors</a>
                    <ul class="sub-menu children dropdown-menu">
   
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('doctors/add');?>"> Add  </a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('doctors/lists');?>"> List</a></li>
                    </ul>
                </li>
				
				 <li>
                    <a href="<?php echo base_url('facts'); ?>"> <i class="menu-icon fa fa-dashboard"></i>facts</a>
                </li>
				
				 <li>
                    <a href="<?php echo base_url('contactus'); ?>"> <i class="menu-icon fa fa-dashboard"></i>Contact Us</a>
                </li>
				<li>
                    <a href="<?php echo base_url('contact/lists'); ?>"> <i class="menu-icon fa fa-dashboard"></i>Contact List</a>
                </li>
				<li>
                    <a href="<?php echo base_url('subscribe/lists'); ?>"> <i class="menu-icon fa fa-dashboard"></i>Subscribe List</a>
                </li>
				
				<li>
                    <a href="<?php echo base_url('bookappointment/lists'); ?>"> <i class="menu-icon fa fa-dashboard"></i>bookappointment List</a>
                </li>
				
				<li>
                    <a href="<?php echo base_url('dashboard/logout'); ?>"> <i class="menu-icon fa fa-dashboard"></i>Logout</a>
                </li>
				
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa-tasks"></i></a>
               
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php if(isset($details['profile_pic']) && $details['profile_pic']!=''){ ?>
					<img class="user-avatar rounded-circle" src="<?php echo base_url('assets/admin_profile_pic/'.$details['profile_pic']); ?>" alt="User Avatar">
					<?php }else{ ?>
					<img class="user-avatar rounded-circle" src="<?php echo base_url();?>assets/vendor/admin/img/admin.jpg" alt="User Avatar">
					<?php } ?>
                        
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link text-white" href="<?php echo base_url('profile'); ?>"><i class="fa fa-user"></i> My Profile</a>

                        <a class="nav-link text-white" href="<?php echo base_url('profile/changepassword'); ?>"><i class="fa fa-cog"></i> Change Password</a>

                        <a class="nav-link text-white" href="<?php echo base_url('dashboard/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a>
                    </div>
                </div>
				</div>
        </div>

    </header><!-- /header -->
    <!-- Header-->