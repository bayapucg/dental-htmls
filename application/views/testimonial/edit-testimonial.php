
            <div class="page-wrapper">
                <div class="content container-fluid bg-white">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Testimonial</h4>
						</div>
						
					
					</div>
					<form id="defaultForm" method="post" class="m-b-30"  action="<?php echo base_url('testimonial/editpost'); ?>"  enctype="multipart/form-data">
						<input type="hidden" id="t_id" name="t_id" value="<?php echo $edit_testimonial['t_id']; ?>">

								<div class="row"> 
								<div class="col-md-12"> 
									<table class="table table-bordered table-hover" id="tab_logic">
										<thead>
											<tr >
												<th class="text-center">
													Image
												</th>
												<th class="text-center">
													Name
												</th>
												<th class="text-center">
													Designation
												</th>
												<th class="text-center">
													Paragraph
												</th>
											</tr>
										</thead>
										<tbody>
											<tr id='addr0'>
												<td class="form-group">
													<input type="file" name="image" class="form-control" value="<?php echo isset($edit_testimonial['image'])?$edit_testimonial['image']:''; ?>">
												</td>
												<td class="form-group">
												<input type="text" name="name"  placeholder='Enter Name' class="form-control" value="<?php echo isset($edit_testimonial['name'])?$edit_testimonial['name']:''; ?>"/>
												</td>
												<td class="form-group">
												<input type="text" name="designation"  placeholder='Enter Designation' class="form-control" value="<?php echo isset($edit_testimonial['designation'])?$edit_testimonial['designation']:''; ?>"  />
												</td>
												<td class="form-group">
												<input type="text" name="paragraph" placeholder='Enter here..' class="form-control" value="<?php echo isset($edit_testimonial['paragraph'])?$edit_testimonial['paragraph']:''; ?>"/>
												</td>
											</tr>
											<tr id='addr1'></tr>
										</tbody>
									</table>	
									
								</div>
								</div>
								
								<div class="m-t-20 text-center">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Upload</button>
																	</div>
							</form>
						
						</div>
					</div>
				</div>
			</div>
<script>
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><input name='image[]' id='name"+i+"' type='file'  class='form-control input-md'  /> </td><td><input  name='name[]' id='mail"+i+"' type='text' placeholder='Enter Name'  class='form-control input-md'></td><td><input name='designation[]' id='mail"+i+"' type='text' placeholder='Enter Designation'  class='form-control input-md'></td><td><input  name='paragraph[]' id='mail"+i+"' type='text' placeholder='Enter here..'  class='form-control input-md'></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});
</script>

<script type="text/javascript">
    $(document).ready(function() {
		
        $('#defaultForm').bootstrapValidator({
            fields: {
				image: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            },
			name: {
                 validators: {
                        notEmpty: {
                            message: 'name is required'
                        }
                    }
                },
                designation: {
                    validators: {
                        notEmpty: {
                            message: 'designation is required'
                        }
                    }
                },
				paragraph: {
                    validators: {
                        notEmpty: {
                            message: 'paragraph is required'
                        }
                    }
                }
				
				
				
            }
			
        });

    });
</script>







