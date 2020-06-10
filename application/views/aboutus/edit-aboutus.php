
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
                        <strong class="card-title">Aboutus</strong>
                    </div>
                    <div class="card-body">
	<form id="add_group" method="post" action="<?php echo base_url('aboutus/editpost');?>" enctype="multipart/form-data">
     	<input type="hidden" id="a_id" name="a_id" value="<?php echo isset($aboutus_details['a_id'])?$aboutus_details['a_id']:'' ?>">

	 <div class="row">
	  <div class="col-md-6">
										<div class="form-group">
											<label>Title</label>
											<input type="text" id="title" name="title" value="<?php echo isset($aboutus_details['title'])?$aboutus_details['title']:'' ?>"  placeholder="Enter Title" class="form-control">
										</div>
										</div>
									 <div class="col-md-6">
										<div class="form-group">
											<label>Heading</label>
											<input type="text" id="heading" name="heading" value="<?php echo isset($aboutus_details['heading'])?$aboutus_details['heading']:'' ?>" placeholder="Enter Heading" class="form-control">
										</div>
										</div>
										
                                    <div class="col-md-6">
										<div class="form-group">
											<label>Description</label>
											<textarea type="text" id="description" name="description"   placeholder="Enter Description" class="form-control"><?php echo isset($aboutus_details['description'])?$aboutus_details['description']:'' ?></textarea>
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
											<input type="text" id="years_experience" name="years_experience" value="<?php echo isset($aboutus_details['years_experience'])?$aboutus_details['years_experience']:'' ?>" placeholder="Enter Years Experience" class="form-control">
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
						<?php $cnt=1;foreach($aboutus_details['aboutus_type'] as $lis){ ?>
							<tr id="oldid<?php echo $cnt; ?>">
								<td>
									 <div class="form-group">
                                        <label>Type</label>
                                           <div class="input-group date">
									 
									  <input type="text"  name="type[]" value="<?php echo isset($lis['type'])?$lis['type']:'' ?>" class="form-control" placeholder="Enter Type" >
									</div>
                                    </div>
									</td>
									
							<!--<td class="text-center" valign="center"><a href="javascript:void(0);" onclick="remove_type('<?php echo $lis['a_t_id']; ?>','<?php echo $cnt; ?>')"><i class="fa fa-times-circle " style="font-size:25px;" aria-hidden="true"></i></a></td>-->	
							
							<td class="text-center" valign="center"><a href="<?php echo base_url('aboutus/remove_type/'.base64_encode($lis['a_t_id'])); ?>"><i class="fa fa-times-circle " style="font-size:25px;" aria-hidden="true"></i></a></td>	

								<?php $cnt++;} ?>
								
								
								
								
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
 function remove_type(p_id,id){
	if(p_id!=''){
		 jQuery.ajax({
					url: "<?php echo base_url('aboutus/remove_type');?>",
					data: {
						p_id: p_id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
					if(data.msg==1){
						jQuery('#oldid'+id).remove();
						jQuery('#oldid'+id).hide();
					}
				 }
				});
			}
	
}
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
			pic: {
                    validators: {
                        regexp: {
                            regexp: "(.*?)\.(png|jpeg|jpg|gif|Png)$",
                            message: 'Uploaded file is not a valid. Only png,jpeg,jpg,gif files are allowed'
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
                }
			
			
            }
        })

    });
</script>
	
	



