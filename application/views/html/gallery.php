<div class="page-title-area page-title-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Gallery</h2>
                            <ul>
                                <li><a href="<?php echo base_url('home');?>">Home</a></li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php if(isset($gallery_list)&& count($gallery_list)>0){?>
<div class=" container py-4">
	<div class="row">
		<?php if(isset($gallery_list) && count($gallery_list)>0){ ?>
		<?php foreach($gallery_list as $list){?>
		<div class="col-md-4 mt-4">
			<img class="img-responsive img-thumbnail" src="<?php echo base_url('assets/gallery/'.$list['image']); ?>">
		</div>
		<?php }?>
		<?php }?>
	
	</div>
</div>

<?php }?>