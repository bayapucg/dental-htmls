
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1> Gallery</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>Gallery</li>
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
                    
                    <div class="card-body">
	<form id="add_group" method="post" action="<?php echo base_url('gallery/addpost');?>" enctype="multipart/form-data">
     
						
						
		<div class="row">
		
			<div class="col-md-10 col-md-offset-10">
					<table class="table table-bordered table-hover" id="tab_logic">
						<thead>
							<tr >
								<th class="text-center">
													Image
												</th>
								
							</tr>
						</thead>
						<tbody>
							<tr id='addr0'>
								<td>
									 <div class="form-group">
                                        <label>Image</label>
                                           <div class="input-group date">
									 
									  <input type="file"  name="image[]" class="form-control" placeholder="DD-MM-YYYY" >
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
      $('#addr'+i).html("<td class='form-group'><input name='image[]' type='file'  class='form-control input-md'  /> </td>");

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
           
            
			'image[]': {
                    validators: {
                        notEmpty: {
                            message: 'image is required'
                        },
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
	
	



