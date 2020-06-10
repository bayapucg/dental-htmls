
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Facts</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
               
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Facts</strong>
                    </div>
                    <div class="card-body">
                        <form  id="add_group" method="post" action="<?php echo base_url('facts/post'); ?>" enctype="multipart/form-data">
                            <div class="row"> 
							
                               
									
								   <div class="col-md-6">
										<div class="form-group">
											<label>Count Happy Clients</label>
											<input type="text"  name="happy_clients" value="<?php echo isset($details['happy_clients'])?$details['happy_clients']:''?>"   class="form-control">
										</div>
										</div>
										 <div class="col-md-6">
										<div class="form-group">
											<label>Count Experts Doctors</label>
											<input type="text" id="experts_doctors" name="experts_doctors" value="<?php echo isset($details['experts_doctors'])?$details['experts_doctors']:''?>"  class="form-control">
										</div>
										</div>
										
                                    <div class="col-md-6">
										<div class="form-group">
											<label>Count Quality Work</label>
											<input type="text" id="quality_work" name="quality_work" value="<?php echo isset($details['quality_work'])?$details['quality_work']:''?>"class="form-control">
										</div>
										</div>
										
										
										 <div class="col-md-6">
										<div class="form-group">
											<label>Count Award Winners</label>
											<input type="text" id="award_winners" name="award_winners" value="<?php echo isset($details['award_winners'])?$details['award_winners']:''?>"  class="form-control">
										</div>
										</div>
										
										 
										
										
										
                                    </div>
									<div class="m-t-20 text-center">
						      <button type="submit" class="btn btn-sm btn-primary" name="signup" value="Sign up">Submit</button>
							  </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<script>
    $(document).ready(function() {
    $('#add_group').bootstrapValidator({
		fields: {
			happy_clients: {
                validators: {
					notEmpty: {
						message: 'Count  Happy Clients is required'
					},regexp: {
   					regexp:  /^[0-9]*$/,
   					message:'Count  Happy Clients must be digits'
   					}
				}
            },
			experts_doctors: {
                validators: {
					notEmpty: {
						message: 'Count  Experts Doctors is required'
					},regexp: {
   					regexp:  /^[0-9]*$/,
   					message:'Count  Experts Doctors must be digits'
   					}
				}
            },
			quality_work: {
                validators: {
					notEmpty: {
						message: 'Count  Quality Work is required'
					},regexp: {
   					regexp:  /^[0-9]*$/,
   					message:'Count  Quality Work must be digits'
   					}
				}
            },
			award_winners: {
                validators: {
					notEmpty: {
						message: 'Count  Award Winners is required'
					},regexp: {
   					regexp:  /^[0-9]*$/,
   					message:'Count  Award Winners must be digits'
   					}
				}
            },
			
			
			
			
				
				
			}
        })

    });
</script>
<script>
  $(function () {
     //Initialize Select2 Elements
    $(".select2").select2();
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    
  });
</script>
    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>
	 <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>