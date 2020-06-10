<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>



<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-3 col-md-3">
                <div class="card">
                    <div class="card-body bg-flat-color-4">
                        <div class="h1 text-light text-right mb-4">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="h4 mb-0 text-light"><?php echo isset($facts_list['happy_clients'])?$facts_list['happy_clients']:'' ?></div>
                        <small class="text-light text-uppercase font-weight-bold">Happy Clients</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>
            </div><!-- /# column -->

            

            <div class="col-lg-3 col-md-3">
                <div class="card">
                    <div class="card-body bg-flat-color-3">
                        <div class="h1 text-right mb-4">
                            <i class="fa fa-cart-plus text-light"></i>
                        </div>
                        <div class="h4 mb-0 text-light">
                            <span class="count"><?php echo isset($facts_list['experts_doctors'])?$facts_list['experts_doctors']:'' ?></span>
                        </div>
                        <small class="text-light text-uppercase font-weight-bold">Experts Doctors</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>
            </div><!-- /# column -->


            <div class="col-lg-3 col-md-3">
                <div class="card">
                    <div class="card-body bg-flat-color-4">
                        <div class="h1 text-light text-right mb-4">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="h4 mb-0 text-light"><?php echo isset($facts_list['quality_work'])?$facts_list['quality_work']:'' ?></div>
                        <small class="text-light text-uppercase font-weight-bold">Quality Work</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>
            </div><!-- /# column -->
			
            <div class="col-lg-3 col-md-3">
                <div class="card">
                    <div class="card-body bg-flat-color-3">
                        <div class="h1 text-right mb-4">
                            <i class="fa fa-cart-plus text-light"></i>
                        </div>
                        <div class="h4 mb-0 text-light">
                            <span class="count"><?php echo isset($facts_list['award_winners'])?$facts_list['award_winners']:'' ?></span>
                        </div>
                        <small class="text-light text-uppercase font-weight-bold">Award Winners</small>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>
            </div><!-- /# column -->

            
        </div>

    </div><!-- .animated -->
</div> <!-- .content -->

