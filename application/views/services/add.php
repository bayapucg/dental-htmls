
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Servicesname</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>Servicesname</li>
                    <li>Add</li>
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
                        <strong class="card-title">Add Servicesname</strong>
                    </div>
                    <div class="card-body">
	<form id="add_group" method="post" action="<?php echo base_url('servicesnamewise/addpost');?>" enctype="multipart/form-data">
     <div class="row">
	 
				 <div class="col-md-6">
						<div class="form-group">
					<label class=" control-label">Servicesname</label>
					<div class="">
					<select id="services" name="services"  class="form-control select2" style="padding:20px; ">
					<option value="">Select</option>
					<?php if(isset($servicesname_list) && count($servicesname_list)>0){ ?>
						<?php foreach($servicesname_list as $list){ ?>
							<option value="<?php echo $list['s_id']; ?>"><?php echo $list['services_name']; ?></option>
							
									<?php } ?>
								   <?php } ?>
								  </select>
								  </div>
								 </div>
						
						</div>
	                   
	 
	              
					<div class="col-md-12">
						<div class="form-group">
							<label>Title</label>
							<textarea type="text" class="ckeditor" placeholder="Enter Title" name="text"  id="summernote"></textarea>
							</div>
						</div>
						
						
						
					</div>
		
          <div class="m-t-50 text-center">
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
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
      
        height: 300,
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
	<script>
    $(document).ready(function() {
    $('#add_group').bootstrapValidator({

        fields: {
            services: {
                validators: {
                    notEmpty: {
                        message: 'Please Select Services Name'
                    }
                }
            },
            text: {
                validators: {
                    notEmpty: {
                        message: 'text is required'
                    }
                }
            }
			
			
            }
        })

    });
</script>
		