

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Doctors</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>Doctors</li>
                    <li>List</li>
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
                        <strong class="card-title">Doctors List</strong>
                    </div>
                    <div class="card-body">
					<?php if(isset($doctors_list) && count($doctors_list)>0){ ?>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%;">
                                <thead>
                                    <tr>
										<th>Image</th>
										<th>Name</th>
										<th>Designation</th>
										<th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php $cnt=1; foreach($doctors_list as $list){ ?>
                                    <tr>
										<td><img src="<?php echo base_url('assets/doctors/'.$list['image']); ?>" height="100px;" width="100px;"></td>
										<td><?php echo isset($list['name'])?$list['name']:''?></td>
										<td><?php echo isset($list['designation'])?$list['designation']:''?></td>
										
										
										
										<td><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
                                        <td>
                                            
											
											<a href="<?php echo base_url('doctors/edit/'.base64_encode($list['d_d_id'])); ?>"  data-toggle="tooltip" title="Edit" ><i class="fa fa-edit btn btn-primary"></i></a>
											<a href="javascript;void(0);" onclick="admindeactive('<?php echo base64_encode(htmlentities($list['d_d_id'])).'/'.base64_encode(htmlentities($list['status']));?>');adminstatus('<?php echo $list['status'];?>')" data-toggle="modal" data-target="#myModal" title="Edit"><i class="fa fa-info-circle btn btn-warning"></i></a>
											<a href="javascript;void(0);" onclick="admindedelete('<?php echo base64_encode(htmlentities($list['d_d_id']));?>');admin('');" data-toggle="modal" data-target="#myModal" title="delete"><i class="fa fa-trash-o btn btn-danger"></i></a>
												 
											
                                        </td>
                                    </tr>
                                    
                                   <?php $cnt++;}?>
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
    </div><!-- .animated -->
</div><!-- .content -->
	
<script>
function admindeactive(id){
	$(".popid").attr("href","<?php echo base_url('doctors/status'); ?>"+"/"+id);
}
function admindedelete(id){
	$(".popid").attr("href","<?php echo base_url('doctors/delete'); ?>"+"/"+id);
	
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
	$(document).ready(function() {
		$('#example').DataTable();
	} );
	</script>