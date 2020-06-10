
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Banners</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>Banners</li>
                    <li>Edit</li>
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
                        <strong class="card-title">Edit Banners</strong>
                    </div>
                    <div class="card-body">
	<form id="add_group" method="post" action="<?php echo base_url('banners/editpost');?>" enctype="multipart/form-data">
    <input type="hidden" name="b_id" id="b_id" value="<?php echo isset($banners_details['b_id'])?$banners_details['b_id']:''?>" >
						
		<div class="row">
		
			<div class="col-md-12 col-md-offset-12">
					<table class="table table-bordered table-hover" id="tab_logic">
						<thead>
							<tr >
							<th class="text-center">
													Image
												</th>
								<th class="text-center">
													Title
												</th>
								<th class="text-center">
													Heading
												</th>
												<th class="text-center">
													Description
												</th>
												
							</tr>
						</thead>
						<tbody>
							<tr id='addr0'>
							<td>
									 <div class="form-group">
                                        <label>Image</label>
                                           <div class="input-group date">
									 
									  <input type="file"  name="image" class="form-control" placeholder="Enter Description" >
									</div>
                                    </div>
									</td>
									
								<td>
									 <div class="form-group">
                                        <label>Title</label>
                                           <div class="input-group date">
									 
									  <input type="text"  name="title" value="<?php echo isset($banners_details['title'])?$banners_details['title']:''?>" class="form-control" placeholder="Enter Title" >
									</div>
                                    </div>
									</td>
									
									<td>
									 <div class="form-group">
                                        <label>Heading</label>
                                           <div class="input-group date">
									 
									  <input type="text"  name="heading" value="<?php echo isset($banners_details['heading'])?$banners_details['heading']:''?>" class="form-control" placeholder="Enter Heading" >
									</div>
                                    </div>
									</td>
									
									<td>
									 <div class="form-group">
                                        <label>Description</label>
                                           <div class="input-group date">
									 
									  <textarea type="text"  name="description"  class="form-control" placeholder="Enter Description" ><?php echo isset($banners_details['description'])?$banners_details['description']:''?></textarea>
									</div>
                                    </div>
									</td>
									
									
								</tr>
								
								
								<tr id='addr1'></tr>
							</tbody>
						</table>
						
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
      $('#addr'+i).html("<td><input type='file' name='image[]' id='name"+i+"'  class='form-control' placeholder='Enter Type'/></td><td><input type='text' name='title[]' id='name"+i+"'  class='form-control' placeholder='Enter Title'/></td><td><input type='text' name='heading[]' id='name"+i+"'  class='form-control' placeholder='Enter Heading'/></td><td><textarea type='text' name='description[]' id='name"+i+"'  class='form-control' placeholder='Enter Description'/></textarea></td>");

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
			
				
				
			 description: {
                validators: {
                    notEmpty: {
                        message: ' Description is required ' 
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
			 
			
            }
        })

    });
</script>
	
	



