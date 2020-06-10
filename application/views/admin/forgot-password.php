
<body class="" style="background-image:url('../assets/vendor/admin/img/mobile-background.png');background-size:cover;">
    <div class="container">
        <div class="login-content mx-auto mt-5 pt-5 ">
            <div class="login-logo" style="background-color:#083c64;padding:10px;">
                <img width="250px;" class="align-content" src="<?php echo base_url(); ?>assets/vendor/admin/img/white-logo.png" alt="Skillchair">
            </div>
            <div class="login-form">
                <form method="post" action="<?php echo base_url('forgotpassword/forgotpost'); ?>" id="login_form">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $this->input->cookie('username');?>">
                    </div>
                   
                    <div class="checkbox">
                        
                       
                    </div>
                    <button type="submit" class="btn btn-info btn-flat m-b-30 m-t-30">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</body>


<script>
	$(document).ready(function() {
    $('#login_form').bootstrapValidator({
        
          fields: {
             email: {
                validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Username / Email Address wont allow <> [] = % '
					}
				}
            },
            password: {
					 validators: {
					notEmpty: {
						message: 'Password is required'
					}
				}
				}
            }
        })
     
    });
</script>
