
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1></h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                     <li><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                     <li><a href="<?php echo base_url('prifle'); ?>">Profile</a></li>
                    <li>Edit Profile</li>
                </ol>
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
                        <a href="profile.php" class="btn btn-sm btn-info">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <strong class="card-title">Edit Profile</strong>
                    </div>
                    <div class="card-body">
						<form id="defaultForm" method="post" class="" action="<?php echo base_url('profile/editpost'); ?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Name</label>
                                        <input type="text" id="name" name="name" value="<?php echo isset($user_details['name'])?$user_details['name']:''; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Email Id</label>
                                        <input type="email" id="email" name="email" value="<?php echo isset($user_details['email'])?$user_details['email']:''; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Phone Number</label>
                                        <input type="text" id="mobile" name="mobile" value="<?php echo isset($user_details['mobile'])?$user_details['mobile']:''; ?>" class="form-control">
                                    </div>
                                </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Address</label>
                                        <input type="text" id="address" name="address" value="<?php echo isset($user_details['address'])?$user_details['address']:''; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Profile Pic</label>
                                        <input type="file" id="profile_pic" name="profile_pic" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<script type="text/javascript">
$(document).ready(function() {
   $('#defaultForm').bootstrapValidator({
//       
        fields: {
            name: {
                validators: {
					notEmpty: {
						message: 'Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Name can only consist of alphanumeric, space and dot'
					}
				}
            },
            email: {
                validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            },phone: {
                 validators: {
					notEmpty: {
						message: 'Phone  Number is required'
					},
					regexp: {
					regexp:  /^[0-9]{10,14}$/,
					message:'Phone  Number must be 10 to 14 digits'
					}
				
				}
            },
			address: {
                 validators: {
					notEmpty: {
						message: 'Address is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Address wont allow <> [] = % '
					}
				
				}
            },
			image: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            }
        }
    });

});
</script>