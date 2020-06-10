
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Aboutus</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>Aboutus</li>
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
                        <strong class="card-title">Aboutus</strong>
                    </div>
                    <div class="card-body">
	<form id="add_group" method="post" action="<?php echo base_url('aboutus/addpost');?>" enctype="multipart/form-data">
     <div class="row">
	  <div class="col-md-6">
										<div class="form-group">
											<label>Title</label>
											<input type="text" id="title" name="title"  placeholder="Enter Title" class="form-control">
										</div>
										</div>
									 <div class="col-md-6">
										<div class="form-group">
											<label>Heading</label>
											<input type="text" id="heading" name="heading"  placeholder="Enter Heading" class="form-control">
										</div>
										</div>
										
                                    <div class="col-md-6">
										<div class="form-group">
											<label>Description</label>
											<textarea type="text" id="description" name="description"  placeholder="Enter Description" class="form-control"></textarea>
										</div>
										</div>
										<div class="col-md-6">
										<div class="form-group">
											<label>Image before</label>
											<input type="file" id="pic" name="pic" placeholder="" class="form-control">
										</div>
										</div>
										 <div class="col-md-6">
										<div class="form-group">
											<label>Image After</label>
											<input type="file" id="image" name="image" placeholder="" class="form-control">
										</div>
										</div>
										
											 <div class="col-md-6">
										<div class="form-group">
											<label>Years Experience</label>
											<input type="text" id="years_experience" name="years_experience"  placeholder="Enter Years Experience" class="form-control">
										</div>
										</div>
										
										
					
		</div>
						
						
		<div class="row">
		
			<div class="col-md-10 col-md-offset-10">
					<table class="table table-bordered table-hover" id="tab_logic">
						<thead>
							<tr >
								<th class="text-center">
													Type
												</th>
								
							</tr>
						</thead>
						<tbody>
							<tr id='addr0'>
								<td>
									 <div class="form-group">
                                        <label>Type</label>
                                           <div class="input-group date">
									 
									  <input type="text"  name="type[]" class="form-control" placeholder="Enter Type" >
									</div>
                                    </div>
									</td>
									
									
								</tr>
								
								
								<tr id='addr1'></tr>
							</tbody>
						</table>
						<a id="add_row" class="btn btn-default pull-left">Add Row</a>
						<a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
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
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><input type='text' name='type[]' id='name"+i+"'  class='form-control' placeholder='Enter Type'/></td>");

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


   
<script>
    $(document).ready(function() {
    $('#add_group').bootstrapValidator({

        fields: {
            title: {
                validators: {
                    notEmpty: {
                        message: ' Title is required ' 
                    }
                }
            },
			heading: {
                validators: {
                    notEmpty: {
                        message: 'Heading is required'
                    }
                }
            },
			years_experience:{
				 validators: {
					notEmpty: {
						message: 'Years Experience is required'
					},regexp: {
   					regexp:  /^[0-9]*$/,
   					message:'Years Experience must be digits'
   					}
				}
            },
				
				
			 description: {
                validators: {
                    notEmpty: {
                        message: ' Description is required ' 
                    }
                }
            },
			'type[]': {
                validators: {
                    notEmpty: {
                        message: ' Type is required ' 
                    }
                }
            },
            image: {
                    validators: {
                        regexp: {
                            regexp: "(.*?)\.(png|jpeg|jpg|gif|Png)$",
                            message: 'Uploaded file is not a valid. Only png,jpeg,jpg,gif files are allowed'
                        }
                    }
                },
			 pic: {
                    validators: {
                        regexp: {
                            regexp: "(.*?)\.(png|jpeg|jpg|gif|Png)$",
                            message: 'Uploaded file is not a valid. Only png,jpeg,jpg,gif files are allowed'
                        }
                    }
                }
			
            }
        })

    });
</script>
	
	



