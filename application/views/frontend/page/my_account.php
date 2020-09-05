<!-- my account -->
<?php
	$userID = $this->session->userdata('user_id');
?>
<div class="welcome py-5" id="about">
	<div class="container py-xl-5 py-lg-3">
		<div class="row">
			<div class="col-lg-12">
				<p style="background: #2da2bf; color: #fff; font-size: 18px; text-align: center;padding: 10px; text-transform: uppercase;">My Dashboard</p>
				<?php 
				    if(!empty($message)){
				?>
				    <div class="alert alert-block alert-success">
				        <button type="button" class="close" data-dismiss="alert">
				            <i class="ace-icon fa fa-times"></i>
				        </button>

				        <i class="ace-icon fa fa-check green"></i>
				        <?php echo $message; ?>
				    </div>

				<?php } ?>
			</div>
		</div>
		<div class="row py-xl-4">
			<div class="col-lg-3 welcome-left pr-lg-5" style="border:1px solid #e2e2e2;padding: 10px;">
				<div style="border:1px dotted #e2e2e2;padding: 10px;">
					<p>My Account</p>
					<ul style="list-style: none;line-height: 40px;">
						<li style="background-color: #e2e2e2; text-align: center;margin:5px;"><a href="<?= base_url('User/postReview');?>">My Post</a></li>
						<li style="background-color: #e2e2e2; text-align: center; margin:5px;"><a href="<?= base_url('User/MyProfile/'.$userID)?>">Update Profile</a></li>
						<li style="background-color: #e2e2e2; text-align: center; margin:5px;"><a href="<?= base_url('User/ChangePassword/'.$userID)?>">Change Password</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-9 welcome-right text-center mt-lg-0 mt-5" style="border:1px solid #e2e2e2;">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
	                <thead>
	                    <tr>
	                        <th>SN</th>
	                        <th>Review Type</th>
	                        <th>Review Title</th>
	                        <th>Photo</th>
	                        <th>Video Link</th>
	                        <th>Status</th>
	                    </tr>
	                </thead>   
	                <tbody>
	                    <?php
	                        $i=1;
	                        foreach($all_review as $val){ ?>
	                    <tr>
	                        <td><?php echo $i++;?></td>
	                        <td class="center"><?php echo reviewTypeName($val->review_type);?></td>
	                        <td class="center"><?php echo $val->review_title;?></td>
	                        <td class="center">
	                            <img src="<?= base_url($val->photo);?>" height="100px" width="100px">
	                        </td>
	                        <td class="center"><?php echo $val->video_link;?></td>
	                        <td class="center">
	                            <?php 
	                                if($val->review_status==1){
	                                    echo 'Published';
	                                }else{
	                                    echo 'Unpublished';
	                                }
	                            ?>
	                        
	                        </td>
	                    </tr>
	                    <?php } ?>
	                </tbody>
	            </table> 
			</div>
		</div>
	</div>
</div>
<!-- //my account -->