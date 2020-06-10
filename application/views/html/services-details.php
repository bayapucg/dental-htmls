<div class="page-title-area page-title-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Services Details</h2>
                            <ul>
                                <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
                                <li>Services Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Services Details Area -->
        <section class="services-details-area ptb-100">
            <div class="container">
                <div class="row">
                    
                  <?php if(isset($services_details)&& count($services_details)>0){?>
                    <div class="col-lg-8 col-md-12">
					
                        <div class="services-details-header">
                            <h3><?php echo isset($services_details['services_name'])?$services_details['services_name']:''?></h3>
                            <p><?php echo isset($services_details['text'])?$services_details['text']:''?></p>
                        </div>

                        

                     
					
                        
                        </div>
                           <?php }?>
                       
					<div class="col-lg-4 col-md-12">
                        <aside class="widget-area" id="secondary">
                            <section class="widget widget_services_list">
                                <ul>
								<?php if(isset($services_list)&& count($services_list)>0){?>
								<?php  foreach ($services_list as $list){?>
                                    <li class=""><a href="<?php echo base_url('services/name/'.base64_encode($list['s_id'])); ?>"><?php echo isset($list['services_name'])?$list['services_name']:''?><i class="flaticon-next"></i></a></li>
                                    <?php }?>
                                <?php }?>
								</ul>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
