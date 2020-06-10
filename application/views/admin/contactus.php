
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Contactus</h1>
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
                        <strong class="card-title">Contactus</strong>
                    </div>
                    <div class="card-body">
                        <form  id="add_group" method="post" action="<?php echo base_url('contactus/post'); ?>" enctype="multipart/form-data">
                            <div class="row"> 
							
                               
									
								   <div class="col-md-6">
										<div class="form-group">
											<label>Location</label>
											<input type="text" id="location" name="location" value="<?php echo isset($details['location'])?$details['location']:''?>"  placeholder="Enter Location" class="form-control">
										</div>
										</div>
										 <div class="col-md-6">
										<div class="form-group">
											<label>Mobile Number</label>
											<input type="text" id="mobile_number" name="mobile_number" value="<?php echo isset($details['mobile_number'])?$details['mobile_number']:''?>" placeholder="Enter Mobile Number" class="form-control">
										</div>
										</div>
										
                                    <div class="col-md-6">
										<div class="form-group">
											<label>Alert Mobile Number</label>
											<input type="text" id="alert_mobile_number" name="alert_mobile_number" value="<?php echo isset($details['alert_mobile_number'])?$details['alert_mobile_number']:''?>" placeholder="Enter Alert Mobile Number" class="form-control">
										</div>
										</div>
										
										
										 <div class="col-md-6">
										<div class="form-group">
											<label>Email Address</label>
											<input type="text" id="email_address" name="email_address" value="<?php echo isset($details['email_address'])?$details['email_address']:''?>" placeholder="Enter Email Address" class="form-control">
										</div>
										</div>
										
										 <div class="col-md-6">
										<div class="form-group">
											<label>Alert Email Address</label>
											<input type="text" id="alert_email_address" name="alert_email_address" value="<?php echo isset($details['alert_email_address'])?$details['alert_email_address']:''?>" placeholder="Enter Alert Email Address" class="form-control">
										</div>
										</div>
										
										 <div class="col-md-6">
										<div class="form-group">
											<label>Timing</label>
											<input type="text" id="timing" name="timing" value="<?php echo isset($details['timing'])?$details['timing']:''?>" placeholder="Enter Timing" class="form-control">
										</div>
										</div>
										<div class="col-md-6">
                    <div class="form-group">
                        <label>Twitter Link</label>
                        <input type="text" class="form-control" placeholder="Enter Twitter Link" id="twitter_link" name="twitter_link" value="<?php echo isset($details['twitter_link'])?$details['twitter_link']:''; ?>">
                    </div>
                </div>
										
					<div class="col-md-6">
                    <div class="form-group">
                        <label>facebook Link</label>
                        <input type="text" class="form-control" placeholder="Enter facebook Link" id="facebook_link" name="facebook_link" value="<?php echo isset($details['facebook_link'])?$details['facebook_link']:''; ?>">
                    </div>
                </div>					
						<div class="col-md-6">
                    <div class="form-group">
                        <label>LinkedIn Link</label>
                        <input type="text" class="form-control" placeholder="Enter LinkedIn Link" id="linkedIn_link" name="linkedIn_link" value="<?php echo isset($details['linkedIn_link'])?$details['linkedIn_link']:''; ?>">
                    </div>
                </div>				
							<div class="col-md-6">
                    <div class="form-group">
                        <label>Instagram Link</label>
                        <input type="text" class="form-control" placeholder="Enter Instagram Link" id="instagram_link" name="instagram_link" value="<?php echo isset($details['instagram_link'])?$details['instagram_link']:''; ?>">
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
			location: {
					validators: {
						notEmpty: {
							message: 'Location is required'
						}
					}
				},
				timing: {
					validators: {
						notEmpty: {
							message: 'Timing is required'
						}
					}
				},
				mobile_number: {
                 validators: {
					notEmpty: {
						message: 'Mobile Number is required'
					},
					regexp: {
					regexp:  /^[0-9]{10}$/,
					message:'Mobile Number must be 10 digits'
					}
				
				}
            },
				alert_mobile_number: {
                 validators: {
					notEmpty: {
						message: 'Alert Mobile Number is required'
					},
					regexp: {
					regexp:  /^[0-9]{10}$/,
					message:'Alert Mobile Number must be 10 digits'
					}
				
				}
            },
			email_address: {
              validators: {
					notEmpty: {
						message: 'Email Address is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            },	
			twitter_link: {
                validators: {
                    notEmpty: {
                        message: 'Twitter link is required'
                    },
                    regexp: {
                        regexp: /^(http(s)?(:\/\/))?(www\.)?twitter\.com(\/.*)?$/,
                        message: 'Twitter link format valid. For  https://www.twitter.com'
                    }

                }
                },
				facebook_link: {
                validators: {
                    notEmpty: {
                        message: 'Facebook link is required'
                    },
                    regexp: {
                        regexp: /^(http(s)?(:\/\/))?(www\.)?facebook\.com(\/.*)?$/,
                        message: 'Facebook link format valid. For  https://www.facebook.com'
                    }

                }
                },
				instagram_link: {
                validators: {
                    notEmpty: {
                        message: 'Instagram link is required'
                    },
                    regexp: {
                        regexp: /^(http(s)?(:\/\/))?(www\.)?instagram\.com(\/.*)?$/,
                        message: 'Instagram link format valid. For  https://www.instagram.com'
                    }

                }
                },
                linkedIn_link: {
                validators: {
                    notEmpty: {
                        message: 'LinkedIn link is required'
                    },
                    regexp: {
                        regexp: /^(http(s)?(:\/\/))?(www\.)?linkedin\.com(\/.*)?$/,
                        message: 'LinkedIn link  format valid. For  https://www.linkedin.com'
                    }
                                  
                }
                },
                
			alert_email_address: {
              validators: {
					notEmpty: {
						message: 'Alert Email Address is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
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