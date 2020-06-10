
            <div class="page-wrapper">
                <div class="content container-fluid">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Testimonial List</h4>
						</div>
						
					</div>
					<form>
					
					<div class="row">
						<div class="col-md-12 bg-white">
						<div class="clearfix">&nbsp;</div>
						<?php if(isset($testimonial_list) && count($testimonial_list)>0){ ?>

							<div class="table-responsive">
									<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>S.No</th>
											<th>Image</th>
											<th>Name</th>
											<th>Designation</th>
											<th>Paragraph</th>
											<th>Status</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $cnt=1; foreach($testimonial_list as $list){?>
									
										<tr>
											<td><?php echo $cnt; ?></td>
											
											<td><img class="img-responsive" src="<?php echo base_url('assets/testimonial/'.$list['image']);?>" alt="" style="height:50px;width:auto;"></td>
											<td><?php  echo $list['name'];?></td>
											<td><?php  echo $list['designation'];?></td>
										
											<td><?php  echo $list['paragraph'];?></td>
											<td><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
											
											 <td>
                                            
											
											<a href="<?php echo base_url('testimonial/edit/'.base64_encode($list['t_id'])); ?>"  data-toggle="tooltip" title="Edit" ><i class="fa fa-edit btn btn-primary"></i></a>
											<a href="javascript;void(0);" onclick="admindeactive('<?php echo base64_encode(htmlentities($list['t_id'])).'/'.base64_encode(htmlentities($list['status']));?>');adminstatus('<?php echo $list['status'];?>')" data-toggle="modal" data-target="#myModal" title="Edit"><i class="fa fa-info-circle btn btn-warning"></i></a>
											<a href="javascript;void(0);" onclick="admindedelete('<?php echo base64_encode(htmlentities($list['t_id']));?>');admin('');" data-toggle="modal" data-target="#myModal" title="delete"><i class="fa fa-trash-o btn btn-danger"></i></a>
												 
											
                                        </td>
											
										
										</tr>
									<?php $cnt++;} ?>
									</tbody>
								</table>
							</div>
							<?php }else{ ?>
                               <div> No data available</div>
                                    <?php }?>
									<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
			
			<div style="padding:10px">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 style="pull-left" class="modal-title">Confirmation</h4>
			</div>
			<div class="modal-body">
			<div class="alert alert-danger alert-dismissible" id="errormsg" style="display:none;"></div>
			  <div class="row">
				<div id="content1" class="col-xs-12 col-xl-12 form-group">
				Are you sure ? 
				</div>
				<div class="col-xs-6 col-md-6">
				  <button type="button" aria-label="Close" data-dismiss="modal" class="btn  blueBtn">Cancel</button>
				</div>
				<div class="col-xs-6 col-md-6">
                <a href="?id=value" class="btn  blueBtn popid" style="text-decoration:none;float:right;"> <span aria-hidden="true">Ok</span></a>
				</div>
			 </div>
		  </div>
      </div>
      
    </div>
  </div>	
									
									
									
									
						</div>
					</div>
                </div>
				
            </div>
			
			
			
<script>
function admindeactive(id){
	$(".popid").attr("href","<?php echo base_url('testimonial/status'); ?>"+"/"+id);
}
function admindedelete(id){
	$(".popid").attr("href","<?php echo base_url('testimonial/delete'); ?>"+"/"+id);
	
}
function adminstatus(id){
	if(id==1){
			$('#content1').html('Are you sure you want to deactivate?');
		
	}if(id==0){
			$('#content1').html('Are you sure you want to activate?');
	}
}

function admin(id){
			$('#content1').html('Are you sure you want to delete?');

}



</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>


